<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard | metro book shop</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('client_asset/img/logo3.jpg') }}" />
      <link rel="stylesheet" href="{{ asset('admin_asset/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/vendor/remixicon/fonts/remixicon.css') }}">

    </head>
  <body class="  ">
    <!-- loader Start -->
    {{-- <div id="loading">
          <div id="loading-center">
          </div>
    </div> --}}
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        {{-- @include('admin.layouts.nav') --}}
        @yield('content')
        @include('admin.layouts.footer')

    </div>
        <!-- Sidebar  -->
        <script src="{{ asset('admin_asset/js/backend-bundle.min.js') }}"></script>

        <!-- Table Treeview JavaScript -->
        <script src="{{ asset('admin_asset/js/table-treeview.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('admin_asset/js/customizer.js') }}"></script>

        <!-- Chart Custom JavaScript -->
        <script async src="{{ asset('admin_asset/js/chart-custom.js') }}"></script>

        <!-- App JavaScript -->
        <script src="{{ asset('admin_asset/js/app.js') }}"></script>

        <!-- jQuery (for dismissing alerts) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      </body>
    </html>
