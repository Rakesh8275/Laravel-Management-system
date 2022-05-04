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
                    <h4 class="card-title"> Sale List</h4>
                </div>
                <div class="col-md-6 t-a-r">
                    <a class="salelista" href="/sale">
                        <button type="button" class="btn-icon btn-primary"><span class="v-btn__content">Create Sale <i class="tim-icons icon-simple-add"></i> </span></button>
                    </a>

                    <div class="dropdown" style="float: right;">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter &nbsp; {{date('Y/m/d')}}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item clickReportShow" id="reportToday">Today</a>
                            <a class="dropdown-item clickReportShow" id="reportYesterday">Yesterday</a>
                            <a class="dropdown-item clickReportShow" id="reportLast7Days">Last 7 days</a>
                            <a class="dropdown-item clickReportShow" id="reportLast30Days">Last 30 days</a>
                            <a class="dropdown-item clickReportShow" id="reportCustom">Custom</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12 t-a-r reportassets" style="display:none;">
                <button type="button" id="reportDownloadCSV" class="btn-icon btn-primary"><span class="v-btn__content">CSV <i class="tim-icons icon-tap-02"></i> </span></button>
                <button type="button" id="reportDownloadPDF" class="btn-icon btn-danger"><span class="v-btn__content">PDF <i class="tim-icons icon-tap-02"></i> </span></button>
                <button type="button" id="reportDownloadEXCELL" class="btn-icon btn-warning"><span class="v-btn__content">Excel <i class="tim-icons icon-tap-02"></i> </span></button>

            </div>

        </div>
        <div class="customdisplay" style="display: none; background-color:white; margin-top: 20px;" id="customdisplay">
            <div class="row">
                <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                        <label>From Date</label>
                        <input type="text" class="form-control fromdate" name="fromdate" id="customfilterfrom">
                    </div>
                </div>
                <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                        <label>To Date</label>
                        <input type="text" class="form-control todate" name="todate" id="customfilterto">
                    </div>
                </div>
                <div class="col-md-1 pr-md-1">
                    <label></label>
                    <button type="submit" class="btn btn-fill btn-primary" id="savesearch">Search</button>
                </div>



            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap table tablesorter" style="width:100%">
                    <thead>
                        <tr>
                            <th>Bill</th>
                            <th>Bill type</th>
                            <th>Bill date</th>
                            <th>GSTIN</th>
                            <th>Customer</th>
                            <th>QTY</th>
                            <th>Net value</th>
                            <th>Mode</th>

                        </tr>
                    </thead>
                    <tbody class="main" id="main">
                        @foreach($list as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->type}}</td>
                            <td>{{$list->date}}</td>
                            <td>{{$list->gstin}}</td>
                            <td> {{$list->customer_name}}</td>
                            <td>{{$list->nos}}</td>
                            <td>{{$list->total}}</td>
                            <td><?php

                                if ($list->transaction_id) {
                                ?>
                                    <a href="/downloadOnlinePDF?id={{$list->sale_id}}"><button type="submit" id="onlineexport1" class="btn-icon btn-primary">Online</button>
                                <?php } else {
                                    echo "Offline";
                                }
                                ?>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
                <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
                <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
              
            </div>
            @endsection