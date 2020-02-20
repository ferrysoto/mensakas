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
							<a class="dropdown-item" href="{{route('supplier.create')}}"><i class="fas fa-user-plus icon-right"></i>Create supplier</a>
							<a class="dropdown-item" href="#"><i class="fas fa-filter icon-right"></i>Filters</a>
							<a class="dropdown-item" href="#"><i class="fa fa-map-marker icon-right"></i>Show address</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" style="color:red" href="#">
								<i class="fas fa-user-slash icon-right"></i>
								Remove supplier
							</a>
						</div>
						<div class="collapse navbar-collapse" id="suppliersNavbar">
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
    						<th>Email</th>
    						<th>Phone</th>
                <th>Details</th>
    					</tr>
    				</thead>
    				<tbody>
              @foreach ($suppliers as $supplier)
                <tr>
                  <td>
                    {{$supplier->id_supplier}}
                  </td>
                  <td>
                    {{$supplier->name}}
                  </td>
                  <td>
                    {{$supplier->email}}
                  </td>
                  <td>
                    @php
                      $tel = $supplier->phone;
                      echo substr($tel, 0, 3) . ' ' . substr($tel, 3, 3) . ' ' . substr($tel, 6, 3);
                    @endphp
                  </td>

                  <td>
                    <a href="{{route('supplier.details', ['id' => $supplier->id_supplier])}}" class="btn btn-small btn-light">
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
						{{$suppliers->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
