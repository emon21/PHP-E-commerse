<?php 
require_once('inc_file/header.php');
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 <?php 
require_once('inc_file/top-bar.php');
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php 
require_once('inc_file/sidebar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
           

            <div class="card card-primary card-outline">
              <div class="card-header ">
                <h5 class="m-0 float-left pt-2">Create Product</h5>
                <a href="category_list.php" class="float-right btn btn-outline-success">Product List</a>
              </div>
              <div class="card-body">
                <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="product_process.php" method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="sel1">Select Category list:</label>
                    <select class="form-control" id="sel1" name="cat_list">

                      <option>>> Select Category <<</option>
                      <?php

                  require_once('connect.php');

                  $sql ="SELECT * FROM catagory";
                  $result = mysqli_query($links,$sql);
                  while($row = mysqli_fetch_assoc($result)){
             
                    ?>
                      <option value="<?php echo $row['id'] ?>">
                        <?php echo $row['catagory_name'] ?>
                          
                        </option>
                    <?php } ?>
                     
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pro_name">Product Name</label>
                    <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Enter Category Name...">
                  </div>

                  <div class="form-group">
                  <label for="comment">Product Description:</label>
                  <textarea class="form-control" rows="5" id="comment" name="pro_desc"></textarea>
                </div>

                   <div class="form-group">
                    <label for="pro_price">Product Price</label>
                    <input type="text" class="form-control" id="pro_price" name="pro_price" placeholder="Enter Category Name...">
                  </div>
                 
               </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="add_data">Create Product</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
