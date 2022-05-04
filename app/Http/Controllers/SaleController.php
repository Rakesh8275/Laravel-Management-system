<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\customer;
use App\Models\sale_details;
use App\Models\product;
use Illuminate\Http\Request;
use Sale as GlobalSale;
use App\Models\sale_type;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use PDF;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Razorpay\Api\Api;
use App\Models\Payment;



class SaleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            $data['customer'] = Customer::all();
            $data['product'] = Product::all();
            $data['cu'] = Customer::all();

            $data['sale'] = sale_type::all();
            $data['state'] = State::all();
            $data['cus'] = Customer::all();
            $data['st'] = State::all();
            $data['city'] = City::all();
            $last1 = Carbon::now()->month();
            return view('sale.salecreate', $data);
        } else {
            return redirect('login')->withSuccess('You are not allowed to access');
        }
    }

    public function listsale()
    {

        if (Auth::check()) {
            $users['list'] = DB::table('sales')
                ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
                ->join('customers', 'customers.id', '=', 'sales.customer_name')
                ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
                ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type']);
            return view('sale.salelist', $users);
        } else {
            return redirect('login')->withSuccess('You are not allowed to access');
        }
    }

    public function edit($id)
    {
        $saleok['all'] = DB::table('sales')
            ->join('sale_details', 'sale_details.sale_id', '=', 'sales.id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
            ->join('states', 'states.id', '=', 'sales.state')
            ->where('sales.id', $id)
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type', 'states.name'])
            ->first();
        $saleok['sale'] = sale_type::all();
        return view('sale.saleedit', $saleok);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::whereId($id)->update($request->all());
        Alert::success('Congrats', 'You\'ve Successfully updated');
        return redirect('/salelist')->with('completed', 'product has been updated');
    }


    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchProduct(Request $request)
    {
        $data['pr'] = Product::where("id", $request->product_id)->get(["id", "cgst", "sgst", "product_code", "igst", "sale_price", "unit", "price"])->first();
        return response()->json($data);
    }

    public function fetchCustomer(Request $request)
    {
        $data['cus'] = Customer::where("id", $request->customer_id)->get(["id", "gstin", "phone1", "customer_name"])->first();
        return response()->json($data);
    }
    public function fetchSale(Request $request)
    {
        $data['sale_type'] = sale_type::where("id", $request->sale_id)->get(["id", "type", "bill"])->first();
        return response()->json($data);
    }
    public function fetchSales(Request $request)
    {
        $data['sales'] = DB::table('sales')
            ->where('sale_type', '=', $_POST['optvalue'])
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get(["id", "invoiceno", "bill"])->first();
        $data['lastid'] = DB::getPdo()->lastInsertId();
        return response()->json($data);
    }
    public function fetchtoday(Request $request)
    {
        $now = Carbon::now();
        $today = $now->format('Y/m/d');
        $todaylist = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
            ->where('sales.date', '=', $today)
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type']);
        return response()->json($todaylist);
    }
    public function fetchyesterday(Request $request)
    {
        $now = Carbon::yesterday();
        $yesterday = $now->format('Y/m/d');
        $yesterdaylist = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
            ->where('sales.date', '=', $yesterday)
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type']);
        return response()->json($yesterdaylist);
    }
    public function fetchlast7(Request $request)
    {
        $now = Carbon::now()->subDays(7);
        $last7 = $now->format('Y/m/d');
        $last7list = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
            ->where('sales.date', '>', $last7)
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type']);
        return response()->json($last7list);
    }
    public function fetchlast30(Request $request)
    {
        $now = Carbon::now()->subDays(30);
        $last30 = $now->format('Y/m/d');
        $last30list = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
            ->where('sales.date', '>', $last30)
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type']);
        return response()->json($last30list);
    }
    public function fetchcustom(Request $request)
    {
        $fromdate = $_POST['from_id'];
        $from = \Carbon\Carbon::parse($fromdate)->format('Y/m/d');

        $todate = $_POST['to_id'];
        $to = \Carbon\Carbon::parse($todate)->format('Y/m/d');
        $cusomlist = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
            ->whereBetween('sales.date', [$from, $to])
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type']);
        return response()->json($cusomlist);
    }
    public function fetchthedata(Request $request)
    {
        $data['saleok'] = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.bill')
            ->where('id', '$id')
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type'])
            ->first();
        return response()->json($data);
    }

    public function store(Request $request)
    {

        if ($_POST['state']) {
            $state = $_POST['state'];
        } else {
            $state = $_POST['state1'];
        }

        if ($_POST['customer_name']) {
            $customer_name = $_POST['customer_name'];
        } else {
            $customer_name = $_POST['customer_name1'];
        }

        if ($_POST['billing_name']) {
            $billing_name = $_POST['billing_name'];
        } else {
            $billing_name = $_POST['customer_name1'];
        }
        if ($_POST['contact']) {
            $contact = $_POST['contact'];
        } else {
            $contact = $_POST['contact1'];
        }
        if ($_POST['gstin']) {
            $gstin = $_POST['gstin'];
        } else {
            $gstin = '123456';
        }
        // $rpz = $_POST['razorpay_payment_id']; 

        if (isset($_POST['razorpay_payment_id'])){
            $rpz =$_POST['razorpay_payment_id'];
        }
        else{
            $rpz = "";
        }

        $product = Sale::insert([
            'date' => $_POST['date'],
            'sale_type' => $_POST['sale_type'],
            'bill' => $_POST['bill'],
            'customer_type' => $_POST['customer_type'],
            'customer_name' => $customer_name,
            'billing_name' => $billing_name,
            'gstin' => $gstin,
            'state' => $state,
            'contact' => $contact,
            'district' => $_POST['district'],
            'lane' => $_POST['lane'],
            'invoiceno' => $_POST['bill'],
            'transaction_id' => $rpz,

        ]);
        $saleId = DB::getPdo()->lastInsertId();



        DB::table('sale_details')->insert(
            [
                'product_code' => $_POST['product_code'],
                'product_name' => $_POST['productname'],
                'tax' => $_POST['tax'],
                'unit' => $_POST['unit'],
                'nos' => $_POST['nos'],
                'rate' => $_POST['rate'],
                'tottax' => $_POST['tottax'],
                'total' => $_POST['total'],
                'sale_id' => $saleId,

            ]

        );

        if ($_POST['customer_name']) {
            $custo1 = DB::table('customers')->where('id', $_POST['customer_name'])->get('customer_name', 'inventory')->first();
            $custo = $custo1->customer_name;
        } else {
            $custo = $_POST['customer_name1'];
        }


        $stat = DB::table('states')->where('id', $_POST['state'])->first();
        $prod = DB::table('products')->where('id', $_POST['productname'])->first();
        $product_nam = $prod->product_name;
              $data = [
            'tax' => $_POST['tax'],
            'qty' => $_POST['nos'],
            'customer_name' => $custo,
            'billing_name' => $billing_name,
            'gstin' => $gstin,
            'contact' => $contact,
            'product_name' => $product_nam,
            'address' => $stat,
            'ivdate' => $_POST['date'],
            'qty' => $_POST['nos'],
            'tottax' => $_POST['tottax'],
            'grandtotal' => $_POST['total'],
            'rate' => $_POST['rate'],
            'date' => $_POST['date'],
            'datea' => date('d/m/Y'),
            'invoiceno' => $_POST['bill'],
        ];
        $data12 = DB::table('products')->where('id', $_POST['productname'])->get('inventory')->first();
        $data13 = $_POST['nos'];
        $remaining = $data12->inventory - $data13;

        $value = Cookie::get('total');


        $pdf = PDF::loadView('myPDF', $data);
        $as = DB::table('products')->where('id', $_POST['productname'])->update(['inventory' => $remaining,]);

        return $pdf->stream('sale.pdf');
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        $data['payinfo'] = Payment::create([
            'payment_id' => $request->razorpay_payment_id,
            'user_id' => '1',
            'amount' => $request->amount,
            'date' => $_POST['date'],
            'sale_type' => $_POST['sale_type'],
            'bill' => $_POST['bill'],
            'customer_type' => $_POST['customer_type'],
            'customer_name' => $customer_name,
            'billing_name' => $billing_name,
            'gstin' => $gstin,
            'state' => $state,
            'contact' => $contact,
            'district' => $_POST['district'],
            'lane' => $_POST['lane'],
            'product_code' => $_POST['product_code'],
            'product_name' => $_POST['productname'],
            'tax' => $_POST['tax'],
            'unit' => $_POST['unit'],
            'nos' => $_POST['nos'],
            'rate' => $_POST['rate'],
            'tottax' => $_POST['tottax'],
            'total' => $_POST['total'],
        ]);
    }
    public function exportonlinepdf()
    {

        $sale_id = $_GET['id'];
        $saleonline = DB::table('sales')
            ->join('sale_details', 'sales.id', '=', 'sale_details.sale_id')
            ->join('customers', 'customers.id', '=', 'sales.customer_name')
            ->join('sale_types', 'sale_types.id', '=', 'sales.sale_type')
            ->join('states', 'states.id', '=', 'sales.state')
            ->join('products', 'products.id', '=', 'sale_details.product_name')
            // ->join('products', 'products.id', '=', 'sales_details.product_name')
            ->where('sales.id', '=', $sale_id)
            ->get(['sales.*', 'sale_details.*', 'customers.customer_name', 'sale_types.type', 'states.name','products.product_name' ]);

            $tax = $saleonline[0]->tax;
            $gstin = $saleonline[0]->gstin;
            $address  = $saleonline[0]->name;
            $custo  = $saleonline[0]->customer_name;
            $ivdate  = $saleonline[0]->date;
            $product_name = $saleonline[0]->product_name;
            $qty = $saleonline[0]->nos;
            $rate = $saleonline[0]->rate;
            $tottax = $saleonline[0]->tottax;
            $grandtotal = $saleonline[0]->total;
            $contact = $saleonline[0]->contact;
            $invoiceno = $saleonline[0]->bill;
            
           
        $data = [
            'tax' => $tax,
            'gstin' => $gstin,
            'address' => $address,
            'customer_name' => $custo,
            'ivdate' => $ivdate,
            'product_name' => $product_name,
            'qty' => $qty,
            'rate' => $rate,
            'tottax' => $tottax,
            'grandtotal' => $grandtotal,
            'date' => date('d/m/Y'),
            'contact' => $contact,
            'invoiceno' => $invoiceno,
         ];
        $pdf = PDF::loadView('exportonline', $data);
        return $pdf->stream('onlineinvoice.pdf');
    }
}
 