    <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Codeigniter Web Application</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            Welcome, <strong>Administrator</strong>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{asset('assets/login/logout')}}" class="dropdown-item">
            Logout
          </a>
          
          
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-white">
      <span class="brand-text ml-4"><strong>CI Web Application</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php/admin/home/index" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php echo (!empty($mainModule) && $mainModule == "category") ? 'menu-open' : ''?>">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="index.php/admin/category/create" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "category" && !empty($subModule) && $subModule == "createCategory") ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php/admin/category/index" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "category" && !empty($subModule) && $subModule == "viewCategory") ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview <?php echo (!empty($mainModule) && $mainModule == "article") ? 'menu-open' : ''?>">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Articles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php/admin/article/create" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "article" && !empty($subModule) && $subModule == "createArticle") ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php/admin/article/index'" class="nav-link <?php echo (!empty($mainModule) && $mainModule == "article" && !empty($subModule) && $subModule == "viewArticle") ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Article</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/admin/home/index';?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:450px">
<!--                <h3 style="padding-top: 200px;">Welcome to Codeigniter Web Application Console</h3>-->
                <div class="card">
                             <div class="card-header">
                                 Import
                             </div>
                             <div class="card-body">
                                 <form action="Excel_import" method="post" enctype="multipart/form-data">
                                    
                                     <div class="form-group">
                                         <label for="file">Choose CSV</label>
                                         <input type="file" name="file" class="form-control"/>
                                     </div>
                                     <button type="submit" class="btn btn-primary">Submit</button> 
                                 </form>
                             </div>
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
 
  <!-- /.content-wrapper -->

    <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote({
        height: '400px'
    })
  })

</script>

