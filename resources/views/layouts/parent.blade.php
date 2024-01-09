<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link href="{{ url('assets/site/toastr/toastr.min.css') }}" rel=stylesheet type="text/css"/>
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed font-sans antialiased">
  
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" >Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('categories.index')}}"  >Categories </a>
                <a class="nav-item nav-link active " href="{{route('categories.myShipments')}}" > My shipments </a>
                <a class="nav-item nav-link active " href="{{route('categories.myJournalEntity')}}" > My journal entity </a>
              </div>
              <a href="{{ route('logout') }}" style="margin-left: auto; margin-right: 0;"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </nav>
        <!-- /.navbar -->

         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    @yield('content')
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <footer class="main-footer" style="
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
        ">
            <strong  >
            Copyright &copy; 2014-2024 <a href=#>camelCase tech</a>.</strong>
            All rights reserved.

        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    

    
    
    <script src="{{ url('assets/site/js/jquery.js') }}"></script>
    <script src="{{ url('assets/site/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/site/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/site/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('assets/site/js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('assets/site/js/appear.js') }}"></script>
    <script src="{{ url('assets/site/js/parallax.min.js') }}"></script>
    <script src="{{ url('assets/site/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ url('assets/site/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ url('assets/site/js/owl.js') }}"></script>
    <script src="{{ url('assets/site/js/wow.js') }}"></script>
    <script src="{{ url('assets/site/js/validate.js') }}"></script>
    <script src="{{ url('assets/site/js/mixitup.js') }}"></script>
    <script src="{{ url('assets/site/js/nav-tool.js') }}"></script>
    <script src="{{ url('assets/site/js/jquery-ui.js') }}"></script>
    <script src="{{ url('assets/site/js/script.js') }}"></script>
    <script src="{{ url('assets/site/js/color-settings.js') }}"></script>
    <script src="{{ url('assets/site/toastr/toastr.min.js') }}"></script>
    
    @include('layouts.flash_messages')
    @yield('js')
    
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
 integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
 crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" 
integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</body>
</html>
