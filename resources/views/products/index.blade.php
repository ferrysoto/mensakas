@extends('layouts.sidebar')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="padding:0; ">
					<nav class="navbar navbar-expand-lg" style="margin-bottom: 0;">
						<button role="button" class="btn btn-outline-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user-edit icon-right"></i>
							Actions
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="{{route('product.create')}}"><i class="fas fa-user-plus icon-right"></i>Create product</a>
							<a class="dropdown-item" href="#"><i class="fas fa-filter icon-right"></i>Filters</a>
¡							<div class="dropdown-divider"></div>
							<a class="dropdown-item" style="color:red" href="#">
								<i class="fas fa-user-slash icon-right"></i>
								Remove products
							</a>
						</div>
						<div class="collapse navbar-collapse" id="productsNavbar">
							<ul class="navbar-nav ml-md-auto">
								<li class="nav-item">
									<form class="form-inline">
										<input class="form-control mr-sm-2" type="text" />
										<button class="btn btn-primary my-2 my-sm-0" type="submit">
											Search
										</button>
									</form>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="card-body">
          <table class="table">
    				<thead>
    					<tr>
    						<th>#</th>
    						<th>Name</th>
    						<th>Category</th>
    						<th>Price</th>
                <th>Details</th>
    					</tr>
    				</thead>
    				<tbody>
              @foreach ($products as $product)
                <tr>
                  <td>
                    {{$product->id_product}}
                  </td>
                  <td>
                    {{$product->title}}
                  </td>
                  <td>
                    @foreach($categories as $cat)
                      @if($cat->id_product == $product->id_product)
                        {{$cat->name}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    {{$product->price}}
                  </td>
                  <td>
                    <a href="{{route('supplier.details', ['id' => $product->id_supplier])}}" class="btn btn-small btn-light">
                      <i class="fas fa-sign-out-alt"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
    				</tbody>
    			</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						{{$products->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
