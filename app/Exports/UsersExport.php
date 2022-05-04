<?php

namespace App\Exports;

use App\Models\product;
use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use App\Models\Sale;
use App\Models\sale_type;

class UsersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //    checking forfilter in the url
        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            if ($filter == 'today') {
                return DB::table('sales')
                    ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                    ->join('customers', 'customers.id', '=', 'sales.customer_name')
                    ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
                    ->whereDate('date', Carbon::today()->format('Y/m/d'))
                    ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
            }
            if ($filter == 'yesterday') {
                // return Sale::whereDate('created_date', Carbon::yesterday())->get();
                return DB::table('sales')
                    ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                    ->join('customers', 'customers.id', '=', 'sales.customer_name')
                    ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
                    ->whereDate('date', Carbon::yesterday()->format('Y/m/d'))
                    ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
            }
            if ($filter == '7days') {
                $date = Carbon::now()->subDays(7);
                // return Sale::where('created_date', '>=', $date)->get();
                return DB::table('sales')
                    ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                    ->join('customers', 'customers.id', '=', 'sales.customer_name')
                    ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
                    ->whereDate('date',  '>=', $date)
                    ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
            }
            if ($filter == '30days') {
                $date = Carbon::now()->subDays(30);
                // return Sale::where('created_date', '>=', $date)->get();
                return DB::table('sales')
                    ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                    ->join('customers', 'customers.id', '=', 'sales.customer_name')
                    ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
                    ->whereDate('date',  '>=', $date)
                    ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
            }
            // return Sale::whereDay('created_at', now()->day)->all();

        }

        if (isset($_GET['fromdate']) && isset($_GET['todate'])) {
            $fromdate = $_GET['fromdate'];
            $from = \Carbon\Carbon::parse($fromdate)->format('Y/m/d');

            $todate = $_GET['todate'];
            $to = \Carbon\Carbon::parse($todate)->format('Y/m/d');
        
            return DB::table('sales')
                ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                ->join('customers', 'customers.id', '=', 'sales.customer_name')
                ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
                ->whereDate('sales.date','<=', $from)
            ->whereDate('sales.date','>=', $to)
                ->get(['sales.id', 'sale_types.type', 'sales.date', 'sales.gstin', 'customers.customer_name', 'sale_details.nos', 'sale_details.total']);
        }
    }
}
