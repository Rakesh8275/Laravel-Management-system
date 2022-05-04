@extends('layout.mainlayout')
@section('layout.content')

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row f-w">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <div class="row f-w">
                        <div class="col-md-6">
                            <h4 class="card-title">Edit Sale</h4>
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
                            <a href="{{ route('sale.index') }}">
                                <button type="submit" class="btn btn-fill btn-danger">List Sale</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <form method="post" id="myform" action="{{ route('sale.update', $all->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" name="date" id="datepicker" class="form-control" value="{{$all->date}}">

                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Sale Type</label>
                                            <select name="sale_type" class="form-control" id="editsaletype">
                                                <option value="" selected>{{$all->type}}</option>
                                                @foreach($sale as $sale)
                                                <option value="{{ $sale->id }}">{{ $sale->type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Bill</label>
                                            <input type="text" class="form-control" name="bill" id="editbill" value="{{$all->bill}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Customer Type</label>
                                            <select name="customer_type" class="form-control" id="customertype">
                                                <option value="" selected>{{$all->customer_type}}</option>
                                                <option value="2">from</option>
                                                <option value="3">custom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            
                                if ($all->customer_type == 2) {
                                ?>
                                    <div class="custom1" id="editcustom1">
                                        <div class="row">

                                            <div class="col-md-4 pr-md-1">
                                                <div class="form-group">
                                                    <label>Customer Name</label>
                                                    <input type="text" name="customer_name" id="editcustomer_name" class="form-control" value="{{$all->customer_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-md-1">
                                                <div class="form-group">
                                                    <label>Billing Name </label>
                                                    <input type="text" class="form-control" name="billing_name" id="editbilling_name" value="{{$all->billing_name}}">
                                                </div>
                                            </div>

                                            <div class="col-md-4 pr-md-1">
                                                <div class="form-group">
                                                    <label>GSTIN </label>
                                                    <input type="text" class="form-control" name="gstin" id="editgstin" value="{{$all->gstin}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label>State</label>

                                                    <input type="text" class="form-control" name="state" id="editstate" value="{{$all->name}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" class="form-control" name="contact" id="editcontact" value="{{$all->contact}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($all->customer_type == 3) {
                                ?>
                                    <div class="custom2" id="custom2">
                                        <div class="row">
                                            <div class="col-md-3 pr-md-1">
                                                <div class="form-group">
                                                    <label>Customer Name</label>
                                                    <input type="text" class="form-control" name="customer_name1" id="editcustomer_name1" value="{{$all->customer_name}}">


                                                </div>
                                            </div>

                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="state" id="editstate1" value="{{$all->name}}">
                                                </div>
                                            </div>


                                            </html>
                                            <div class="col-md-3 pr-md-1">
                                                <div class="form-group">
                                                    <label>Lane </label>
                                                    <input type="text" class="form-control" name="lane" id="editlane" value="{{$all->lane}}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label>District </label>
                                                    <select name="district" id="editcity-dd" class="form-control" value="{{$all->district}}">
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" class="form-control" name="contact1" id="editcontact1" value="{{$all->contact}}">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="list_wrapper">
                            <div class="row">
                                <div class="col-xs-1 col-sm-1 col-md-2n auto-index ">
                                    <div class="form-group">
                                        <label>Sl No</label>
                                        <input type="text" name="slno" id="slno" class="form-control" value="1">

                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-1 col-md-2n">
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input type="text" class="form-control" name="product_code" id="product_code" value="{{$all->product_code}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Item</label>
                                        <input type="text" class="form-control" name="product1" id="editproductname" value="{{$all->product_name}}" disabled>


                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-1 col-md-2n">
                                    <div class="form-group">
                                        <label>Tax</label>
                                        <input type="text" class="form-control" name="tax1" id="edittax1" value="{{$all->tax}}" disabled>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-sm-1 col-md-2n">
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <input type="text" class="form-control" name="unit" id="editunit" value="{{$all->unit}}" disabled>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-sm-1 col-md-2n">
                                    <div class="form-group">
                                        <label>Nos</label>
                                        <input type="text" class="form-control" name="nos" id="editnos" value="{{$all->nos}}">
                                    </div>
                                </div>
                                <div class="col-md-1 pr-md-1">
                                    <div class="form-group">
                                        <label>Tax</label>
                                        <input type="text" class="form-control" name="tottax" id="edittottax" value="{{$all->tottax}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-1 pr-md-1">
                                    <div class="form-group">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="total" id="edittotal" value="{{$all->total}}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">

                    <div class="col-md-12 pr-md-1 auto-index ">
                        <div class="form-group">
                            <label>Vehicle</label>
                            <input type="text" name="vehicle" id="vehicle" class="form-control">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 editqty_total">Qty Total:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editqty_total_dis">{{$all->nos}}</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editsub_total">Sub Total:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editsub_total_dis">{{$all->rate*$all->nos}}</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editcgstt">CGST:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editcgstt_dis">{{($all->rate*($all->tax/100)/2)}}</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editsgstt">SGST:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editsgstt_dis">{{($all->rate*($all->tax/100)/2)}}</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editigstt">IGST:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editigstt_dis"></div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editcesss">CESS:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editcesss_dis">0</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editgrand_total">Grand Total:</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 editgrand_total_dis">{{$all->total}}</div>
                    </div>






                    <div class="col-md-1 pr-md-1">
                        <label></label>
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>

                    </div>

                </div>
            </div>

        </div>
        </form>
    </div>
    @endsection