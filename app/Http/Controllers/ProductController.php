<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $product = product::all();
            return view('/product/productlist', compact('product'));
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
        return view('product.create');
    }
    // Alert::success('Congrats', 'You\'ve Successfully created');

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'product_name' => 'required|max:255',
            'unit' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'price' => 'required|numeric',
            'hsnc' => 'required|numeric',
            'product_code' => 'required|numeric',
            'igst' => 'required|numeric',
            'cgst' => 'required|numeric',
            'sgst' => 'required|numeric',
            'cess' => 'required|numeric',
            'inventory' => 'required|numeric',
        ]);
        $product = product::create($storeData);

        
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect('/product')->with('completed', 'product has been saved!');
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
        $product = product::findOrFail($id);
        return view('product.productedit', compact('product'));
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
        $updateData = $request->validate([
            'product_name' => 'required|max:255',
            'unit' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'price' => 'required|numeric',
            'hsnc' => 'required|numeric',
            'product_code' => 'required|numeric',
            'igst' => 'required|numeric',
            'cgst' => 'required|numeric',
            'sgst' => 'required|numeric',
            'cess' => 'required|numeric',
            'inventory' => 'required|numeric',
        ]);
        product::whereId($id)->update($updateData);
        Alert::success('Congrats', 'You\'ve Successfully updated');
        return redirect('/product')->with('completed', 'product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        
        
        $product = product::findOrFail($id);
        $product->delete();
        toast('Product deleted!','success');
        return redirect('/product')->with('completed', 'product has been deleted');
    }
}
