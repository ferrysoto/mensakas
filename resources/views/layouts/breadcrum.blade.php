<ol class="breadcrumb" style="background-color: transparent; margin: 0;">
  <li class="breadcrumb-item">
    <a href="{{route('home')}}">
      <i class="fas fa-home"></i>
    </a>
  </li>
  <li class="breadcrumb-item active" aria-current="page">
    Library
  </li>
</ol>
<ol class="breadcrum" style="padding: 0; background-color: transparent; margin: 0;">
  <div class="d-flex justify-content-between">
    <li class="breadcrum-item" style="list-style: none;">
      <div class="dropleft">
        <button type="button" class="btn btn-light dropdown-toggle" id="userOptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </button>

        <div class="dropdown-menu" aria-labelledby="userOptions">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Employees</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color:red;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            Log out
          </a>
        </div>
      </div>
    </li>
    <li class="breadcrum-item" style="list-style: none;">
      <button type="button" class="btn btn-light" id="sidebarCollapse">
        <i class="fas fa-align-left"></i>
      </button>
    </li>
  </div>
</ol>
