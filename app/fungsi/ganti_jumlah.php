<?php
if (isset($_POST['ganti_jumlah'])) {
	$s3= mysqli_query($l, "UPDATE keranjang SET jumlah_keranjang =".$_POST['jumlah']." WHERE id_produk_keranjang = ".$_POST['id_produk']." ");
	if ($s3) {
		$q6 = "SELECT * FROM keranjang where id_produk_keranjang = ".$_POST['id_produk']." ";
		$s6 = mysqli_query($l,$q6) or die(mysqli_error($l));
		$data_b = mysqli_fetch_array($s6);
		$ganti_total = $data_b['total_keranjang'] * $data_b['jumlah_keranjang'];
		
		if ($ganti_total) {
			$s3= mysqli_query($l, "UPDATE keranjang SET total_keranjang =".$ganti_total." WHERE id_produk_keranjang = ".$_POST['id_produk']." ");
		}
		?>
		<script type="text/javascript">
			alert("Jumlah diganti");
			document.location = "index2.php?p=keranjang";
		</script>
	<?php
	}
}
?>