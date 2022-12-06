<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/font-awesome/css/font-awesome.min.css') }}"> --}}
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/Ionicons/css/ionicons.min.css') }}"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/morris.js/morris.css') }}"> --}}
    <!-- jvectormap -->
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/jvectormap/jquery-jvectormap.css') }}"> --}}
    <!-- Date Picker -->
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}"> --}}
    <!-- Daterange picker -->
    {{-- <link rel="stylesheet" href="{{ asset('style/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}"> --}}
    <!-- bootstrap wysihtml5 - text editor -->
    {{-- <link rel="stylesheet" href="{{ asset('style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}"> --}}

    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">   --}}
    {{-- <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
    
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" /> --}}
    {{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}

    {{-- CSS DataTable --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css"> --}}

    {{-- Bootstrap CSS CDN --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> --}}
    
    {{-- Bootstrap Icon CDN --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> --}}
        
    {{-- CSS Offline --}}
    {{-- <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/dashboard.css"> --}}
    {{-- <link rel="stylesheet" href="/css/tabel.css"> --}}

    {{-- JS Offline --}}
    {{-- <script src="/js/dashboard.js"></script> --}}

    {{-- Bootstrap JS CDN --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    
    {{-- JS CDN --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

    <!-- jQuery 3 -->
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('style/bower_components/jquery/dist/jquery.min.js') }}"></script> --}}
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('style/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    {{-- <script src="{{ asset('style/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script> --}}
    <!-- Morris.js charts -->
    {{-- <script src="{{ asset('style/bower_components/raphael/raphael.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('style/bower_components/morris.js/morris.min.js') }}"></script> --}}
    <!-- Sparkline -->
    {{-- <script src="{{ asset('style/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script> --}}
    <!-- jvectormap -->
    {{-- <script src="{{ asset('style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
    <!-- jQuery Knob Chart -->
    {{-- <script src="{{ asset('style/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script> --}}
    <!-- daterangepicker -->
    {{-- <script src="{{ asset('style/bower_components/moment/min/moment.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('style/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script> --}}
    <!-- datepicker -->
    {{-- <script src="{{ asset('style/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script> --}}
    <!-- Bootstrap WYSIHTML5 -->
    {{-- <script src="{{ asset('style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script> --}}
    <!-- Slimscroll -->
    {{-- <script src="{{ asset('style/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script> --}}
    <!-- FastClick -->
    {{-- <script src="{{ asset('style/bower_components/fastclick/lib/fastclick.js') }}"></script> --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('style/dist/js/pages/dashboard.js') }}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('style/dist/js/demo.js') }}"></script> --}}

    <title>IT-Dev Blog | Dashbboard</title>
</head>
<body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">
        @include('sweetalert::alert')
        @include('layouts.header')
        @include('layouts.sidebar')

            @yield('container')

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right x`hidden-xs">
            <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2022-2023 IT Dev KCI.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
</body>
</html>
{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT Dev KCI</title>
</head>

</html> --}}

