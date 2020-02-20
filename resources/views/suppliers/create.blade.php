@extends('layouts.sidebar')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-user-plus icon-right"></i>Create supplier
          </div>
          <div class="card-body">
            <form action="{{route('supplier.create')}}" method="post">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="supplierLang">Language App</label>
                  <select id="supplierLang" name="lang" class="form-control">
                    <option value="1" selected>Choose...</option>
                    @foreach($languages as $lang)
                      <option value="{{$lang->id_language}}">{{$lang->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="supplierName">Full name</label>
                  <input type="text" class="form-control" id="supplierName" name="name" value="" maxlength="255" placeholder="Kebab halal cornella" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="supplierEmail">Email</label>
                  <input type="email" class="form-control" id="supplierEmail" name="email" placeholder="email@domain.com" maxlength="150" required>
                </div>
                <div class="form-group col-md-3">
                  <label for="supplierPhone">Phone</label>
                  <input type="number" class="form-control" id="supplierPhone" name="phone" placeholder="93 666 66 66" min="600000000" max="999999999" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="supplierDefaultCategory">Category default</label>
                    <select class="form-control" name="category">
                      <option selected value="1">Choose...</option>
                      @foreach($categories as $cat)
                      <option value="{{$cat->id_category}}">{{$cat->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group col-md-8">
                  <label for="supplierAddress">Address</label>
                  <input type="text" class="form-control" id="supplierAddress" name="address" placeholder="1234 Main St" maxlength="128" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="supplierCity">City</label>
                  <input type="text" class="form-control" id="supplierCity" name="city" placeholder="Barcelona" maxlength="128" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="supplierState">State</label>
                  <select id="supplierState" name="state" class="form-control">
                    <option selected value="1">Choose...</option>
                    @foreach($states as $state)
                      <option value="{{$state->id_state}}">{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="supplierZip">Zip</label>
                  <input type="number" class="form-control" id="supplierZip" name="zipcode" min="00001" max="99999" placeholder="00000" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-9">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="passReset">
                    <label class="form-check-label" for="passReset">
                      Send welcome email
                    </label>
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary">Add supplier</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
