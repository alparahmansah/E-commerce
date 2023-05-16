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
<html>
<head>
    <title>Tambah produk</title>
</head>
 
<body>
    

    <div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Checkout</h2>
      </div>
      <div class="col-md-12">

        <form action="add_produk.php" method="POST">

          <div class="p-3 p-lg-5 border">

            <div class="form-group row">
              <div class="col-md-12">
                <label for="kode" class="text-black">Kode<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="kode" name="kode">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="nama" class="text-black">Nama Produk<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="harga_beli" class="text-black">Harga Beli<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="harga_beli" name="harga_beli">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="harga_jual" class="text-black">Harga Jual<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="harga_jual" name="harga_jual"
                   placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="stok" class="text-black">Stok <span class="text-danger">*</span></label>
                <input type="stok" class="form-control" id="stok" name="stok" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="min_stok" class="text-black">Min Stok</label>
                <input type="text" class="form-control" id="min_stok" name="min_stok">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="deskripsi" class="text-black">Dekripsi Produk </label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="kategpri_produk" class="text-black">Kategori Produk</label>
                <input type="text" class="form-control" id="kategori_produk" name="kategori_produk">
              </div>
              </div>
              <div class="col-md-6">
             
              </div>
            </div>



            <div class="form-group row">
              <div class="col-lg-12">
                <button  type="submit" class="btn btn-primary btn-lg btn-block" value="add" name="Submit"> SUBMIT </button>
              </div>
            </div>

          </div>
        </form>
      </div>
      <!-- <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>

          </div> -->
    </div>
  </div>
</div>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga_beli= $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];
        $min_stok = $_POST['min_stok'];
        $deskripsi = $_POST['deskripsi'];
        $kategori_produk= $_POST['kategori_produk'];

        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,min_stok,deskripsi,kategori_produk) VALUES('$kode','$nama','$harga_beli','$harga_jual', '$stok','$min_stok','$deskripsi','$kategori_produk')");
        
        // Show message when user added
        echo "Produk berhasil di tambahkan. <a class=btn btn-success href='index_produk.php'>View Users</a>";
    }
    ?>
</body>
</html>
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <?php require_once '../template/footer1.php'; ?>