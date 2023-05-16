<?php require_once '../template/header1.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Kategori</h1><br>
            <a href="../kategori_produk/index_kategori_produk.php">
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
<html>
<head>
    <title>Tambah Kategori produk</title>
</head>
 
<body>
  
    
 
    <form action="add_kategori_produk.php" method="post" name="form1">
        <table width="25%" border="0">
      
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
           
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kategori_produk (Id,nama) VALUES('$id','$nama')");
        
        // Show message when user added
        echo "Kategori berhasil di tambahkan. <a href='index_kategori_produk.php'>View Users</a>";
    }
    ?>
</body>
</html>

</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <?php require_once '../template/footer1.php'; ?>