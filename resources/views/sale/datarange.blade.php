@extends('layout.mainlayout')
@section('layout.content')
<div class="push-top">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <div class="card  card-plain">
        <div class="card-header">
            <div class="row f-w">
                <div class="col-md-6">
                    <h4 class="card-title"> Product List</h4>
                </div>
                <div class="col-md-6 t-a-r">
                    <a href="{{ route('product.create') }}">
                        <button type="submit" class="btn btn-fill btn-primary">Create Product</button>
                    </a>
                    <a href="/salelist">
                        <button type="submit" class="btn btn-fill btn-danger">List Sale</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered nowrap table tablesorter" style="width:100%">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Product Name</td>
                        <td>Product Code</td>
                        <td>Unit</td>
                        <td>Sale Price</td>
                        <td>Price</td>
                        <td>HSNC</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_code}}</td>
                        <td>{{$product->unit}}</td>
                        <td>{{$product->sale_price}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->hsnc}}</td>
                        <td class="form_action_inline">
                            <!-- product - c nae. -->
                            <!-- edit - functionnae insidet  controleler -->
                            <a href="{{ route('product.edit', $product->id)}}">
                            <button type="button" class="btn-icon btn-primary"><span class="v-btn__content">
                                    <i class="tim-icons icon-pencil"></i> </span>
                            </button></a>
                            <form action="{{ route('product.destroy', $product->id)}}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-icon btn-danger"><span class="v-btn__content"> <i class="tim-icons icon-trash-simple"></i> </span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        @endsection