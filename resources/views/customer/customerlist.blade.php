@extends('layout.mainlayout')
@section('layout.content')

    <div class="card  card-plain">
        <div class="card-header">
            <div class="row f-w">
                <div class="col-md-6">
                    <h4 class="card-title"> Customer List</h4>
                </div>
                <div class="col-md-6 t-a-r">
                    <a href="{{ route('customer.create') }}">
                        <button type="submit" class="btn btn-fill btn-primary">Create Customer</button>
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
                        <td>Customer Name</td>
                        <td>Customer Code</td>
                        <td>Area</td>
                        <td>Pincode</td>
                        <td>Phone 1</td>
                        <td>Phone 2</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_code}}</td>
                        <td>{{$customer->area}}</td>
                        <td>{{$customer->pincode}}</td>
                        <td>{{$customer->phone1}}</td>
                        <td>{{$customer->phone2}}</td>

                        <td class="form_action_inline">
                        <a href="{{ route('customer.edit', $customer->id)}}">
                            <button type="button" class="btn-icon btn-primary"><span class="v-btn__content">
                                    <i class="tim-icons icon-pencil"></i> </span>
                            </button></a>
                            <form action="{{ route('customer.destroy', $customer->id)}}" method="post" style="display: inline-block">
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
    </div>
</div>
</div>


@endsection