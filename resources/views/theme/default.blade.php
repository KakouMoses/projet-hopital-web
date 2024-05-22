<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{!! asset('frontend/src/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! asset('frontend/src/assets/css/styles.min.css') !!}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

@include('theme.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">

@include('theme.header')

@yield('content')

    </div>

@yield('modal')
  </div>
  <script src="{{ asset('frontend/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{!! asset('frontend/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('frontend/src/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! asset('frontend/src/assets/js/app.min.js') !!}"></script>
  <script src="{!! asset('frontend/src/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
</body>

</html>
