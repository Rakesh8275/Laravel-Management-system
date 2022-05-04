@extends('layout.mainlayout')
@section('layout.content')
<div class="row f-w">
    <div class="col-md-12">
        <div class="card  card-plain">
            <div class="card-header">
                <div class="row f-w">
                    <div class="col-md-6">
                        <h4 class="card-title">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('product.update', $product->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input type="number" name="unit" id="unit" class="form-control" value="{{ $product->unit }}">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" class="form-control" name="sale_price" id="sale_price" value="{{ $product->sale_price }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 px-md-1">
                                        <div class="form-group">
                                            <label>HSNC</label>
                                            <input type="text" name="hsnc" id="hsnc" class="form-control" value="{{ $product->hsnc }}">
                                        </div>
                                    </div>

                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Product Code</label>
                                            <input name="product_code" id="product_code" type="text" class="form-control" value="{{ $product->product_code }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>IGST%</label>
                                            <input type="text" name="igst" id="igst" class="form-control" value="{{ $product->igst }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <div class="form-group">
                                            <label>CGST%</label>
                                            <input type="text" name="cgst" id="cgst" class="form-control" value="{{ $product->cgst }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>SGST%</label>
                                            <input type="text" name="sgst" id="sgst" class="form-control" value="{{ $product->sgst }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pl-md-1">
                                        <div class="form-group">
                                            <label>CESS%</label>
                                            <input type="text" name="cess" id="cess" class="form-control" value="{{ $product->cess }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pl-md-1">
                                        <div class="form-group">
                                            <label>Inventory</label>
                                            <input type="text" name="inventory" id="inventory" class="form-control" value="{{ $product->inventory }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection