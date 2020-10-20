<br>
<br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/homepage">
        <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        ONLY PAIN
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-uppercase " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="/shop">shop <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/music">music</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">video</a>
        </li>

      </ul>
    </div>

    <div class="form-inline my-2 my-lg-0">
        <a class="nav-link disabled" href="#"><i class="material-icons">shopping_cart</i> </a>
        <ul class="navbar-nav">
            <li class="nav-item dropdown ">
              <a class="nav-link " href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
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
  </nav>
