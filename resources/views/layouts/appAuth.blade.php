<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/jqvmap/css/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/skin-2.css')}}">

</head>



<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">


    @yield('content')


    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{asset('public/vendor/global/global.min.js')}}"></script>
<script src="{{asset('public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/js/custom.min.js')}}"></script>
<script src="{{asset('public/js/dlabnav-init.js')}}"></script>

<!-- Chart ChartJS plugin files -->
<script src="{{asset('public/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{asset('public/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Chart sparkline plugin files -->
<script src="{{asset('public/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Demo scripts -->
<script src="{{asset('public/js/dashboard/dashboard-3.js')}}"></script>

<!-- Svganimation scripts -->
<script src="{{asset('public/vendor/svganimation/vivus.min.js')}}"></script>
<script src="{{asset('public/vendor/svganimation/svg.animation.js')}}"></script>
<script src="{{asset('js/styleSwitcher.js')}}"></script>



{{-- TOASTER --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
<script>
    @if(Session::has('success'))  
				toastr.success("{{ Session::get('success') }}");  
		@endif  
		@if(Session::has('info'))  
				toastr.info("{{ Session::get('info') }}");  
		@endif  
		@if(Session::has('warning'))  
				toastr.warning("{{ Session::get('warning') }}");  
		@endif  
		@if(Session::has('error'))  
				toastr.error("{{ Session::get('error') }}");  
		@endif  
</script>


</html>