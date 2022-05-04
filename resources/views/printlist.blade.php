<div class="card  card-plain">
    <div class="card-header">
        <div class="row f-w">
            <div class="col-md-6">
                <h4 class="card-title"> Sale List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive" formtarget="_blank" target="_blank">
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
                            </tr>
                        </thead>
                        <tbody class="main" id="main">
                            <?php foreach($printdata as $pr) { ?>
                            <tr>
                                <td>{{$pr->id}}</td>
                                <td>{{$pr->type}}</td>
                                <td> {{$pr->date}}</td>
                                <td>{{$pr->gstin}}</td>
                                <td>{{$pr->customer_name}}</td>
                                <td>{{$pr->nos}}</td>
                                <td>{{$pr->total}}</td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
