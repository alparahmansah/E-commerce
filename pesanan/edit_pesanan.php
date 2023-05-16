<?php require_once '../template/header.php'; ?>
<?php
// include database connection file
include_once("../config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $tanggal = $_POST['tanggal'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $alamat_pemesan = $_POST['alamat_pemesan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];
    $deskripsi = $_POST['deskripsi'];
    $produk_id = $_POST['produk_id'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE pesanan SET tanggal= '$tanggal' ,nama_pemesan='$nama_pemesan',alamat_pemesan = '$alamat_pemesan',email='$email',no_hp='$no_hp' ,jumlah_pesanan='$jumlah_pesanan', deskripsi='$deskripsi', produk_id='$produk_id' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location:index_pesanan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesanan WHERE id=$id");
 
while($pesanan = mysqli_fetch_array($result))
{
    $tanggal = $pesanan['tanggal'];
    $nama_pemesan = $pesanan['nama_pemesan'];
    $alamat_pemesan = $pesanan['alamat_pemesan'];
    $no_hp = $pesanan['no_hp'];
    $email = $pesanan['email'];
    $jumlah_pesanan = $pesanan['jumlah_pesanan'];
    $deskripsi = $pesanan['deskripsi'];
    $produk_id = $pesanan['produk_id'];
}
?>


<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="../index_pesanan.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
          class="text-black">Checkout</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Edit Pemesan</h2>
      </div>
      <div class="col-md-12">

        <form action="add_pesanan.php" method="POST">

          <div class="p-3 p-lg-5 border">

            <div class="form-group row">
              <div class="col-md-12">
                <label for="tanggal" class="text-black">Tanggal Pemesan<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value =<?php echo $tanggal; ?>>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="nama_pemesan" class="text-black">Nama Pemesan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value =<?php echo $nama_pemesan; ?>>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="alamat_pemesan" class="text-black">Alamat Pemesan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="alamat_pemesan" name="alamat_pemesan" value =<?php echo $alamat_pemesan; ?>>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="no_hp" class="text-black">No Hp<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                   placeholder="123-45-678" value =<?php echo $no_hp; ?>>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" value =<?php echo $email; ?>>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="jumlah_pesanan" class="text-black">Jumlah Pesanan </label>
                <input type="text" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" value =<?php echo $jumlah_pesanan; ?>>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="deskripsi" class="text-black">Dekripsi Produk </label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="7" class="form-control" value =<?php echo $deskripsi; ?>></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="produk_id" class="text-black">Produk ID </label>
              </div>
              <div class="col-md-6">
              <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
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

<?php require_once '../template/footer.php';?>