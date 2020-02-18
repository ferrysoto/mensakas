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
            {{$customer}}
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

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
