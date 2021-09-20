<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="enduser/assets/images/header-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            {{-- route for home page --}}
            <a class="nav-link" href="{{route('main')}}">Home
            </a>
          </li>
          <li class="nav-item">
            {{-- route for men products --}}
            <a class="nav-link" href="{{route('men')}}">Men</a>
          </li>
          <li class="nav-item">
            {{-- route for women products--}}
            <a class="nav-link" href="{{route('women')}}">Women</a>
          </li>
          <li class="nav-item">
            {{-- route for footwear products--}}
            <a class="nav-link" href="{{route('footwear')}}">Footwear</a>
            <li class="nav-item">
              {{-- route for accessories products--}}
              <a class="nav-link" href="{{route('accessories')}}">Accessories</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>