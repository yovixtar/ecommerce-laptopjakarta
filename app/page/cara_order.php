<div class="grid-9 pull-right">
<div class="breadcrumbs">
<div xmlns:v="http://rdf.data-vocabulary.org/#">
<span typeof="v:Breadcrumb">
<a rel="v:url" property="v:title" href="index.php">Home</a>
</span><i class="icon-angle-right"></i>Cara Order</div></div> <div class="post">
<h1><a href="javascript:void(0)" title="Cara Order">Cara Order</a></h1>

<ol>
	<li><p align="left">Pilih Produk</p></li>
	<li><p align="left">Klik Beli</p></li>
	<li><p align="left">Alamat Pengiriman</p></li>
	<li><p align="left">Pilih Paket Pengiriman (JNE/Wahana/Tiki/JNT)</p></li>
	<li><p align="left">Pembayaran (BCA/BRI/Mandiri/Permata)</p></li>
	<li><p align="left">Konfirmasi Pembayaran (Beri Waktu)</p></li>
</ol>
<p>Selesai</p><br />
<h2>Nomor Rekening</h2>
<p>Untuk Nomor Rekening Bisa anda lihat <a onclick="document.getElementById('rek').style.display = 'block'">disini</a> </p>

</div>
</div>

<!--Modal Rekening-->
<div id="rek" class="w3-modal" style="z-index: 999999;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container header"> 
        <a onclick="document.getElementById('rek').style.display = 'none' "><span class="w3-closebtn"><font size="7" color="red">&times;</font></span></a>
        <h2 style="color: #fff">Nomor Rekening Kami :</h2>
      </header>
      <div class="" style="padding :20px;">
        <?php
        if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
					?>
		<p>Anda Harus Login dahulu, sebelum Melihat Nomor Rekening Kami :)</p>
				<?php
				}else {
				$stat_pes_rek = mysqli_query($l , "SELECT * FROM pesanan where username_order = '".$_SESSION['username']."' ");
				$data_prek = mysqli_fetch_array($stat_pes_rek);
				
					if (empty($data_prek['id_order'])) {
						?>
					<p>Anda Belum memiliki Orderan / Pembelian ... untuk bisa melihat nomor rekening, Anda harus sudah order barang :)</p>
					<?php
					}else{
						?>
					<table class="w3-table w3-striped w3-bordered w3-card-8" style="">
					<?php
						$stat_rek = mysqli_query($l , "SELECT * FROM rekening");
						while ($data_rek = mysqli_fetch_array($stat_rek)) {
					?>
						<tr>
							<td style="width: 20%"><?php echo $data_rek['nama_bank'] ?></td>
							<td>: <?php echo $data_rek['no_rek'] ?></td>
						</tr>
				<?php
						}
				?>
	       			</table>
		<?php
					}
				}
        ?>
      </div>
    </div>
  </div>