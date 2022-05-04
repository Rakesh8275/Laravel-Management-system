<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PDF;
use App\Models\Sale;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImportExport()
    {
        return view('file-import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImport(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function exportexcell()
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }
    public function exportcsv()
    {
        return Excel::download(new UsersExport, 'users-collection.csv');
    }

    public function exportpdf()
    {
        $filter = $_GET['filter'];

        if ($filter == 'today') {
            $data['printdata'] =  DB::table('sales')
                ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                ->join('customers', 'customers.id', '=', 'sales.customer_name')
                ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
                ->whereDate('date', Carbon::today()->format('Y/m/d'))
                ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
        }
        if ($filter == 'yesterday') {
            // return Sale::whereDate('created_date', Carbon::yesterday())->get();
            $data['printdata'] =  DB::table('sales')
                ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                ->join('customers', 'customers.id', '=', 'sales.customer_name')
                ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
                ->whereDate('date', Carbon::yesterday()->format('Y/m/d'))
                ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
        }
        if ($filter == '7days') {
            $date = Carbon::now()->subDays(7);
            // return Sale::where('created_date', '>=', $date)->get();
            $data['printdata'] =  DB::table('sales')
                ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                ->join('customers', 'customers.id', '=', 'sales.customer_name')
                ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
                ->whereDate('date',  '>=', $date)
                ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
        }
        if ($filter == 'printdata') {
            $date = Carbon::now()->subDays(30);
            // return Sale::where('created_date', '>=', $date)->get();
            $data['thirtydays'] =  DB::table('sales')
                ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                ->join('customers', 'customers.id', '=', 'sales.customer_name')
                ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
                ->whereDate('date',  '>=', $date)
                ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
        }
        
        $pdf = PDF::loadView('printlist', $data);
        return $pdf->stream('sale.pdf',array('Attachment'=>0));
    }
}
