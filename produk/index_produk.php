<?php require_once '../template/header1.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Produk</h1><br>
            <a href="../produk/add_produk.php">
            <button type="button" class="btn btn-success">
              Tambah
            </button>
          </a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <nav>
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="index.html" style="text-decoration: none;">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="mekanik.html" style="text-decoration: none;">Admin</a>
                </li>
                <li class="breadcrumb-item active">
                  <span>Tabel Produk</span>
                </li>
              </ol>
            </nav>
              <!-- <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-sidebar" style="float: right;">
                      <i class="fas fa-search fa-fw"></i>
                    </button>
                  </div>
                </div>
              </div> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <table class = "table table-stripped" width='80%' border=1>
 
    <tr>
       <th>Kode</th> <th>Nama Produk</th> <th>Harga Beli</th> <th>Harga Jual</th> <th>Stok</th> <th>Min Stok</th> <th>deskripsi produk</th> <th>Kategori Produk</th> <th>Action</th>
    </tr>
    <?php  
    while($produk= mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$produk['kode']."</td>";
        echo "<td>".$produk['nama']."</td>";
        echo "<td>".$produk['harga_beli']."</td>";
        echo "<td>".$produk['harga_jual']."</td>";
        echo "<td>".$produk['stok']."</td>";    
        echo "<td>".$produk['min_stok']."</td>";    
        echo "<td>".$produk['deskripsi']."</td>";    
        echo "<td>".$produk['kategori_produk']."</td>";    
        echo "<td><a class='btn btn-success' href='edit_produk.php?id=$produk[id]'>Edit</a> | <a class='btn btn-danger' href='delete_produk.php?id=$produk[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <?php require_once '../template/footer1.php'; ?>