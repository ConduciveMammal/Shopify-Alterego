<?php require_once('db.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Alterego Lingerie - Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/index.html"><img src="alterego_logo.png" alt="" class="img-fluid"></a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-area-chart"></i> Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse" data-toggle="collapse" href="#collapseProducts"><i class="fa fa-fw fa-wrench"></i> Products</a>
                    <ul class="sidebar-second-level collapse show" id="collapseProducts">
                        <li>
                            <a href="tables.php">View Stored Products <span class="badge badge-primary"><?php print $itemCount ?></span></a>
                        </li>
                        <li class="active">
                            <a href="update-products.php">Update Database</a>
                        </li>
                        <li>
                            <a href="product-images.php">View Product Images</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"><i class="fa fa-fw fa-wrench"></i> Components</a>
                    <ul class="sidebar-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="#">Fixed Navigation</a>
                        </li>
                        <li>
                            <a href="#">Custom Card Examples</a>
                        </li>
                        <li>
                            <a href="#">Blank Page</a>
                        </li>
                        <li>
                            <a href="#">Login Page</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"><i class="fa fa-fw fa-sitemap"></i> Menu Levels</a>
                    <ul class="sidebar-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                            <ul class="sidebar-third-level collapse" id="collapseMulti2">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i> <span class="hidden-lg-up">Messages <span class="badge badge-pill badge-primary">12 New</span></span>
                        <span class="new-indicator text-primary hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">12</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">
                            View all messages
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i> <span class="hidden-lg-up">Alerts <span class="badge badge-pill badge-warning">6 New</span></span>
                        <span class="new-indicator text-warning hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">6</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Alterego Lingerie Products
                <div class="card-block">
                    <div class="table-responsive">
<?php

print "There are <strong>$itemCount</strong> items in <code>$xmlFile</code>";

print "There are $itemCount Items in <code>$xmlFile</code>";
for ($i=0; $i < $itemCount; $i++){
   $id = $xmlObject->item($i)->getElementsByTagName('id')->item(0)->childNodes->item(0)->nodeValue;
   $sku = $xmlObject->item($i)->getElementsByTagName('sku')->item(0)->childNodes->item(0)->nodeValue;
   $matrix_id = $xmlObject->item($i)->getElementsByTagName('matrix_id')->item(0)->childNodes->item(0)->nodeValue;
   $product_code = $xmlObject->item($i)->getElementsByTagName('product_code')->item(0)->childNodes->item(0)->nodeValue;
   $name = $xmlObject->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;
   $description = $xmlObject->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
   $description_html = $xmlObject->item($i)->getElementsByTagName('description_html')->item(0)->childNodes->item(0)->nodeValue;
   $stock_type = $xmlObject->item($i)->getElementsByTagName('stock_type')->item(0)->childNodes->item(0)->nodeValue;
   $stock_level = $xmlObject->item($i)->getElementsByTagName('stock_level')->item(0)->childNodes->item(0)->nodeValue;
   $price_rrp = $xmlObject->item($i)->getElementsByTagName('price_rrp')->item(0)->childNodes->item(0)->nodeValue;
   $price_trade = $xmlObject->item($i)->getElementsByTagName('price_trade')->item(0)->childNodes->item(0)->nodeValue;
   if(isset($xml->note->to)) {
       $categories = $xmlObject->item($i)->getElementsByTagName('categories')->item(0)->childNodes->item(0)->nodeValue;
   }
   $brand = $xmlObject->item($i)->getElementsByTagName('brand')->item(0)->childNodes->item(0)->nodeValue;
   $product_range = $xmlObject->item($i)->getElementsByTagName('product_range')->item(0)->childNodes->item(0)->nodeValue;
   $material = $xmlObject->item($i)->getElementsByTagName('material')->item(0)->childNodes->item(0)->nodeValue;
   $size = $xmlObject->item($i)->getElementsByTagName('size')->item(0)->childNodes->item(0)->nodeValue;
   $height = $xmlObject->item($i)->getElementsByTagName('height')->item(0)->childNodes->item(0)->nodeValue;
   $length = $xmlObject->item($i)->getElementsByTagName('length')->item(0)->childNodes->item(0)->nodeValue;
   $width = $xmlObject->item($i)->getElementsByTagName('width')->item(0)->childNodes->item(0)->nodeValue;
   $weight = $xmlObject->item($i)->getElementsByTagName('weight')->item(0)->childNodes->item(0)->nodeValue;
   $colour = $xmlObject->item($i)->getElementsByTagName('colour')->item(0)->childNodes->item(0)->nodeValue;
   $image = $xmlObject->item($i)->getElementsByTagName('image')->item(0)->childNodes->item(0)->nodeValue;
   $created_at = $xmlObject->item($i)->getElementsByTagName('created_at')->item(0)->childNodes->item(0)->nodeValue;
   $updated_at = $xmlObject->item($i)->getElementsByTagName('updated_at')->item(0)->childNodes->item(0)->nodeValue;
   $sql = $dbh->prepare("INSERT INTO"+$dbtable+" (`id`, `sku`, `matrix_id`, `product_code`, `name`, `description`, `description_html`, `stock_type`, `stock_level`, `price_rrp`, `price_trade`, `categories`, `brand`, `product_range`, `material`, `size`, `height`, `length`, `width`, `weight`, `colour`, `image`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
   $sql->execute(array(
    $id,
    $sku,
    $matrix_id,
    $product_code,
    $name,
    $description,
    $description_html,
    $stock_type,
    $stock_level,
    $price_rrp,
    $price_trade,
    $categories,
    $brand,
    $product_range,
    $material,
    $size,
    $height,
    $length,
    $width,
    $weight,
    $colour,
    $image,
    $created_at,
    $updated_at
   ));
}
   print "<h1>Finished $itemCount Items</h1>";
?>                       
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    
<!--    Updated yesterday at 11:59 PM-->
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>
</body>

</html>
    