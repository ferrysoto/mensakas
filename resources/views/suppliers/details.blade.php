@extends('layouts.sidebar')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="float-left">
              <i class="fas fa-user-friends icon-right"></i>
              Supplier
            </div>
            <div class="float-right">
              <div class="dropdown">
                <button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:0; padding:0;">
                  <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">Edit supplier</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('supplier.remove',  ['id' => $supplier->id_supplier])}}" style="color: red;">Remove supplier</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-left">
                <tr>
                  <td class="align-middle non-border"><b>Name</b></td>
                  <td class="align-middle non-border" id="name">{{$supplier->name}}</td>
                </tr>
                <tr>
                  <td class="align-middle non-border"><b>Email</b></td>
                  <td class="align-middle non-border" id="email">{{$supplier->email}}</td>
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
                  @if(strlen($address->zipcode) < 5 && strlen($address->zipcode) == 1)
                    <td class="align-middle non-border" id="city">0000{{$address->zipcode}}</td>
                  @elseif(strlen($address->zipcode) < 5 && strlen($address->zipcode) == 2)
                    <td class="align-middle non-border" id="city">000{{$address->zipcode}}</td>
                  @elseif(strlen($address->zipcode) < 5 && strlen($address->zipcode) == 3)
                    <td class="align-middle non-border" id="city">00{{$address->zipcode}}</td>
                  @elseif(strlen($address->zipcode) < 5 && strlen($address->zipcode) == 4)
                    <td class="align-middle non-border" id="city">0{{$address->zipcode}}</td>
                  @else
                    <td class="align-middle non-border" id="city">0000{{$address->zipcode}}</td>
                  @endif
                </tr>
              </table>
            </div>
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
            <div class="table-responsive">
              <table class="table table-hover text-left">
                <tr>
                  <td class="align-middle non-border"><b>Phone</b></td>
                  <td class="align-middle non-border" id="phone">{{$supplier->phone}}</td>
                </tr>
                <tr>
                  <td class="align-middle non-border"><b>Email</b></td>
                  <td class="align-middle non-border" id="email">
                    <a href="mailto:{{$supplier->email}}">{{$supplier->email}}</a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle non-border"><b>Name</b></td>
                  <td class="align-middle non-border" id="name">{{$supplier->name}}</td>
                </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12" style="margin-top: 25px;">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-shopping-cart icon-right"></i>
            Products
          </div>
          <div class="card-body">
            <!-- cambiar por products -->
            @if(count($products) == 0)
              <div class="alert alert-info" role="alert">
                Theese supplier hasn't placed any products yet
              </div>
            @else
              <table class="table table-responsive-sm text-left">
                <tr>
                  <td class="align-middle non-border"><b>Reference Product</b></td>
                  <td class="align-middle non-border"><b>Name</b></td>
                  <td class="align-middle non-border"><b>Price</b></td>
                  <td class="align-middle non-border"><b>Gluten</b></td>
                </tr>
                <tr>
                  @foreach($products as $product)
                    <td class="align-middle non-border">{{$product->id_product}}</td>
                    @if($product->id_product == 1)
                    <td class="align-middle non-border">Arroz tres delicias</td>
                    @elseif($product->id_product == 2)
                    <td class="align-middle non-border">Kebab</td>
                    @elseif($product->id_product == 3)
                    <td class="align-middle non-border">Alitas de pollo</td>
                    @elseif($product->id_product == 4)
                    <td class="align-middle non-border">Macarrones con tomate</td>
                    @elseif($product->id_product == 5)
                    <td class="align-middle non-border">Ramen de cerdo</td>

                    @endif
                    <td class="align-middle non-border">{{$product->price}}</td>
                    @if($product->gluten_contains == 0)
                    <td class="align-middle non-border">No</td>
                    @else
                    <td class="align-middle non-border">Yes</td>
                    @endif
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
