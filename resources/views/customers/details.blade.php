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
                <td class="align-middle non-border"><b>Customer number</b></td>
                <td class="align-middle non-border">
                  <div class="input-group mb-3" style="margin: 0!important">
                    <input type="text" class="form-control bg-transparent non-border" value="{{$customer->id_customer}}" disabled>
                    <div class="input-group-append">
                      <button class="input-group-text bg-transparent non-border" onclick=""><i class="fas fa-edit"></i></button>
                    </div>
                  </div>
                </td>
              </tr>
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
                <td colspan="1">
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
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-phone icon-right"></i>
            Contact info
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <b>
                  Phone:
                </b>
                {{$customer->phone}}
              </li>
              <li class="list-group-item">
                <b>
                  Email:
                </b>
                <a href="mailto:{{$customer->email}}">{{$customer->email}}</a>
              </li>
              <li class="list-group-item">
                <b>
                  Language:
                </b>
                {{$lang->name}}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
