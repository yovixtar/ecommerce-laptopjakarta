<?php
	$q = "SELECT * FROM produk where id_produk=".$_GET['id']." ";
	$s = mysqli_query($l, $q);
	$d = mysqli_fetch_array($s);
			
	$pemesanErr = $jumlahErr = $nopeErr = $alamatErr = $pengirimanErr = $pembayaranErr = $catatanErr = "";
	$pemesan = $jumlah = $nope = $alamat = $pengiriman = $pembayaran = $catatan = "";

	if (isset($_POST['pesan'])) {
		// define variables and set to empty values
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["pemesan"])) {
	    $pemesanErr = "Nama Harus Diisi";
	  } else {
	    $pemesan = $_POST["pemesan"];
	  }
	  
	  if (empty($_POST["jumlah"])) {
	    $jumlahErr = "Jumlah Pesanan harus diisi";
	  } else {
	    $jumlah = $_POST["jumlah"];
	  }
	    
	  if (empty($_POST["nope"])) {
	    $nopeErr = "Nomor HP Harus diisi";
	  } else {
	    $nope = $_POST["nope"];
	  }

	  if (empty($_POST["alamatnya"])) {
	    $alamatErr = "Alamat Harus diisi";
	  } else {
	    $alamat = $_POST["alamatnya"];
	  }
	  
	  if (empty($_POST["pengiriman"])) {
	    $pengirimanErr = "Jasa Pengiriman Harus diisi";
	  } else {
	    $pengiriman = $_POST["pengiriman"];
	  }
	  
	  if (empty($_POST["catatan"])) {
	    $catatanErr = "Catatan Harus diisi";
	  } else {
	    $catatan = $_POST["catatan"];
	  }
	  
	  if (empty($_POST["pembayaran"])) {
	    $pembayaranErr = "pembayaran Harus diisi";
	  } else {
	    $pembayaran = $_POST["pembayaran"];
	  }
	};
	
	
	
	if ($pemesan = $_POST['pemesan'] && $jumlah = $_POST['jumlah'] && $nope = $_POST['nope'] && $alamat = $_POST['alamatnya'] && $pengiriman = $_POST['pengiriman'] && $catatan = $_POST['catatan'] && $pembayaran = $_POST["pembayaran"]) {
		
		$total_kali_jumlah = $_POST['total'] * $_POST['jumlah'];
		
		$date1=date('d-m-Y');
	 	$date2=date('d-m-Y', strtotime('+2 days', strtotime($date1))); //masuk'e database
		$datetime2 = new DateTime($date2);
		$date_batas = date_format($datetime2, 'Y-m-d');
		
		$qa = "INSERT into pesanan set id_produk_order=".$_POST['id_produk'].", user_order = '".$_POST['pemesan']."', no_hp_order='".$_POST['nope']."', alamat_order='".$_POST['alamatnya']."', harga_order=".$_POST['harga'].", jumlah_order = ".$_POST['jumlah']." ,catatan_order='".$_POST['catatan']."' , total_order=".$total_kali_jumlah.", status_order='".$_POST['status']."', username_order='".$_SESSION['username']."', pengiriman_order = ".$_POST['pengiriman']." , metode_pembayaran_order= ".$_POST["pembayaran"].", tanggal_batas_order = '".$date_batas."' " ;
		$sa = mysqli_query($l, $qa) or die(mysqli_error($l));
		if ($sa) {
			$qf = "SELECT * FROM produk where id_produk = ".$_POST['id_produk']." ";
			$sf = mysqli_query($l, $qf) or die(mysqli_error($l));
			$df = mysqli_fetch_array($sf);
			$df['stok'] = $df['stok'] - $_POST['jumlah'];
			mysqli_query($l, "UPDATE produk set stok = ".$df['stok']." where id_produk = ".$_POST['id_produk']." ");
			?>
			<script type="text/javascript">
				alert('Pesanan sedang Menunggu Transfer, Nomor rekening berada di Cara Order :)');
				document.location = 'index.php?page=caraorder';
			</script>
<?php
		}else {
		?>
		<script type="text/javascript">
			document.getElementById('msg').style.display = 'block';
		</script>
<?php
		}
		}
	}
?>

<!--Keranjang-->
<?php
	if (isset($_POST['keranjang'])) {
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["pemesan"])) {
	    $pemesanErr = "Nama Harus Diisi";
	  } else {
	    $pemesan = $_POST["pemesan"];
	  }
	  
	  if (empty($_POST["jumlah"])) {
	    $jumlahErr = "Jumlah Pesanan harus diisi";
	  } else {
	    $jumlah = $_POST["jumlah"];
	  }
	    
	  if (empty($_POST["nope"])) {
	    $nopeErr = "Nomor HP Harus diisi";
	  } else {
	    $nope = $_POST["nope"];
	  }

	  if (empty($_POST["alamatnya"])) {
	    $alamatErr = "Alamat Harus diisi";
	  } else {
	    $alamat = $_POST["alamatnya"];
	  }
	  
	  if (empty($_POST["pengiriman"])) {
	    $pengirimanErr = "Jasa Pengiriman Harus diisi";
	  } else {
	    $pengiriman = $_POST["pengiriman"];
	  }
	  
	  if (empty($_POST["catatan"])) {
	    $catatanErr = "Catatan Harus diisi";
	  } else {
	    $catatan = $_POST["catatan"];
	  }
	  
	}
	
	if ($pemesan = $_POST['pemesan'] && $jumlah = $_POST['jumlah'] && $nope = $_POST['nope'] && $alamat = $_POST['alamatnya'] && $catatan = $_POST['catatan']) {
		$total_kali_jumlah = $_POST['total'] * $_POST['jumlah'];
		
		$qa = "INSERT INTO  keranjang set id_produk_keranjang = '".$_POST['id_produk']."', user_keranjang = '".$_POST['pemesan']."', no_hp_keranjang=".$_POST['nope'].", alamat_keranjang='".$_POST['alamatnya']."', harga_keranjang=".$_POST['harga'].", jumlah_keranjang = ".$_POST['jumlah']." ,catatan_keranjang='".$_POST['catatan']."' , total_keranjang=".$total_kali_jumlah.", username_keranjang='".$_SESSION['username']."', pengiriman_keranjang = ".$_POST['pengiriman']." " ;
		$sa = mysqli_query($l, $qa) or die(mysqli_error($l));

		if ($sa) {
			?>
			<script type="text/javascript">
				alert('Produk Berhasil dimasukan Keranjang!');
				document.location = 'index.php?page=profile'
			</script>
<?php
		}else {
		?>
		<script type="text/javascript">
			document.getElementById('msg').style.display = 'block';
		</script>
<?php
		}
	}};

