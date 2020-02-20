@extends('layouts.app')

@section('sidebar')
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Mensakas Coop</h3>
            <strong>MK</strong>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="{{route('home')}}">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
                <a href="#CustomersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="fas fa-tasks"></i>
                  Orders
                </a>
                <ul class="collapse list-unstyled" id="CustomersSubmenu">
                  <!-- <li>
                    <a href="#">
                      <i class="fas fa-user-clock"></i>
                      Last orders
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <i class="fas fa-file-alt"></i>
                      Invoices
                    </a>
                  </li>
                  <li> -->
                    <a href="{{route('customer.index')}}">
                      <i class="fas fa-users"></i>
                      Customers
                    </a>
                  </li>
                </ul>
            </li>
            <li class="active">
              <a href="#SuppliersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="fas fa-building"></i>
                  Suppliers
              </a>
              <ul class="collapse list-unstyled" id="SuppliersSubmenu">
                  <!-- <li>
                    <a href="#">
                      <i class="fas fa-boxes"></i>
                      Products
                    </a>
                  </li>
                  <li>
                      <a href="#">
                        <i class="fas fa-book-open"></i>
                        Categories
                      </a>
                  </li> -->
                  <li>
                      <a href="{{route('supplier.index')}}">
                        <i class="fas fa-utensils"></i>
                        Restaurants
                      </a>
                  </li>
              </ul>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <main class="py-4">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  @include('layouts.breadcrum')
              </div>
          </nav>
          @yield('content')
        </main>
    </div>
</div>
@endsection
