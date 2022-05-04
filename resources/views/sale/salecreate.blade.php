<?php
use RealRashid\SweetAlert\Facades\Alert;
?>
@extends('layout.mainlayout')
@section('layout.content')

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="row f-w">

    <div class="col-md-12">
        <div class="card  card-plain">
            <div class="card-header">
                <div class="row f-w">
                    <div class="col-md-6">
                        <h4 class="card-title">Create Sale</h4>
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
                        <a href="/salelist">
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
                        <form method="POST" id="myform" action="{{route('sale.store') }} " formtarget="_blank" target="_blank">
                            @csrf

                            <div class="row">
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" name="date" id="datepicker" class="form-control" value="{{date('Y/m/d')}}">

                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Sale Type</label>
                                        <select name="sale_type" class="form-control" id="sale_type">
                                            <option selected>Choose Sale Type</option>
                                            @foreach($sale as $sale)
                                            <option value="{{ $sale->id }}">{{ $sale->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Bill</label>
                                        <input type="text" class="form-control" name="bill" id="bill">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-md-1">
                                    <div class="form-group">
                                        <label>Customer Type</label>
                                        <select name="customer_type" class="form-control" id="customerselect">
                                            <option selected>Choose Customer Type</option>
                                            <option value="1">From List</option>
                                            <option id="customselect" value="2">Custom</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="custom1" style="display: none;" id="custom1">
                                <div class="row">

                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <select name="customer_name" class="form-control" id="customer_name">
                                                <option value="" selected>Choose Customer</option>
                                                @foreach($customer as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->customer_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label>Billing Name </label>
                                            <input type="text" class="form-control" name="billing_name" id="billing_name">
                                        </div>
                                    </div>

                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label>GSTIN </label>
                                            <input type="text" class="form-control" name="gstin" id="gstin" value="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select name="state" id="state-dd" class="form-control">
                                                <option value="1" selected>Choose State</option>
                                                @foreach($st as $s)
                                                <option value="{{ $s->id }}">{{ $s->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" name="contact" id="contact" value="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="custom2" style="display: none;" id="custom2">
                                <div class="row">
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <input type="text" class="form-control" name="customer_name1" id="customer_name">


                                        </div>
                                    </div>

                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select name="state1" id="state-dd" class="form-control">
                                                <option value="" selected>Choose State</option>
                                                @foreach($state as $state)
                                                <option value="{{ $state->id }}">{{ $state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    </html>
                                    <div class="col-md-3 pr-md-1">
                                        <div class="form-group">
                                            <label>Lane </label>
                                            <input type="text" class="form-control" name="lane" id="lane">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>District </label>
                                            <select name="district" id="city-dd" class="form-control">
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" name="contact1" id="contact">
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
                    <div class="list_wrapper">
                        <div class="row">
                            <div class="col-xs-1 col-sm-1 col-md-2n auto-index ">
                                <div class="form-group">
                                    <label>Sl No</label>
                                    <input type="text" name="slno" id="slno" class="form-control">

                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-2n">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" name="product_code" id="product_code" value="">
                                </div>
                            </div>
                            <div class="col-md-3 pr-md-1">
                                <div class="form-group">
                                    <label>Item</label>
                                    <select name="productname" id="productname" class="form-control">
                                        <option value="" selected>Choose item </option>
                                        @foreach($product as $p)
                                        <option value="{{ $p->id }}">{{ $p->product_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-2n">
                                <div class="form-group">
                                    <label>Tax</label>
                                    <input type="text" class="form-control" name="tax" id="tax" value="">
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-2n">
                                <div class="form-group">
                                    <label>Unit</label>
                                    <input type="text" class="form-control" name="unit" id="unit" value="">
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-2n">
                                <div class="form-group">
                                    <label>Nos</label>
                                    <input type="text" class="form-control" name="nos" id="nos" value="">
                                </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-2n">
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input type="text" class="form-control" name="rate" id="rate" value="">
                                </div>
                            </div>
                            <div class="col-md-1 pr-md-1">
                                <div class="form-group">
                                    <label>Tax</label>
                                    <input type="text" class="form-control" name="tottax" id="tottax" value="">
                                </div>
                            </div>
                            <div class="col-md-1 pr-md-1">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="text" class="form-control" name="total" id="total" value="">
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
                    <div class="col-xs-6 col-sm-6 col-md-6 qty_total">Qty Total:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 qty_total_dis"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 sub_total">Sub Total:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 sub_total_dis"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 cgstt">CGST:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 cgstt_dis"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 sgstt">SGST:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 sgstt_dis"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 igstt">IGST:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 igstt_dis"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 cesss">CESS:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 cesss_dis"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 grand_total">Grand Total:</div>
                    <div class="col-xs-6 col-sm-6 col-md-6 grand_total_dis"></div>
                </div>

                <div class="col-md-3 pr-md-1">
                    <label></label>
                    <span id="savesale" class="btn btn-fill btn-primary">Save</span>

                </div>

            </div>
        </div>
    </div>
    <div id="paymentmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">



            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="color: black;">Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 10px;">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 pr-md-6" style="display: flex; justify-content: center;">
                                <button type="submit" class="btn btn-fill btn-success" id="offline">Offline</button>
                            </div>
                            <div class="col-md-6 pr-md-6" style="display: flex; justify-content: center;">
                                <button type="submit" class="btn btn-fill btn-warning" id="rzp_button1">Online</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $('#rzp_button1').on('click', function(e) {
        // $("div").text($("form").serialize());
        e.preventDefault();
        var amount = $('#total').val();
        var total_amount = amount * 100;
        var date = $('#datepicker').val();
        var sale_type = $('#sale_type').val();
        var bill = $('#bill').val();
        var customer_type = $('#customerselect').val();
        var customer_name = $('#customer_name').val();
        var billing_name = $('#billing_name').val();
        var gstin = $('#gstin').val();
        var state = $('#state-dd').val();
        var contact = $('#contact').val();
        var lane = $('#lane').val();
        var district = $('#city-dd').val();
        var productname = $('#productname').val();
        var product_code = $('#product_code').val();
        var unit = $('#unit').val();
        var nos = $('#nos').val();
        var rate = $('#rate').val();
        var tax = $('#tax').val();
        var tottax = $('#tottax').val();
        var all = $('form').serialize();
        var options = {
            "key": "rzp_test_ZEa9xGmjWxNUvb", // Enter the Key ID generated from the Dashboard
            "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "currency": "INR",
            "name": productname,
            "description": "Test Transaction",
            "image": "https://im.indiatimes.in/content/2020/Jul/indian-currency-389006_1920_5f1547587ee6e.jpg?w=725&h=543",
            "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ url('sale') }}",
                    data: $('form').serialize(),
                    data:{
                        razorpay_payment_id: response.razorpay_payment_id,
                        date:date,
                        sale_type:sale_type,
                        bill:bill,
                        customer_type:customer_type,
                        customer_name:customer_name,
                        billing_name:billing_name,
                        gstin:gstin,
                        state:state,
                        contact:contact,
                        lane:lane, 
                        district:district,
                        product_code:product_code,
                        productname:productname, 
                        tax:tax,
                        unit:unit,
                        nos:nos,
                        rate:rate,
                        tottax:tottax,
                        total: amount,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        if(data != null) {
                        window.location.reload();
                        }

                    }
                });
            },
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        $('#paymentmodal').modal('hide');

    });
</script>

<script>
    $(document).ready(function() {
        $('#offline').on('click', function(e) {
            // $('#paymentmodal').modal('hide');
            console.log("1");
            function refresh() {
                alert('Congrats', 'You\'ve Online payment is success');
                window.location.reload();
             }
            setTimeout(refresh, 1000); 
            
           
      });
      // new $.fn.dataTable.FixedHeader( table );
    });
    </script>

<div class="row">
    <div class="col-md-6 offset-3 col-md-offset-6">
        @if($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error!</strong> {{ $message }}
        </div>
        @endif
        <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Success!</strong> <span class="success-message"></span>
        </div>
        {{ Session::forget('success') }}

    </div>
</div>


@endsection