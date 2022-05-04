<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <title>Invoice</title>
</head>
<style>
    .r1 {
        margin-top: 50px;
    }

    .tin {
        text-align: center;

    }

    .call {
        text-align: center;

    }

    .name {
        text-align: center;

    }

    .r3 {
        text-align: center;
    }

    .section {
        margin-bottom: none;
        padding-bottom: none;
    }
</style>

<body>
    <div class="section">
        <div class="container">
            <div class="row r1">
                <div class="form-group">
                    <div class="form-group col-md-4 tin">
                        <p>Tin:32011176925</p>
                        <p>(Tax Payer's Identification Number) </p>
                    </div>
                    <div class="form-group col-md-4 name">
                        <h1>STAR TRADERS</h1>
                    </div>
                    <div class="form-group col-md-4 call">
                        <p>Ph:2692186,2694225</p>
                        <p>Resi:2694903</p>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12 address" style="text-align: center;">
                <div class="row r2">
                    <p>yamuna building </p>
                    <p>travancore analytics</p>
                </div>
            </div>
            <div class="row r3">
                <div class="form-group">
                    <div class="form-group col-md-4 invoiceno">
                        <p>Invoice No-4 </p>
                    </div>
                    <div class="form-group col-md-4 retail" style="background-color: black;color: white;">
                        <p>Retail orm 8</p>
                    </div>
                    <div class="form-group col-md-4 date">
                        <p>Date: 15-03-22</p>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12 cash" style="text-align: center;">
                <div class="row r4">
                    <p>CASH / DEPOSIT</p>
                </div>
            </div>
            <div class="form-group col-md-12 name" style="text-align: left;">
                <div class="row r5">
                    <p>Vinesh CV</p>
                </div>
            </div>
            <div class="form-group col-md-12 gstin" style="text-align: right;">
                <div class="row r6">
                    <p>GSTIN:134566dasdsd</p>
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
                                    <button type="button" class="btn-icon btn-primary"><span class="v-btn__content">
                                            <i class="tim-icons icon-pencil"></i> </span>
                                    </button>
                </div>
            </div>
</body>

</html>