<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet"/>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/main-style.css" rel="stylesheet"/>
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<nav class="w3-sidenav w3-black" style="width:102px"> <!-- -->
    <a class="w3-padding-16" href="index.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="addproduct.php"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
    <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
    <a class="w3-padding-16" href="addsupplier.php"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
    <a class="w3-padding-16" href="newsales.php"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
    <a class="w3-padding-16" href="newpurchase.php"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
    <a class="w3-padding-16" href="location.php"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
</nav>
<section>
    <header style="margin-left: 50px; margin-top:-5px">
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
        <button id="logout"><a href="logout.php">LOG-OUT</a></button>
    </header>
    <div style="margin-left:57px">
        <!--  wrapper -->
        <div id="wrapper">

            <!--  page-wrapper uiio-->

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        Total Number Of Sales:
                        <b id="totalSales"> </b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        Total Number Of Purchases:
                        <b id="totalPurchases"> </b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        Total Number Of Suppliers:
                        <b id="totalSuppliers"></b>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        Total Number Of Goods In Stock:
                        <b id="totalGoodsInStock"></b>
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        Total Sales Earnings:
                        <b id="totalSalesInEarnings"></b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        Total Purchase Expenses:
                        <b id="totalPurchaseExpenses"></b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        Total Number Of Customers:
                        <b id="totalCustomers"></b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        Profit/ Loss:
                        <b id="pl"></b>
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <!--Area chart example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Sales Over Time
                        </div>

                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>

                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total number of Products Vs Location
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i>Notifications Panel
                        </div>

                        <div class="panel-body">
                            <div class="list-group">
                                <?php
                                include ('connection.php');
                                $queryNotifications = "select notification from notifications order by id desc LIMIT 15";
                                $resultNotifications = mysqli_query($db, $queryNotifications);
                                    while($countNotifications = $resultNotifications->fetch_array()) {
                                        echo "
                                    <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-info-circle\"></i> {$countNotifications['notification']}
                                    <span class=\"pull-right text-muted small\">
                                    </span>
                                    </a>
                                    ";
                                    }


                                ?>
                            </div>
                            <!-- /.list-group -->
                        </div>

                    </div>

                </div>
                <div class="col-lg-4">
                    <!-- Donut Example-->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Donut Chart Of Order Status
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>

                    </div>
                    <!--End Donut Example-->
                </div>

            </div>
        </div>


        <!-- Core Scripts - Include with every page -->
        <script src="assets/plugins/jquery-1.10.2.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="assets/plugins/pace/pace.js"></script>
        <script src="assets/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="assets/plugins/morris/morris.js"></script>
        <script src="assets/scripts/dashboard-demo.js"></script>
    </div>
</section>
</body>
</html>

