<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          {{-- route for home page--}}
          <a class="nav-link active" aria-current="page" href="{{ route('main') }}">Home</a>
        </li>
        <li class="nav-item">
          {{-- route for products page--}}
          <a class="nav-link" href="{{ route('products') }}">products</a>
        </li>
        <li class="nav-item">
          {{-- route for log in page--}}
          <a class="nav-link" href="{{ route('signin') }}">sign in</a>
        </li>
        <li class="nav-item">
          {{-- route for signup page--}}
          <a class="nav-link" href="{{ route('signup') }}">sign up</a>
        </li>
        <li class="nav-item">
          {{-- route for profile page--}}
          <a class="nav-link" href="{{ route('profile') }}">profile</a>
        </li>
        <li class="nav-item">
          {{-- route for cart page--}}
          <a class="nav-link" href="{{ route('cart.list') }}">cart</a>
          {{--  @if(Cart::count > 0)
          <span class="index">{{ Cart::count() }} items</span>
          @endif
          <span class="title">CART</span> --}}
         
        </li>
      </ul>
      {{-- search widget --}}
      <form class="d-flex" method="GET" action="{{ route('search') }}">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>