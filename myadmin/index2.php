<?php
session_start();
	include "base/koneksi.php";
	
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
};
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Comerce | Data Gede</title>
	<link rel="stylesheet" type="text/css" href="assets/my.css">
	<link rel="stylesheet" type="text/css" href="assets/w3.css">
	<link rel="Shortcut Icon" href="../favicon.ico" type="image/x-icon" />
	
	<script src='assets/jquery.min.js'></script>
	<script src='assets/tinymce/tinymce.min.js'></script>
	<script src='assets/tinymce/init-tinymce.js'></script>
  	<style type="text/css">
  		.name-admin {
  			float: right;
  			margin-right: 20px;
  			border-bottom: 2px solid #3385ff;
  		}
  	</style>
</head>
<body>
<div class="name-admin">
	<?php
	if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
		?>
		<script type="text/javascript">
			alert('Anda Harus Login dahulu, sebelum Masuk :)');
			document.location ='index.php';
		</script>
	<?php
	}else {
		?>
		<p>Login Sebagai : <?php echo $_SESSION['admin'] ?></p>
	<?php
	}
	?>
</div><br /><br />
<center>
	<h1>Laptop Jakarta | Data Gede</h1>
	
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
	
<div id="myNav" class="overlay" style="overflow-y: auto">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index2.php?page=orderan">Orderan</a>
    <a href="index2.php?page=resi">No. Resi</a>
    <a href="index2.php?page=produk">Produk</a>
    <a href="index2.php?page=kategori">Kategori</a>
    <a href="index2.php?page=merek">Merek</a>
    <a href="index2.php?page=tag">Tag Produk</a>
    <a href="index2.php?page=daftaruser">Daftar User</a>
    <a href="index2.php?page=pengiriman">Jasa Pengiriman</a>
    <a href="index2.php?page=metodepembayaran">Metode Pembayaran</a>
    <a href="index2.php?page=rekening">Rekening</a>
    <a href="index2.php?page=testimoni">Testimoni</a>
    <a href="index2.php?page=admin">AdminName</a>
    <a href="index2.php?page=logout">Logout</a>
  </div>
</div>
	
	<br />
	<br />
	<div width="90%">
		<?php
				$s = isset($_GET['page']) ? $_GET['page'] : null;
				
					switch ($s) {
						//Produk
						case 'produk':
							include "app/page/produk.php";
							break;
						case 'uploadfoto':
							include "app/page/upload_foto.php";
							break;
							//tambah
							case 'tambahproduk':
								include "app/fungsi/produk_tambah.php";
								break;
							//edit
							case 'editproduk':
								include "app/fungsi/produk_edit.php";
								break;
							//hapus
							case 'hapusproduk':
								include "app/fungsi/produk_hapus.php";
								break;

						//order
						case 'orderan':
							include "app/page/order.php";
							break;
						
						case 'order-user':
							include "app/page/order_user.php";
							break;
							//tambah
							case 'nextstatus':
								include "app/fungsi/next_status.php";
								break;
							//Selesai
							case 'selesaiorder':
								include "app/fungsi/selesai_order.php";
								break;
						
						//Selesai
							case 'logout':
								include "app/fungsi/logout.php";
								break;
								
						//Resi
						case 'resi':
							include "app/page/resi.php";
							break;
							//tambah
							case 'tambahresi':
								include "app/fungsi/resi_tambah.php";
								break;
							//edit
							case 'editresi':
								include "app/fungsi/resi_edit.php";
								break;
							//hapus
							case 'hapusresi':
								include "app/fungsi/resi_hapus.php";
								break;

						//Kategori
						case 'kategori':
							include "app/page/kategori.php";
							break;
							//tambah
							case 'tambahkategori':
								include "app/fungsi/kategori_tambah.php";
								break;
							//edit
							case 'editkategori':
								include "app/fungsi/kategori_edit.php";
								break;
							//hapus
							case 'hapuskategori':
								include "app/fungsi/kategori_hapus.php";
								break;
							
						//merek
						case 'merek':
							include "app/page/merek.php";
							break;
							//tambah
							case 'tambahmerek':
								include "app/fungsi/merek_tambah.php";
								break;
							//edit
							case 'editmerek':
								include "app/fungsi/merek_edit.php";
								break;
							//hapus
							case 'hapusmerek':
								include "app/fungsi/merek_hapus.php";
								break;
								
						//Tag Produk
						case 'tambahtagproduk':
							include "app/fungsi/tambah_tag_produk.php";
							break;
						case 'tag':
							include "app/page/tag.php";
							break;
							//tambah
							case 'tambahtag':
								include "app/fungsi/tag_tambah.php";
								break;
							//edit
							case 'edittag':
								include "app/fungsi/tag_edit.php";
								break;
							//hapus
							case 'hapustag':
								include "app/fungsi/tag_hapus.php";
								break;
						
						//User
						case 'daftaruser':
							include "app/page/user.php";
							break;
								
						//Pengiriman
						case 'pengiriman':
							include "app/page/jasa_pengiriman.php";
							break;
							//tambah
							case 'tambahpengiriman':
								include "app/fungsi/pengiriman_tambah.php";
								break;
							//edit
							case 'editpengiriman':
								include "app/fungsi/pengiriman_edit.php";
								break;
							//hapus
							case 'hapuspengiriman':
								include "app/fungsi/pengiriman_hapus.php";
								break;
						
						//Admin
						case 'admin':
							include "app/page/admin.php";
							break;
							//tambah
							case 'tambahadmin':
								include "app/fungsi/admin_tambah.php";
								break;
							//hapus
							case 'hapusadmin':
								include "app/fungsi/admin_hapus.php";
								break;
								
								
						//Metode Pembayaran
						case 'metodepembayaran':
							include "app/page/metode_pembayaran.php";
							break;
							//tambah
							case 'tambahmetodepembayaran':
								include "app/fungsi/metode_pembayaran_tambah.php";
								break;
							//edit
							case 'editmetodepembayaran':
								include "app/fungsi/metode_pembayaran_edit.php";
								break;
							//hapus
							case 'hapusmetodepembayaran':
								include "app/fungsi/metode_pembayaran_hapus.php";
								break;
								
						//Rekening
						case 'rekening':
							include "app/page/no_rekening.php";
							break;
							//tambah
							case 'tambahrekening':
								include "app/fungsi/rekening_tambah.php";
								break;
							//edit
							case 'editrekening':
								include "app/fungsi/rekening_edit.php";
								break;
							//hapus
							case 'hapusrekening':
								include "app/fungsi/rekening_hapus.php";
								break;
								
						//Testimoni
						case 'testimoni':
							include "app/page/testimoni.php";
							break;
							//hapus
							case 'hapustestimoni':
								include "app/fungsi/testimoni_hapus.php";
								break;

								
						default:
							include "home.php";
							break;
						}
			?>
	</div>
</center>
<br /><br />
<script type="text/javascript" src="assets/dg.js"></script>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
</body>
</html>