<script type="application/javascript">
    var dataSet, location, size, i, lineDataSet;
    var xValues = [], yValues = [], periodT = [], salesT = [];
    function totals(num, num1, num2, num3, num4, num5, num6, num7) {
        document.getElementById('totalSales').innerHTML = num;
        document.getElementById('totalPurchases').innerHTML = num1;
        document.getElementById('totalSuppliers').innerHTML = num2;
        document.getElementById('totalCustomers').innerHTML = num3;
        document.getElementById('totalGoodsInStock').innerHTML = num4;
        document.getElementById('totalSalesInEarnings').innerHTML = num5;
        document.getElementById('totalPurchaseExpenses').innerHTML = num6;
        document.getElementById('pl').innerHTML = num7;
        //barchart.setData([{ "y": "2014", "a": 100 },{ "y": "2015", "a": 24}]);
    }


    $(document).ready(function(){
        $.ajax({
            url: 'dashboardChart.php',
            type: 'POST',
        }).done(function (dataDashboard) {
            chartDataSet = dataDashboard.match(/^.*((\r\n|\n|\r)|$)/gm);
            totals(chartDataSet[0], chartDataSet[1], chartDataSet[2], chartDataSet[3], chartDataSet[4], chartDataSet[5],
                chartDataSet[6], chartDataSet[7]);
            for(var i=0; i<chartDataSet.length; i++){
                console.log( i + ' ' +chartDataSet[i]);
            }

        })
    });


    $(document).ready(function(){
        $.ajax({
            url: 'chart.php',
            type: 'POST',
        }).done(function (data) {
            // do stuff
            dataSet = data.match(/^.*((\r\n|\n|\r)|$)/gm);
            for(i=0; i<dataSet.length; i++){
                var amount = dataSet[i].slice([1,dataSet[i].length]);
                var height = (''+amount)[0];
                yValues.push(height);
                xValues.push(dataSet[i].slice([1]));
            }
            if(dataSet.length-1 == 1){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}]);
     }else if(dataSet.length-1 == 2){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]}]);
     }else if(dataSet.length-1 == 3){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
     {"y": xValues[2], "a": yValues[2]}]);
     }else if(dataSet.length-1 == 4){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
     {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}]);
     }else if(dataSet.length-1 == 5){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
     {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}]);
     }else if(dataSet.length-1 == 6){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
     {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
     , {"y": xValues[5], "a": yValues[5]}]);
     }else if(dataSet.length-1 == 7){
     barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
     {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
     , {"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}]);
     }else if(dataSet.length-1 == 8){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    , {"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}]);
     }
      else if(dataSet.length-1 == 8){
         barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
         {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
          ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}]);
            }
            else if(dataSet.length-1 == 9){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}]);
            }
            else if(dataSet.length-1 == 10){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}]);
            }
            else if(dataSet.length-1 == 11){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}, {"y": xValues[10], "a": yValues[10]}]);
            }
            else if(dataSet.length-1 == 12){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}, {"y": xValues[10], "a": yValues[10]}
                    , {"y": xValues[11], "a": yValues[11]}]);
            }
            else if(dataSet.length-1 == 13){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}, {"y": xValues[10], "a": yValues[10]}
                    , {"y": xValues[11], "a": yValues[11]}, {"y": xValues[12], "a": yValues[12]}]);
            }
            else if(dataSet.length-1 == 14){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}, {"y": xValues[10], "a": yValues[10]}
                    , {"y": xValues[11], "a": yValues[11]}, {"y": xValues[12], "a": yValues[12]}, {"y": xValues[13], "a": yValues[13]}]);
            }
            else if(dataSet.length-1 == 15){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}, {"y": xValues[10], "a": yValues[10]}
                    , {"y": xValues[11], "a": yValues[11]}, {"y": xValues[12], "a": yValues[12]}, {"y": xValues[13], "a": yValues[13]}
                    , {"y": xValues[14], "a": yValues[14]}]);
            }
            else if(dataSet.length-1 == 16){
                barchart.setData([{"y": xValues[0], "a": yValues[0]}, {"y": xValues[1], "a": yValues[1]},
                    {"y": xValues[2], "a": yValues[2]}, {"y": xValues[3], "a": yValues[3]}, {"y": xValues[4], "a": yValues[4]}
                    ,{"y": xValues[5], "a": yValues[5]}, {"y": xValues[6], "a": yValues[6]}, {"y": xValues[7], "a": yValues[7]}
                    , {"y": xValues[8], "a": yValues[8]}, {"y": xValues[9], "a": yValues[9]}, {"y": xValues[10], "a": yValues[10]}
                    , {"y": xValues[11], "a": yValues[11]}, {"y": xValues[12], "a": yValues[12]}, {"y": xValues[13], "a": yValues[13]}
                    , {"y": xValues[14], "a": yValues[14]}, {"y": xValues[15], "a": yValues[15]}]);
            }

        })
    });


    //linechart
    $(document).ready(function(){
        $.ajax({
            url: 'linechart.php',
            type: 'POST',
        }).done(function (dataChart) {
            lineDataSet = dataChart.match(/^.*((\r\n|\n|\r)|$)/gm);
            for(i=0; i<lineDataSet.length; i++){
                //console.log(lineDataSet[i]);
                var ld = lineDataSet[i].slice([1,lineDataSet[i].length]);
                var ht = (''+ld)[0];
                periodT.push(ht);
                salesT.push(lineDataSet[i].slice([2]));
            }
            var d = new Date();
            var n = d.getFullYear();
            if(lineDataSet.length-1 == 1){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}]);
            }else if(lineDataSet.length-1 == 2){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]}]);
            }else if(lineDataSet.length-1 == 3){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-'+periodT[2], "sales": salesT[2]}]);
            }else if(lineDataSet.length-1 == 4){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]}]);
            }else if(lineDataSet.length-1 == 5){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}]);
            }else if(lineDataSet.length-1 == 6){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]}]);
            }else if(lineDataSet.length-1 == 7){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}]);
            }else if(lineDataSet.length-1 == 8){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}, {"period": n+'-0'+periodT[7], "sales": salesT[7]}]);
            }else if(lineDataSet.length-1 == 9){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}, {"period": n+'-0'+periodT[7], "sales": salesT[7]}
                    , {"period": n+'-0'+periodT[8], "sales": salesT[8]}]);
            }else if(lineDataSet.length-1 == 9){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}, {"period": n+'-0'+periodT[7], "sales": salesT[7]},
                    {"period": n+'-0'+periodT[8], "sales": salesT[8]}]);
            }else if(lineDataSet.length-1 == 10){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}, {"period": n+'-0'+periodT[7], "sales": salesT[7]},
                    {"period": n+'-0'+periodT[8], "sales": salesT[8]}, {"period": n+'-0'+periodT[9], "sales": salesT[9]}]);
            }else if(lineDataSet.length-1 == 10){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}, {"period": n+'-0'+periodT[7], "sales": salesT[7]},
                    {"period": n+'-0'+periodT[8], "sales": salesT[8]}, {"period": n+'-0'+periodT[9], "sales": salesT[9]},
                    {"period": n+'-0'+periodT[10], "sales": salesT[10]}]);
            }else if(lineDataSet.length-1 == 11){
                linechart.setData([{"period": n+'-0'+periodT[0], "sales": salesT[0]}, {"period": n+'-0'+periodT[1], "sales": salesT[1]},
                    {"period": n+'-0'+periodT[2], "sales": salesT[2]}, {"period": n+'-0'+periodT[3], "sales": salesT[3]},
                    {"period": n+'-0'+periodT[4], "sales": salesT[4]}, {"period": n+'-0'+periodT[5], "sales": salesT[5]},
                    {"period": n+'-0'+periodT[6], "sales": salesT[6]}, {"period": n+'-0'+periodT[7], "sales": salesT[7]},
                    {"period": n+'-0'+periodT[8], "sales": salesT[8]}, {"period": n+'-0'+periodT[9], "sales": salesT[9]},
                    {"period": n+'-0'+periodT[10], "sales": salesT[10]}, {"period": n+'-0'+periodT[11], "sales": salesT[11]}]);
            }


        })

    });



    $(function () {
        Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Sales Pending Orders",
            value: 30
        }, {
            label: "Sales Fulfilled Orders",
            value: 20
        }, {
            label: "Purchase Pending Orders",
            value: 20
        }, {
            label: "Purchase Fulfilled Orders",
            value: 20
        }],
        resize: true
    });
    });
</script>