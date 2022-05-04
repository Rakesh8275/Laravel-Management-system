<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $customer = customer::all();
            return view('/customer/customerlist', compact('customer'));
        }else{
            return redirect('login')->withSuccess('You are not allowed to access');
  
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('customer.customercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $customer = customer::create($request->all());
        Alert::success('Congrats', 'You\'ve Successfully created');
        return redirect('/customer')->with('completed', 'customer has been saved!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::findOrFail($id);
        return view('customer.customeredit', compact('customer'));
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
        
        customer::whereId($id)->update($request->except('_token','_method'));
        Alert::success('Congrats', 'You\'ve Successfully updated');
        return redirect('/customer')->with('completed', 'customer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::findOrFail($id);
        $customer->delete();
        toast('Customer deleted!','success');
        return redirect('/customer')->with('completed', 'customer has been deleted');
    }
}