//Session
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
					?>
					<script type="text/javascript">
						alert('Anda Harus Login dahulu, sebelum Membeli :)');
						document.location ='index.php?page=signin';
					</script>
				<?php
				}else {
					?>
					
				<?php
				}
				?>

<div class="grid-9 pull-right">
				
<div class="maint-div" style="background:none">
	<h1>Pemesanan <?php echo $d['nama_produk'] ?></h1>
	<p id="msg" style="display: none;">Gagal mengirim order</p>
</div>
 
<div class="maint-div-2" style="padding-left: 20px;padding-right: 20px;">
<form action="" method="POST">
	<p>
          <label>ID Produk</label>
          <input class="w3-input" name="id_produk" type="text" value="<?php echo $d['id_produk']; ?>" readonly></p>
          <br />
          
          <p>
          <label>Nama Produk :</label>
          <input class="w3-input" type="text" value="<?php echo $d['nama_produk'] ?>" readonly></p>
          <br />
          
          <p>
          <label>Nama Penerima / Pemesan :</label>
          <input class="w3-input" name="pemesan" type="text"><span style="color: #f00">* <?php echo $pemesanErr;?></span></p>
          <br />
          
          <p>
          <label>Jumlah Barang :</label>
          <input class="w3-input" name="jumlah" type="text" value="1"><span style="color: #f00">* <?php echo $jumlahErr;?></span></p>
          <br />
          
          <p>
          <label>Nomor yang Dapat dihubungi :</label>
          <input class="w3-input" name="nope" maxlength="12" type="number" value="08"><span style="color: #f00">* <?php echo $nopeErr;?></span></p>
          <br />
    
    <p>
    <label>Jasa Pengiriman :</label>
    <select name="pengiriman" title="Pilih Jasa Pengiriman" class="input-data-ket">
        <?php
        $qnya="SELECT * from pengiriman";
        $sku = mysqli_query($l , $qnya);
            while ($dat = mysqli_fetch_array($sku)) {
        ?>
            <option value="<?php echo $dat['id_pengiriman']?>">
            <?php echo $dat['nama_pengiriman']; ?>
            </option>
        <?php 
        }
        ?>
    </select><span style="color:#f00">* <?php echo $pengirimanErr;?></span></p><br />
	
	<textarea rows="6" cols="50" style="resize: none" name="alamatnya" class="" title="Tuliskan Alamat Lengkap Penerima"></textarea><br />
	<label>Alamat</label><span style="color: #f00">* <?php echo $alamatErr;?></span><br /><br />

	<textarea rows="6" cols="50" style="resize: none" name="catatan" class="" placeholder="Misal : Warna, Asesoris Tambahan, dll"></textarea><br />
	<label>Catatan</label><span style="color: #f00">* <?php echo $catatanErr;?></span><br /><br />
	
	<p>Metode Pembayaran</p>
	<p>
	<?php
	$q_pembayaran = "SELECT * FROM metode_pembayaran";
	$s_pembayaran = mysqli_query($l , $q_pembayaran) OR DIE(mysqli_error($l));
	while($data_pembayaran = mysqli_fetch_array($s_pembayaran)){;
	?>
      <input class="w3-radio" type="radio" name="pembayaran" value="<?php echo $data_pembayaran['id_metode_pembayaran'] ?>">
      <label class="w3-validate"><?php echo $data_pembayaran['nama_metode_pembayaran'] ?></label>
    <?php }; ?>
    </p><span>* <font color="#f00"><?php echo $pembayaranErr;?></font></span><br />

    <br />
	<center>
	
	<p class="text-pesan-2" name="hargatotal">
		Perhitungan Harga : <?php echo 'Rp '.number_format($d['harga']).' + Rp '.number_format(50000).' (Ongkos Kirim) = <b><font color="#000"> Rp '.number_format($d['harga'] + 50000,2,",",".").'</font></b>'  ?>
	<textarea style="display: none" name ="total"><?php echo $d['harga'] + 50000; ?></textarea>
	<textarea style="display: none" name ="harga"><?php echo $d['harga']; ?></textarea>
	<textarea style="display: none" name ="status">1</textarea>
	</p>
	
	</center>
	<br /><br />

	<input type="submit" name="keranjang" class="btn" value="Masukan Ke Keranjang">
	<input type="submit" name="pesan" class="btn" value="Pesan Produk">
	<p class="info">*Klik "Pesan" untuk melanjutkan ke Pembayaran</p>
</form>
</div>
</div>

