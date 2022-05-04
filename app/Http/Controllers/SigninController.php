<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function Subscrib_Process()
{
    return view('payumoney');
}
public function Response(Request $request)
{
    dd('Payment Successfully done!');
}
public function Subscribe_Cancel()
{
     dd('Payment Cancel!');
}
}
