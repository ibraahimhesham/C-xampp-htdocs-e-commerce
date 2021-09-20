@include('enduser.includes.header')
    <!-- Pre Header -->
    @include('enduser.includes.preheader')
    <!-- Navigation -->
    @include('enduser.includes.navbar')
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
             @yield('content')
        </div>
    </div>
    <!-- Footer Starts Here -->
    @include('enduser.includes.footer')
    <!-- Footer Ends Here -->
    <!-- Sub Footer Starts Here -->
    @include('enduser.includes.subfooter')
    <!-- Sub Footer Ends Here -->
    <!-- Bootstrap core JavaScript -->
    @include('enduser.includes.scripts')
  </body>
</html>
