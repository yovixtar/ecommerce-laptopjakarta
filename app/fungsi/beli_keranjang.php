			<?php
			$qd = "SELECT * FROM pesanan ORDER BY grup_order DESC LIMIT 1 ";
			$sd = mysqli_query($l, $qd) or die(mysqli_error($l));
			$dd = mysqli_fetch_array($sd);
			$grup_next=$dd['grup_order'] + 1;
			
			if (isset($_POST['beli-keranjang'])) {
				$qe = "SELECT * FROM keranjang where username_keranjang = '".$_SESSION['username']."'";
				$se = mysqli_query($l, $qe) or die(mysqli_error($l));
				while($de = mysqli_fetch_array($se)){
				
				$date1=date('d-m-Y');
			 	$date2=date('d-m-Y', strtotime('+2 days', strtotime($date1))); //masuk'e database
				$datetime2 = new DateTime($date2);
				$date_batas = date_format($datetime2, 'Y-m-d');
				
				$qc = "INSERT into pesanan set id_produk_order=".$de['id_produk_keranjang'].", user_order = '".$de['user_keranjang']."', no_hp_order=".$de['no_hp_keranjang'].", alamat_order='".$de['alamat_keranjang']."', harga_order=".$de['harga_keranjang'].", jumlah_order = ".$de['jumlah_keranjang']." ,catatan_order='".$de['catatan_keranjang']."' , total_order=".$de['total_keranjang'].", status_order=1, username_order='".$de['username_keranjang']."', grup_order=".$grup_next." , pengiriman_order = ".$de['pengiriman_keranjang']." , metode_pembayaran_order = ".$_POST['pembayaran'].", tanggal_batas_order = '".$date_batas."' ";
				$sc = mysqli_query($l, $qc) or die(mysqli_error($l));
				if ($sc) {
					mysqli_query($l, "DELETE FROM keranjang where id_keranjang = ".$de['id_keranjang']." ");

					$qf = "SELECT stok FROM produk where id_produk = ".$de['id_produk_keranjang']." ";
					$sf = mysqli_query($l, $qf) or die(mysqli_error($l));
					$df = mysqli_fetch_array($sf);
					$df_stok = $df['stok'] - $de['jumlah_keranjang'];
					mysqli_query($l, "UPDATE produk set stok = ".$df_stok." where id_produk = ".$de['id_produk_keranjang']." ");

					?>

					<script type="text/javascript">
						alert('Pesanan sedang Menunggu Transfer, Nomor rekening berada di Cara Order :)');
						document.location = 'index.php?page=caraorder';
					</script>
			<?php
				}else {
					?>
					<script type="text/javascript">
						alert('Maaf, Anda tidak bisa memesan Produk ini.');
						document.location = 'index.php?page=profile';
					</script>
			<?php
				}
			}}
			?>
<h1>Halaman Beli Keranjang, Anda Harus Memiliki Produk di keranjang dahulu untuk membeli</h1><br /><br /><br />