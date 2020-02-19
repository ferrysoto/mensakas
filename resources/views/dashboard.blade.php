@extends('layouts.sidebar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <i class="fas fa-shopping-cart icon-right"></i>
                  Last Orders
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive-md text-left">
                      <tr>
                        <td class="align-middle non-border"><b>Reference order</b></td>
                        <td class="align-middle non-border"><b>Address delivered</b></td>
                        <td class="align-middle non-border"><b>Price</b></td>
                        <td class="align-middle non-border"><b>Invoice Num</b></td>
                        <td class="align-middle non-border"><b>Date</b></td>
                      </tr>
                      <tr>
                        @foreach($orders as $order)
                          <td class="align-middle non-border">{{$order->id_order}}</td>
                          <td class="align-middle non-border">{{$order->address}}</td>
                          <td class="align-middle non-border">{{$order->total_paid}}</td>
                          <td class="align-middle non-border">{{$order->invoice_num}}</td>
                          <td class="align-middle non-border">{{$order->invoice_date}}</td>
                        @endforeach
                      </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
