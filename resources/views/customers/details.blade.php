@extends('layouts.sidebar')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-user-friends icon-right"></i>
            Customer
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm text-left">
              <tr>
                <td class="align-middle non-border"><b>Name</b></td>
                <td class="align-middle non-border" id="name">{{$customer->first_name}} {{$customer->last_name}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>Email</b></td>
                <td class="align-middle non-border" id="email">{{$customer->email}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>Address</b></td>
                <td class="align-middle non-border" id="address">{{$address->address}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>City</b></td>
                <td class="align-middle non-border" id="city">{{$address->city}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>Zip code</b></td>
                @if(strlen($address->zipcode) < 5)
                  <td class="align-middle non-border" id="city">0{{$address->zipcode}}</td>
                @else
                  <td class="align-middle non-border" id="city">{{$address->zipcode}}</td>
                @endif
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-phone icon-right"></i>
            Contact info
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm text-left">
              <tr>
                <td class="align-middle non-border"><b>Phone</b></td>
                <td class="align-middle non-border" id="phone">{{$customer->phone}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>Email</b></td>
                <td class="align-middle non-border" id="email">
                  <a href="mailto:{{$customer->email}}">{{$customer->email}}</a>
                </td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>Name</b></td>
                <td class="align-middle non-border" id="name">{{$customer->first_name}} {{$customer->last_name}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>Language</b></td>
                <td class="align-middle non-border" id="lang">{{$lang->name}}</td>
              </tr>
              <tr>
                <td class="align-middle non-border"><b>User type</b></td>
                <td class="align-middle non-border" id="type_user">
                  <div class="btn-group">
                    @if($customer->is_guest  == 1)
                    <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Guest</button>
                    @else
                    <button type="button" name="button" class="btn btn-sm btn-success"><i class="fas fa-check"></i> User registered</button>
                    @endif
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12" style="margin-top: 25px;">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-shopping-cart icon-right"></i>
            Orders
          </div>
          <div class="card-body">
            @if(count($orders) == 0)
              <div class="alert alert-info" role="alert">
                Theese customer hasn't placed any orders yet
              </div>
            @else
              <table class="table table-responsive-sm text-left">
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
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection