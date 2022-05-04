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
                    <div class="col-md-6 t-a-r">
                        <div class="card push-top" style="color:black">
                            <div class="card-header">
                                Edit & Update
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
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('product.update', $product->id) }}">
                                                <div class="row">
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            @csrf
                                                            @method('PATCH')
                                                            <label for="product_name">Product Name</label>
                                                            <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="unit">unit</label>
                                                            <input type="number" class="form-control" name="unit" value="{{ $product->unit }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="sale_price">Sale Price</label>
                                                            <input type="number" class="form-control" name="sale_price" value="{{ $product->sale_price }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input type="number" class="form-control" name="price" value="{{ $product->price }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="hsnc">HSNC</label>
                                                            <input type="number" class="form-control" name="hsnc" value="{{ $product->hsnc }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="product_code">Product Code</label>
                                                            <input type="number" class="form-control" name="product_code" value="{{ $product->product_code }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="igst">IGST</label>
                                                            <input type="number" class="form-control" name="igst" value="{{ $product->igst }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="cgst">CGST</label>
                                                            <input type="number" class="form-control" name="cgst" value="{{ $product->cgst }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="sgst">SGST</label>
                                                            <input type="number" class="form-control" name="sgst" value="{{ $product->sgst }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="cess">CESS</label>
                                                            <input type="number" class="form-control" name="cess" value="{{ $product->cess }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-md-1">
                                                        <div class="form-group">
                                                            <label for="inventory">Inventory</label>
                                                            <input type="number" class="form-control" name="inventory" value="{{ $product->inventory }}" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <button type="submit" class="btn btn-block btn-danger">Update product</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection