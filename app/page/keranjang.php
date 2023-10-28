<?php
//Session
$s2 = mysqli_query($l, "Select *, SUM(total_keranjang) as total_akhir FROM keranjang where username_keranjang = '".$_SESSION['username']."'");
$data_tot = mysqli_fetch_array($s2);
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
					?>
					<script type="text/javascript">
						alert('Anda Harus Login dahulu, sebelum Masuk Keranjang :)');
						document.location ='index.php?page=signin';
					</script>
				<?php
				}else {
					?>
					
				<?php
				};
				
?>


<div class="grid-12">
<div class="vtr-title-home"><h1><span>Keranjang : <?php echo $_SESSION['username'] ?> </span></h1></div>


<!--Produk-->
<?php
$q1 = "SELECT * FROM keranjang join produk on produk.id_produk=keranjang.id_produk_keranjang where username_keranjang = '".$_SESSION['username']."'";
$s1 = mysqli_query($l,$q1) or die(mysqli_error($l));
while ($data_p = mysqli_fetch_array($s1)) {
?>
	<div class="grid-3 grid-m-6">
	<div class="wpbeli-thumb">
		<?php
		if ($data_p['best_seller'] == 1) {
		?>
			<div class="ribbon best"><span>Best Seller</span></div>
		<?php
		}else{};
		?>
	<div class="wpbeli-gambar">
		<a href="index.php?page=detailproduk&idx=<?php echo $data_p['id_produk'] ?>" title="<?php echo $data_p['nama_produk'] ?>"> 
			<img class="lazy" src="app/foto/<?php echo $data_p['foto'] ?>" alt="<?php echo $data_p['nama_produk'] ?>" width="200" height="169" />
		</a>
	</div>
	<div class="wpbeli-title"><h2><a href="index.php?page=detailproduk&idx=<?php echo $data_p['id_produk'] ?>" title="<?php echo $data_p['nama_produk'] ?>"><?php echo $data_p['nama_produk'] ?></a></h2></div>
	<div class="wpbeli-harga">Rp <?php echo number_format($data_p['harga']) ?><span class="coret"></span></div>
	<div class="tombol">
	<a class="btn" href="index.php?page=hapuskeranjang&idx=<?php echo $data_p['id_keranjang'] ?>">Hapus produk</a>
	</div>

	</div>
	</div> 
<!--End Produk-->
<?php }; ?>
<center>

<div class="container">
<table class="w3-table w3-border">
<thead>
	<tr>
	<th>ID Produk</th>
		<th>Nama Produk</th>
		<th>Jumlah Produk yang ingin dibeli</th>
		<th>Klik OK</th>
	</tr>
</thead>
<tbody>
	<?php
	$q4 = "SELECT * FROM keranjang join produk on produk.id_produk=keranjang.id_produk_keranjang where username_keranjang = '".$_SESSION['username']."'";
	$s4 = mysqli_query($l,$q4) or die(mysqli_error($l));
	while ($data_jumlah_keranjang = mysqli_fetch_array($s4)) {
		?>
		<form action="index.php?page=gantijumlah" method="POST">
		<tr>
		<td>
			<input style="border: none;" readonly type="number" name="id_produk" value="<?php echo $data_jumlah_keranjang['id_produk'] ?>">
		</td>
			<td>
				<?php echo $data_jumlah_keranjang['nama_produk'] ?>
			</td>
			<td><input type="text" name="jumlah" class="w3-input" value="<?php echo $data_jumlah_keranjang['jumlah_keranjang'] ?>" title="Jumlah Pesanan"></td>
			<td><input type="submit" name="ganti_jumlah" value="Ok" class="btn"></td>
		</tr>
		</form>
	<?php
	}
	?>
</tbody>
</table><br />

<form action="index.php?page=belikeranjang" method="POST">
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
    </p><span style="color:#f00">* Harus Diisi</span><br /><br />

<div class="maint-div-3" id="tot" style="">
	
	<?php
	echo '<p style="color:#000">Total Pembayaran = <b> Rp '. number_format($data_tot['total_akhir'],0,",",".").' </b> <i> (Sudah termasuk OngKir)</i> </p>';
	?>
</div>
	<input type="submit" name="beli-keranjang" value="Beli Semua" class="btn">
</form>
</div>
</center>
	<br /><br />
</div>
<br />