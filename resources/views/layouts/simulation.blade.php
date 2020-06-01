<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Monte Carlo</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <!-- Bootstrap -->
        <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/waves.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('assets/css/nanoscroller.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/morris-0.4.3.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/menu-light.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100%;
            background-color: #ffff;
        }
    </style>
    <body>
        <!-- Static navbar -->

        <nav class="navbar navbar-default yamm navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-size: 22px; font-weight: 900">Monte Carlo Simulation</a>
                </div>
            </div><!--/.container-fluid -->
        </nav>
        <section class="page">
            <div>
                <div class="content-wrapper container">
                    @yield('content')
                </div>
            </div>
        </section>

        <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nanoscroller.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <!-- Flot -->
        <script src="{{asset('assets/js/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/js/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/js/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/js/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/js/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('assets/js/pace.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.min.js')}}"></script>
        <script src="{{asset('assets/js/morris_chart/raphael-2.1.0.min.js')}}"></script>
        <script src="{{asset('assets/js/morris_chart/morris.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
        <!-- ChartJS-->
        <script src="{{asset('assets/js/chartjs/Chart.min.js')}}"></script>

    </body>

</html>
				