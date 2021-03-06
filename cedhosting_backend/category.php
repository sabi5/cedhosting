<?php 
    session_start();
    
    require "../cedhosting_frontend/Dbconnection.php";
    require "../cedhosting_frontend/Product.php";
    

    $Product = new Product();
    $Connection = new Dbconnection();

    if (isset($_POST['submit'])) {
        // $name =  $_POST['name'];
        $product_name = $_POST['product_name'];
        $link = $_POST['link'];
        $categoryInsert = $Product->categoryInsert( $product_name, $link, $Connection->con);
    }
    
    $sql = $Product->category($Connection->con);
    $catList = $Product->categoryList($Connection->con);
  
?>


<?php require "header.php";?>

  <!-- ************** -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

<script>
    $(document).ready(function(){
    $("#myTable").dataTable();
    });
</script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>

          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Products</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="category.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Create Category</span>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Create New Offers</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Orders</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Pending Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Completed Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Cancelled Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-pink"></i>
                <span class="nav-link-text">Generate Invoice</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Services</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Active Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Expired Services</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Users</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">All User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Create New User</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal"> Blog</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Add New Blog</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">View all Blogs</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Accounts</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text"> Update Company Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Change Security Ques</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Change Password</span>
              </a>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>

                          <?php $name = $_SESSION['user']['username'];?>
                            <h4 class="mb-0 text-sm"><?php echo $name;?></h4>
                            
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"> <?php $name = $_SESSION['user']['username'];
                    echo $name;
                    // print_r($_SESSION['user']);
                    ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../cedhosting_frontend/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default </h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Create Category</small></div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action ="category.php" method = "post">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <?php foreach($sql as $value):?>
                    
                    <input class="form-control" placeholder="<?php echo $value['prod_name']; ?>" type="text" name = "name" disabled>
                   
                    <?php endforeach;?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product name" type="text" name = "product_name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <!-- <textarea id="form-group form-control editor"></textarea> -->
                    <!-- <input class="form-control" placeholder="Link" id="editor" type="text" name ="link"> -->
                  </div>

                </div>
                <div class="form-group">
                  <textarea id="editors"></textarea>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary mt-4" name ="submit" value ="Create Category">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h1 class="mb-0">Category List</h1>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table id ="myTable" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <!-- <th scope="col">Id</th> -->
                    <th scope="col">Category parent</th>
                    <th scope="col">Category name</th>
                    <!-- <th scope="col">Category link</th> -->
                    <th scope="col">Category available</th>
                    <th scope="col">Category launchdate</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($catList as $value){
                  ?>
                        
                    <tr id= "<?php echo $value['id']; ?>">
                      <!-- <td><?php echo $value['id']; ?></td> -->
                      <td data-target="parentname"><?php if ($value['prod_parent_id'] == 1){ echo "Hosting";} ?></td>
                      <td data-target="productname"><?php echo $value['prod_name']; ?></td>
                      <!-- <td data-target="link"><?php echo $value['html']; ?></td> -->
                      <td data-target="available"><?php if($value['prod_available'] == 1){ echo "Available";} else { echo "Unavailable";} ?></td>
                      <td><?php echo $value['prod_launch_date']; ?></td>
                    
                      <td><a href="category.php" id="<?php echo $value['id']; ?>" class="delete_data"><i class='fas fa-trash' style='font-size:24px'></i></a></td>
                      
                      <td><a href="category.php" data-role="update" data-id="<?php echo $value['id']; ?>" class ="edit_data" id ="editProduct" data-toggle="modal" data-target="#exampleModalSignUp"><i class='fas fa-edit' style='font-size:24px'></i></a></td>

                      <!-- <td><a href="" data-id="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#exampleModalSignUp">EDIT</a></td> --> 
                      
                      <!-- <td><input type = "button" id="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#exampleModalSignUp" class ="edit" value="EDIT"></td> -->
                    </tr>
                  <?php
                  } ?>
                </tbody>
              </table>
            </div>
        </div>
      </div>
      <!-- MODAL -->
  <div class="col-md-4">
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <small>Update Details</small>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action = "" method = "post">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" id ="name" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <select class="form-control" name="available" id="select">
                      <option value="">please select..</option>
                        <option value="1">Available</option>
                        <option value="0">Unavailable</option>
                      </select>
                    </div>
                  </div>
                  <div class="text-center">
                  <input type="hidden" id="pid">
                    
                    <a href="category.php" id="update" >Update</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php require "footer.php";?>
    <script>
    $(document).ready(function(){
      $(document).on('click', '.delete_data', function(){
        var delete_id = $(this).attr('id');
        var $ele = $(this).parent().parent();
        // alert (delete_id);
        $.ajax({
          url : "operation.php",
          type : "post",
          data : {delete_id : delete_id, action : "delete"},
          success: function(data){
                 if(data=="YES"){
                    $ele.fadeOut().remove();
                    alert ("Account deleted Successfully");
                 }else{
                    alert ("can't deleted");
                 }
             }
        });
      });


// $('#myTable').on('click', '#editProduct', function(){

// var id = $(this).data('id');
// // alert(id);
// $.ajax({
//     url : 'operation.php',
//     type : 'POST',
//     data : {
//         id : id,
//         action : 'editCategory',
//     },
//     dataType : 'json',
//     success : function(msg)
//     {
//         console.log(msg);
//         // console.log(msg[0]['prod_id']);
//         $('#product').val(msg[0]['prod_name']);
//         $('#select').val(msg[0]['prod_available']);

//         $('#pageurl').val(msg[0]['html']);
//         $('#month').val(msg[0]['mon_price']);
//         $('#annual').val(msg[0]['annual_price']);
//     }
// });
// });

// $('#updateProduct').click(function(e){
// e.preventDefault();
// var productName = $('#product').val();
// var pageUrl = $('#pageurl').val();
// var monthPrice = $('#month').val();

// var proid = $('#proid').val();


// $.ajax({
//     url : 'operation.php',
//     type : 'POST',
//     data : {
//         // cid : cid,
//         productName : productName,
//         pageUrl : pageUrl,
//         monthPrice : monthPrice,
//         proid : proid,
//         action : 'updateCategory'
//     },
//     success : function(msg)
//     {
//         alert(msg);
//         window.location.reload();
//     }
// });

// });


      $(document).on('click', 'a[data-role=update]', function(){
 
        var id = $(this).data('id');
        // var parentname = $('#'+id).children('td[data-target=parentname]').text();
        var productname = $('#'+id).children('td[data-target=productname]').text();
        var link = $('#'+id).children('td[data-target=link]').text();
        var available = $('#'+id).children('td[data-target=available]').text();
        
        $('#name').val(productname);
        $('#link').val(link);
        $('#select').val(available);
        $('#pid').val(id);
        $('#exampleModalSignUp').modal('toggle');
        // alert (name);

      });

      $('#update').click(function(e){
        e.preventDefault();
        var id =$('#pid').val();
        // alert(id);
        var productname= $('#name').val();
        // alert(productname);
        var link = $('#link').val();
        var available = $('#select').val();
        // alert(available);

        $.ajax({
        url : "operation.php",
        type : "post",
        data : {id : id,
                productname :productname,
                link :link,
                available :available,
                action : "edit"},
        success: function(data){
          console.log(data);
          //  $('#'+id).children('td[data-target=parentname]').text(id);
          //  $('#'+id).children('td[data-target=productname]').text(productname);
          // $('#'+id).children('td[data-target=link]').text(link);
          //   $('#'+id).children('td[data-target=available]').text(available);

              if(data=="yes"){
                  // $ele.fadeOut().remove();
                  alert ("Updated Successfully");
              }else{
                  alert ("can't updated");
              }
          }
        });
      });
    });
     
   
    </script>

  </div>
  
 
</body>

</html>
