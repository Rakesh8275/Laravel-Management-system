@extends('layout.mainlayout')
@section('layout.content')
<div class="row f-w">
    <div class="col-md-12">
        <div class="card  card-plain">
            <div class="card-header">
                <div class="row f-w">
                    <div class="col-md-6">
                        <h4 class="card-title">Create Product</h4>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <div class="col-md-6 t-a-r">
                        <a href="{{ route('product.index') }}">
                            <button type="submit" class="btn btn-fill btn-primary">List Customer</button>
                        </a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form method="post" id="myform" action="{{ route('product.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" id="product_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input type="text" name="unit" id="unit" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Sale Price</label>
                                        <input type="text" class="form-control" name="sale_price" id="sale_price">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price" id="price">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>HSNC</label>
                                        <input type="text" name="hsnc" id="hsnc" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Product Code</label>
                                        <input name="product_code" id="product_code" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>IGST%</label>
                                        <input type="text" name="igst" id="igst" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>CGST%</label>
                                        <input type="text" name="cgst" id="cgst" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>SGST%</label>
                                        <input type="text" name="sgst" id="sgst" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>CESS%</label>
                                        <input type="text" name="cess" id="cess" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Inventory</label>
                                        <input type="text" name="inventory" id="inventory" class="form-control">
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