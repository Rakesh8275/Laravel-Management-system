<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;
use Redirect;

class RazorpayController extends Controller
{    
    public function payWithRazorpay()
    {        
        return view('payWithRazorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        
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
        
        $payInfo = Payment::insert([
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
                    'invoiceno' => $_POST['bill'],            
                    'product_code' => $_POST['product_code'],
                    'product_name' => $_POST['product'],
                    'tax' => $_POST['tax1'],
                    'unit' => $_POST['unit'],
                    'nos' => $_POST['nos'],
                    'rate' => $_POST['rate'],
                    'tottax' => $_POST['tottax'],
                    'total' => $_POST['total'],
                ]);
                print_r($payInfo); exit;
        Payment::insertGetId($payInfo);  
        
        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
    }
}
