@extends('layout.mainlayout')
@section('layout.content')
<div class="row f-w">
    <div class="col-md-12">
        <div class="card  card-plain">
            <div class="card-header">
                <div class="row f-w">
                    <div class="col-md-6">
                        <h4 class="card-title">Create Customer</h4>
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
                        <a href="{{ route('customer.index') }}">
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
                        <form method="post" action="{{ route('customer.update', $customer->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Customer Name</label>
                                        <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $customer->customer_name }}" >
                                    </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label>Customer Code</label>
                                        <input type="text" name="customer_code" id="customer_code" class="form-control" value="{{ $customer->customer_code }}">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Shop Name</label>
                                        <input type="text" class="form-control" name="shop_name" id="shop_name" value="{{ $customer->shop_name }}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label>House code</label>
                                        <input type="text" class="form-control" name="house_code" id="house_code" value="{{ $customer->house_code }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label>Lane</label>
                                        <input type="text" name="lane" id="lane" class="form-control" value="{{ $customer->lane }}">
                                    </div>
                                </div>

                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input name="area" id="area" type="text" class="form-control" value="{{ $customer->area }}">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input type="text" name="pincode" id="pincode" class="form-control" value="{{ $customer->pincode }}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label>GSTIN</label>
                                        <input type="text" name="gstin" id="gstin" class="form-control" value="{{ $customer->gstin }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Phone1</label>
                                        <input type="text" name="phone1" id="phone2" class="form-control" value="{{ $customer->phone1 }}">
                                    </div>
                                </div>
                                <div class="col-md-3 pl-md-1">
                                    <div class="form-group">
                                        <label>phone2</label>
                                        <input type="text" name="phone2" id="phone2" class="form-control" value="{{ $customer->phone2 }}">
                                    </div>
                                </div>
                                <div class="col-md-3 pl-md-1">
                                    <div class="form-group">
                                        <label>OP Balance</label>
                                        <input type="text" name="op_balance" id="op_balance" class="form-control" value="{{ $customer->op_balance }}">
                                    </div>
                                </div>
                                <div class="col-md-3 pl-md-1">
                                    <div class="form-group">
                                        <label>Credit Balance</label>
                                        <input type="text" name="credit_balance" id="credit_balance" class="form-control" value="{{ $customer->credit_balance }}">
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