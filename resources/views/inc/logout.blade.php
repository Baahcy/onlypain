<div class="form-inline my-2 my-lg-0">
    {{-- <a class="nav-link disabled" href="#"><i class="material-icons">shopping_cart</i> </a> --}}
    <ul class="navbar-nav">
        <li class="nav-item dropdown ">
          <a class="nav-link " href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownProfile">
            {{-- <a class="dropdown-item" href="#">Profile</a> --}}
            {{-- <a class="dropdown-item" href="#">Settings</a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
      </ul>

</div>