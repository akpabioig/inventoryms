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

<?php
include('connection.php');
$list = array();
$query1 = "select * from dashboard_totals";
$result1 = mysqli_query($db, $query1);
while($count1 = $result1->fetch_array()) {
    $list[] = $count1[0];
}


echo "<body onload='totals($list[0], $list[1], $list[2], $list[3], $list[4], $list[5], $list[6]);'>";

?>

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

            <!--  page-wrapper -->

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
                        Total Number Of Customers:
                        <b id="totalCustomers"></b>
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        Total Number Of Goods In Stock:
                        <b id="totalGoodsInStock"></b>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        Total Sales Earnings:
                        <b id="totalSalesInEarnings"></b>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        Total Purchase Expenses:
                        <b id="totalPurchaseExpenses"></b>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <b></b>Profit/ Loss
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <!--Area chart example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Line Chart of Sales Over Time
                        </div>

                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>

                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
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
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>

                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
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
    var dataSet, location, size, i;
    var xValues = [], yValues = [];
    function totals(num, num1, num2, num3, num4, num5, num6) {
        document.getElementById('totalSales').innerHTML = num;
        document.getElementById('totalPurchases').innerHTML = num1;
        document.getElementById('totalSuppliers').innerHTML = num2;
        document.getElementById('totalCustomers').innerHTML = num3;
        document.getElementById('totalGoodsInStock').innerHTML = num4;
        document.getElementById('totalSalesInEarnings').innerHTML = num5;
        document.getElementById('totalPurchaseExpenses').innerHTML = num6;
        //barchart.setData([{ "y": "2014", "a": 100 },{ "y": "2015", "a": 24}]);

    }

    $(document).ready(function(){
        $.ajax({
            url: 'chart.php',
            type: 'POST',
        }).done(function (data) {
            // do stuff
            dataSet = data.match(/^.*((\r\n|\n|\r)|$)/gm);
            for(i=0; i<dataSet.length-1; i++){
                xValues.push(dataSet[i].slice([1]));
                var amount = dataSet[i].slice([1,dataSet[i].length]);
                var height = (''+amount)[0];
                yValues.push(height);
            }

            //for(i=0; i<xValues.length;i++){
                console.log('Location: '+ xValues[0]);
                console.log('Size: ' + yValues[0]);
            //}

            //location = dataSet[0].slice([1]);
            //size = dataSet[0].slice([2,dataSet[0].length]);

            //barchart.setData([{"y": location, "a": size}]);
        })

    });
</script>