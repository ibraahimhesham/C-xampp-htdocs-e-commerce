<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active  ">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="material-icons">person</i>
          <p>Admins</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('products.index') }}">
          <i class="material-icons">content_paste</i>
          <p>Products</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('categorie.index') }}">
          <i class="material-icons">library_books</i>
          <p>Categories</p>
        </a>
  
      <!-- <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
                <i class="material-icons">unarchive</i>
                <p>Upgrade to PRO</p>
            </a>
        </li> -->
    </ul>
  </div>
</div>
