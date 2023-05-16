<?php require_once '../template/header1.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Kategori</h1><br>
            <a href="../kategori_produk/add_kategori_produk.php">
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
                  <span>Tabel Kategori</span>
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
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 
    <table width='100' class= 'table table-stripped' border=1>
 
    <tr>
       <th>Id</th> <th>Nama Kategori</th> <th>Action</th>
    </tr>
    <?php  
    while($kategori_produk= mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$kategori_produk['id']."</td>";
        echo "<td>".$kategori_produk['nama']."</td>";
        echo "<td><a href='edit_kategori_produk.php?id=$kategori_produk[id]'>Edit</a> | <a href='delete_kategori_produk.php?id=$kategori_produk[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>

</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <?php require_once '../template/footer1.php'; ?>