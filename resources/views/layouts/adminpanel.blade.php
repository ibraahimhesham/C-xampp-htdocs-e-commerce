@include('admin.includes.header')
<div class="wrapper ">
    @include('admin.includes.sidebar')
<div class="main-panel">
    <!--nav bar start-->
    @include('admin.includes.navbar')
    <!--nav bar end-->
    <div class="content">
        <div class="container-fluid">
             @yield('content')
        </div>
    </div>
</div>
      <!--footer start-->
      @include('admin.includes.footer')
      <!--footer end-->
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  @include('admin.includes.scripts')
  </body>

</html>