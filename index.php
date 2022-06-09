<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<?php
    // include database connection file
		include_once("koneksi.php");

        // if(isset($_POST['cek'])){
        // $penumpang = $_POST['jumlah_penumpang']*200000;
        // $lansia = $_POST['jumlah_penumpang_lansia']*180000;

        // $total_harga = $penumpang + $lansia;
        // }
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$no_identitas = $_POST['no_identitas'];
		$no_hp = $_POST['no_hp'];
        $kelas = $_POST['kelas'];
        $tanggal = $_POST['tanggal'];
        $jumlah_penumpang = $_POST['jumlah_penumpang'];
        $jumlah_penumpang_lansia = $_POST['jumlah_penumpang_lansia'];
        // $harga = $_POST['harga'];

        $penumpang = $_POST['jumlah_penumpang']*200000;
        $lansia = $_POST['jumlah_penumpang_lansia']*180000;

        


		
		
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO tiket_bus(nama,no_identitas,no_hp,kelas,tanggal,jumlah_penumpang,jumlah_penumpang_lansia) 
        VALUES('$nama','$no_identitas','$no_hp','$kelas','$tanggal','$jumlah_penumpang','$jumlah_penumpang_lansia')");
		
		// Show message when user added
        
        // echo $total_harga = $penumpang + $lansia;
        // echo "<h2>Total Harga = Rp. " . $total_harga . "</h2>";
       
     
	}
	?>

<div class="container">
<h2>Pemesanan Tiket Bus</h2>
  <form action="index.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="lname">Nama Lengkap</label>
      </div>
      <div class="col-75">
        <input type="text"  name="nama" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nomor Identitas</label>
      </div>
      <div class="col-75">
        <input type="text"  name="no_identitas" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nomor Hp</label>
      </div>
      <div class="col-75">
        <input type="text" name="no_hp" >
      </div>
    </div>
    <div class="row">
         <div class="col-lg-6 mb-4 mt-3" >
              <div class="card">
                <img src="bus2.jpg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">eksekutif</h5>
                </div>
               </div>
              </div>
              <div class="col-lg-6 mb-4 mt-3" >
              <div class="card">
                <img src="bus1.jpg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">reguler</h5>
                </div>
               </div>
              </div>
    
        
    </div>
    <div class="row">
      <div class="col-25">
        <label for="kelas">Kelas</label>
      </div>
      <div class="col-75">
      <select class="custom-select" name="kelas">
        <option selected>Pilih Kelas</option>
        <option value="reguler">reguler</option>
          <option value="eksekutif">eksekutif</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Tanggal Berangkat</label>
      </div>
      <div class="col-75">
        <input type="date"  name="tanggal" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Jumlah Penumpang</label>
      </div>
      <div class="col-75">
        <input type="number"  name="jumlah_penumpang" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Jumlah Penumpang lansia</label>
      </div>
      <div class="col-75">
        <input type="number"  name="jumlah_penumpang_lansia" >
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-25">
        <label for="lname">Harga</label>
      </div>
      <div class="col-75">
        <input type="number" id="harga" name="harga" disabled value="1" >
      </div>
    </div>
     -->
    <div class="row">
    <input type="submit" name="Submit" value="Checkout">
   
    </div>
    
  </form>
  <?php
 $total_harga = $penumpang + $lansia;
 echo "<h2>Total Harga = Rp. " . $total_harga . "</h2>";
?>
</div>

</body>
</html>
