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
                        <li class="active">
                            <a href="tables.php">View Stored Products <span class="badge badge-primary"><?php print $itemCount ?></span></a>
                        </li>
                        <li>
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
                <li class="breadcrumb-item active">Stored Products</li>
            </ol>
<script>
function filterBrand(str) {
  if (str=="") {
    document.getElementById("brand-f").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getproducts.php?q="+str,true);
  xmlhttp.send();
}
</script>
<?php 
    while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        $rows[] = $row;
    }
?>
            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Alterego Lingerie Products <a href="update-products.php" class="btn btn-primary float-right">Update Products</a>
                <div class="card-block">
                    <div class="table-responsive">
                      <div class="data-filter__container">
                         <div class="container">
                             <div class="row">
                              <div class="col">
                                  <p class="text-center">&ndash; Brand &ndash;</p>
                                  <select name="" id="brand-filter" class="form-control" onchange="filterBrand(this.value)">
                                        <option value="" selected>- Filter by Brand -</option>
                                     <?php
                                      foreach($rows as $row){
                                          echo "<option value='{$row['brand']}'>{$row['brand']}</option>";
                                      }
                                      ?>
                                  </select>
                              </div>
                              <div class="col">
                                  <p class="text-center">&ndash; Stock Type &ndash;</p>
                                  <select name="" id="brand-filter" class="form-control">
                                        <option value="" selected>- Filter by Stock Type -</option>
                                     <?php
                                      foreach($rows as $row){
                                          echo "<option value='{$row['stock_type']}'>{$row['stock_type']}</option>";
                                      }
                                      ?>
                                  </select>
                              </div>
                              <div class="col">
                                  <p class="text-center">&ndash; Stock Level &ndash;</p>
                                  <select name="" id="brand-filter" class="form-control">
                                        <option value="" selected>- Filter by Stock Level -</option>
                                     <?php
                                      foreach($rows as $row){
                                          echo "<option value='{$row['stock_level']}'>{$row['stock_level']}</option>";
                                      }
                                      ?>
                                  </select>
                              </div>
                              <div class="col">
                                  <p class="text-center">&ndash; Colour &ndash;</p>
                                  <select name="" id="brand-filter" class="form-control">
                                        <option value="" selected>- Filter by Colour -</option>
                                     <?php
                                      foreach($rows as $row){
                                          echo "<option value='{$row['colour']}'>{$row['colour']}</option>";
                                      }
                                      ?>
                                  </select>
                              </div>
                          </div>
                         </div>
                      </div>
                       <div id="txtHint"><b>Person info will be listed here.</b></div>
                        <table class="table table-bordered table-responsive" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Matrix ID</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Description HTML</th>
                                    <th>Stock Type</th>
                                    <th>Stock Level</th>
                                    <th>Price RRP</th>
                                    <th>Price Trade</th>
                                    <th>Categories</th>
                                    <th>Brand</th>
                                    <th>Product Range</th>
                                    <th>Material</th>
                                    <th>Size</th>
                                    <th>Height</th>
                                    <th>Length</th>
                                    <th>Width</th>
                                    <th>Weight</th>
                                    <th>Colour</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Matrix ID</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Description HTML</th>
                                    <th>Stock Type</th>
                                    <th>Stock Level</th>
                                    <th>Price RRP</th>
                                    <th>Price Trade</th>
                                    <th>Categories</th>
                                    <th>Brand</th>
                                    <th>Product Range</th>
                                    <th>Material</th>
                                    <th>Size</th>
                                    <th>Height</th>
                                    <th>Length</th>
                                    <th>Width</th>
                                    <th>Weight</th>
                                    <th>Colour</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </tfoot>
                            
                            <tbody>

<?php
foreach($rows as $row){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['sku']}</td>
                <td>{$row['matrix_id']}</td>
                <td>{$row['product_code']}</td>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['description_html']}</td>
                <td>{$row['stock_type']}</td>
                <td><span class='stock-level {$row['stock_level']}'>{$row['stock_level']}</span></td>
                <td>{$row['price_rrp']}</td>
                <td>{$row['price_trade']}</td>
                <td>{$row['categories']}</td>
                <td id='brand-f'>{$row['brand']}</td>
                <td>{$row['product_range']}</td>
                <td>{$row['material']}</td>
                <td>{$row['size']}</td>
                <td>{$row['height']}</td>
                <td>{$row['length']}</td>
                <td>{$row['width']}</td>
                <td>{$row['weight']}</td>
                <td>{$row['colour']}</td>
                <td><a href='{$row['image']}' target='_blank'><img src='{$row['image']}'' class='img-fluid' /></a></td>
                <td>{$row['created_at']}</td>
                <td>{$row['updated_at']}</td>
        </tr>";
        }
mysql_close($conn);
?>
        </tbody>
    </table>
                            
                    </div>
                </div>
                <div class="card-footer small text-muted">
                   <?php print $sqltimeupdate ?>
                    Updated yesterday at 11:59 PM
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
    <script src="vendor/jquery/jquery.min.js"></script>
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