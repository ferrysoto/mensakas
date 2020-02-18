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
							<a class="dropdown-item" href="{{route('customer.create')}}"><i class="fas fa-user-plus icon-right"></i>Create customer</a>
							<a class="dropdown-item" href="#"><i class="fas fa-filter icon-right"></i>Filters</a>
							<a class="dropdown-item" href="#"><i class="fa fa-map-marker icon-right"></i>Show address</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" style="color:red" href="#">
								<i class="fas fa-user-slash icon-right"></i>
								Remove Customer
							</a>
						</div>
						<div class="collapse navbar-collapse" id="customersNavbar">
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
                <th>Registered</th>
                <th>Details</th>
    					</tr>
    				</thead>
    				<tbody>
              @foreach ($customers as $customer)
                <tr>
                  <td>
                    {{$customer->id_customer}}
                  </td>
                  <td>
                    {{$customer->first_name}} {{$customer->last_name}}
                  </td>
                  <td>
                    {{$customer->email}}
                  </td>
                  <td>
                    @php
                      $tel = $customer->phone;
                      echo substr($tel, 0, 3) . ' ' . substr($tel, 3, 3) . ' ' . substr($tel, 6, 3);
                    @endphp
                  </td>
                  <td>
                    @if($customer->is_guest != 1)
                      <i class="fa fa-check" aria-hidden="true" style="color:green;"></i>
                    @else
                      <i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
                    @endif
                  </td>
                  <td>
                    <a href="{{route('customer.details', ['id' => $customer->id_customer])}}" class="btn btn-small btn-light">
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
						{{$customers->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
