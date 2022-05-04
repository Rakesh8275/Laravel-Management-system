@extends('layout.mainlayout')
@section('layout.content')


<div class="row">


  @foreach($product as $pd)
  <div class="col-lg-4">
    <div class="card card-chart">
      <div class="card-header" style="background:<?= $pd->inventory <= 50 ? '#ff00002e' : 'white' ?>">
        <h5 class="card-category">{{$pd->product_name}}</h5>
        <h3 class="card-title"><i class="tim-icons icon-bell-55 text-<?= $pd->inventory <= 50 ? 'danger' : 'success' ?>"></i>{{$pd->inventory}}</h3>
      </div>
    </div>
  </div>
  @endforeach


</div>
  @endsection