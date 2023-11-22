<!DOCTYPE html>
<html lang="{{str_replace('_','_', app()->getLocale())}}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ENV('APP_NAME')}} | @yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/images/favicon.png')}}">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">

    <!--**********************************
        Content body start
    ***********************************-->

    @yield('content')

    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('public/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('public/js/dlabnav-init.js')}}"></script>
    <!--endRemoveIf(production)-->

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
</body>

</html>