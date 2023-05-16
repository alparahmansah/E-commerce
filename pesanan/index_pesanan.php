<?php require_once '../template/header1.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Pesanan</h1><br>
            <a href="../pesanan/add_pesanan.php">
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
                  <span>Tabel Pesanan</span>
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
$result = mysqli_query($mysqli, "SELECT * FROM pesanan ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>

 
    <table class= 'table table-striped'width='100%'  border=1>
 
    <tr>
       <th>Tanggal</th> <th>Nama Pemesan</th> <th>Alamat</th> <th>No HP</th> <th>Email</th> <th>Jumlah Pesanan</th> <th>deskripsi produk</th> <th>Produk Id</th> <th>Action</th>
    </tr>
    <?php  
    while($pesanan= mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$pesanan['tanggal']."</td>";
        echo "<td>".$pesanan['nama_pemesan']."</td>";
        echo "<td>".$pesanan['alamat_pemesan']."</td>";
        echo "<td>".$pesanan['no_hp']."</td>";
        echo "<td>".$pesanan['email']."</td>";    
        echo "<td>".$pesanan['jumlah_pesanan']."</td>";    
        echo "<td>".$pesanan['deskripsi']."</td>";    
        echo "<td>".$pesanan['produk_id']."</td>";    
        echo "<td><a class='btn btn-primary' href='edit_pesanan.php?id=$pesanan[id]'>Edit</a> | <a class = 'btn btn-danger'ref='delete_pesanan.php?id=$pesanan[id]'>Delete</a></td></tr>";        
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