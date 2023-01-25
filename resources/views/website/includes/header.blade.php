<header class="header bg-white">
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">Boutique</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <!-- Link--><a class="nav-link {{Request::routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link {{Request::routeIs('shop') ? 'active' : ''}}" href="{{route('shop')}}">Shop</a>
            </li>

            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="{{route('home')}}">Homepage</a><a class="dropdown-item border-0 transition-link" href="{{route('shop')}}">Category</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="cart.html"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">(2)</small></a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li>
            @auth
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
              <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item border-0 transition-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-user mr-1"></i>{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>

            @else
            <li class="nav-item"><a class="nav-link" href="{{route('login')}}"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>

            @endauth
          </ul>
        </div>
      </nav>
    </div>
</header>
