<?php require_once '../template/header1.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Kategori</h1><br>
            <a href="../produk/add_produk.php">
            
          </a>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
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
          <!-- </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<?php
// include database connection file
include_once("../config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_beli= $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori_produk= $_POST['kategori_produk'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET kode= '$kode' ,nama='$nama',harga_beli = '$harga_beli',harga_jual='$harga_jual',stok='$stok' ,min_stok='$min_stok', deskripsi='$deskripsi', kategori_produk='$kategori_produk' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location:index_produk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");
 
while($produk = mysqli_fetch_array($result))
{
    $kode = $produk['kode'];
    $nama = $produk['nama'];
    $harga_beli = $produk['harga_beli'];
    $harga_jual = $produk['harga_jual'];
    $stok = $produk['stok'];
    $min_stok = $produk['min_stok'];
    $deskripsi = $produk['deskripsi'];
    $kategori_produk = $produk['kategori_produk'];
}
?>
<html>
<head>	
    <title>Edit Produk</title>
</head>
 
<body>
    <a href="index_produk.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit_produk.php">
        <table border="1">
        <tr> 
                <td>Kodel</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli" value=<?php echo $harga_beli;?>></td>
            </tr>
            <tr> 
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual" value=<?php echo $harga_jual;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr> 
                <td>Min Stok</td>
                <td><input type="number" name="min_stok" value=<?php echo $min_stok;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td> Kategori Produk</td>
                <td><input type="text" name="kategori_produk" value=<?php echo $kategori_produk;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>