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
    
    
    $nama = $_POST['nama'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE kategori_produk SET nama='$nama' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location:index_kategori_produk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk WHERE id=$id");
 
while($kategori_produk = mysqli_fetch_array($result))
{
    $id = $kategori_produk['id'];
    $nama = $kategori_produk['nama'];
   
}
?>
<html>
<head>	
    <title>Edit kategori_produk Produk</title>
</head>
 
<body>
    <a href="index_kategori_produk.php">Home</a>
    <br/><br/>
    
<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control" value =<?php echo $_GET['id']; ?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control" required="required" value =<?php echo $nama; ?>>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <?php require_once '../template/footer1.php'; ?>