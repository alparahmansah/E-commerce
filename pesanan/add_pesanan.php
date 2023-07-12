<?php require_once '../template/header.php'; ?>
<?php require_once '../config.php' ; ?>
<?php 
 $query = "SELECT id,nama FROM produk";
 $product = mysqli_query($mysqli, $query);
  
  ?>


<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="../index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
          class="text-black">Checkout</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Checkout</h2>
      </div>
      <div class="col-md-12">

        <form action="add_pesanan.php" method="POST">

          <div class="p-3 p-lg-5 border">

            <div class="form-group row">
              <div class="col-md-12">
                <label for="tanggal" class="text-black">Tanggal Pemesan<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="nama_pemesan" class="text-black">Nama Pemesan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="alamat_pemesan" class="text-black">Alamat Pemesan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="alamat_pemesan" name="alamat_pemesan">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="no_hp" class="text-black">No Hp<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                   placeholder="123-45-678">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="jumlah_pesanan" class="text-black">Jumlah Pesanan </label>
                <input type="text" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan">
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
                <label for="produk_id" class="text-black">Produk ID </label>
              </div>
              <div class="col-md-6">
                <select class="form-select"  for ="deskripsi" name = 'produk_id' id='produk_id'>
                <option selected>Open this select menu</option>
                <?php while ($row = mysqli_fetch_assoc($product)) {
    $id = $row['id'];
    $nama_produk = $row['nama']; ?>

                  
<option value="<?= $id?>">
                      <?= $nama_produk?>
                    </option>

                    <?php
                                    }
                                    ?>
                  </select>
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
 
 include_once("../config.php");
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
     $tanggal = $_POST['tanggal'];
     $nama_pemesan = $_POST['nama_pemesan'];
     $alamat_pemesan = $_POST['alamat_pemesan'];
     $no_hp = $_POST['no_hp'];
     $email = $_POST['email'];
     $jumlah_pesanan = $_POST['jumlah_pesanan'];
     $deskripsi = $_POST['deskripsi'];
     $produk_id = $_POST['produk_id'];

     
     // include database connection file
     
     var_dump($jumlah_pesanan);

     // Insert user data into table
     $result = mysqli_query($mysqli, "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES('$tanggal','$nama_pemesan','$alamat_pemesan','$no_hp', '$email','$jumlah_pesanan','$deskripsi','$produk_id')");
     
     // Show message when user added
     echo "Pesanan berhasil di tambahkan. <a href='index_pesanan.php'>View Users</a>";
 }
 ?>
<?php require_once '../template/footer.php';?>