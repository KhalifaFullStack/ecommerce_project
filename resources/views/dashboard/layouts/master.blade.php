<!DOCTYPE html>
<html lang="en">

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin2 </title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/dashboard/assets/vendors/feather/feather.css">
        <link rel="stylesheet" href="/dashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/dashboard/assets/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="/dashboard/assets/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="/dashboard/assets/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="/dashboard/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="/dashboard/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="/dashboard/assets/js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/dashboard/assets/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="/dashboard/assets/images/favicon.png" />
    </head>

    <body>

    @include('dashboard.layouts.header')

    @include('dashboard.layouts.navbar')

    @yield('dashboard.content')

    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/dashboard/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/dashboard/assets/vendors/chart.js/Chart.min.js"></script>
<script src="/dashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/dashboard/assets/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/dashboard/assets/js/off-canvas.js"></script>
<script src="/dashboard/assets/js/hoverable-collapse.js"></script>
<script src="/dashboard/assets/js/template.js"></script>
<script src="/dashboard/assets/js/settings.js"></script>
<script src="/dashboard/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/dashboard/assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/dashboard/assets/js/dashboard.js"></script>
<script src="/dashboard/assets/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
</body>

</html>