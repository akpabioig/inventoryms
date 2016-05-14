<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Charts</title>

    <link href="./dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="./dashboard/css/datepicker3.css" rel="stylesheet">
    <link href="./dashboard/css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="./dashboard/js/html5shiv.js"></script>
    <script src="./dashboard/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Charts</h1>

        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Line Chart</div>
                <div class="panel-body">
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Bar Chart</div>
                <div class="panel-body">
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="bar-chart" height="200" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Label:</h4>
                    <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span class="percent">92%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Label:</h4>
                    <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span
                            class="percent">65%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Label:</h4>
                    <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span class="percent">56%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Label:</h4>
                    <div class="easypiechart" id="easypiechart-red" data-percent="27"><span class="percent">27%</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div>    <!--/.main-->


<script src="./dashboard/js/jquery-1.11.1.min.js"></script>
<script src="./dashboard/js/bootstrap.min.js"></script>
<script src="./dashboard/js/chart.min.js"></script>
<script src="./dashboard/js/chart-data.js"></script>
<script src="./dashboard/js/easypiechart.js"></script>
<script src="./dashboard/js/easypiechart-data.js"></script>
<script src="./dashboard/js/bootstrap-datepicker.js"></script>
<script>
    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
