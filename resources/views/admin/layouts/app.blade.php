<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
   
    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Easy Pandit </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('/admin/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('/admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('/admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{url('/admin/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('/admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('/assets/img/Group.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
@yield('style')
</head>
<body>
    
    @yield('content')

    
    <!-- plugins:js -->
    <script src="{{url('/admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('/admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('/admin/vendors/progressbar.js/progressbar.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('/admin/js/off-canvas.js')}}"></script>
    <script src="{{url('/admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('/admin/js/template.js')}}"></script>
    <script src="{{url('/admin/js/settings.js')}}"></script>
    <script src="{{url('/admin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{url('/admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{url('/admin/js/dashboard.js')}}"></script>
    <script src="{{url('/admin/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->

    
    @yield('script')
    
</body>
</html>
