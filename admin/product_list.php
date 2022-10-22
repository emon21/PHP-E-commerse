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
           

              <!-- /.card-header -->
              <!-- form start -->
               <div class="card card-primary ">
              <div class="card-header">
                <h5 class="m-0 float-left pt-2">Create Product</h5>
                <a href="product_create.php" class="float-right btn btn-outline-warning">Add Product</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#sl</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php

                  require_once('connect.php');

                  $sql ="SELECT * FROM products";
                  $result = mysqli_query($links,$sql);
                  $count = 1;
                  if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)){
             
                    ?>

                  <tr>
                    <td><?php echo $count; $count++; ?></td>
                    <td><?php echo $row['cat_id']; ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                     <td><?php echo $row['product_price']; ?></td>
                    <td>
                      
                       <a href="category_edit.php?cat_edit=<?php echo $row['id'] ?>" class="btn btn-success">
                        <i class="fa fa-pen-square"></i>
                      </a>
                      <a href="category_delete.php?cat_delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick=" return confirm('Are You Sure,You Want TO Delete This Items Y/N ?')">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>


                <?php } }

                else{?>

                   <tr>
                     <td colspan="3">
                      <div class="alert text-danger text-center">
  <strong class="text-primary">Warning!</strong> No Data Found.
</div>
      
                     </td>
                   </tr>
                  <?php
                } ?>
                  
                  </tbody>
                  <tfoot>
                   <tr>
                    <th>#sl</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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
