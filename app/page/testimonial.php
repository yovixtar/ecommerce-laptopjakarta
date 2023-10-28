
<div class="grid-9 pull-right">
<div class="breadcrumbs">
<div xmlns:v="http://rdf.data-vocabulary.org/#">
<span typeof="v:Breadcrumb">
<a rel="v:url" property="v:title" href="index.php">Home</a>
</span><i class="icon-angle-right"></i>Testimoni</div></div>
<div class="post">
<h1><a href="#" title="Testimoni">Testimoni</a></h1>
<div class="vtr-testimoni-page">
<ul class="commentlist">
<?php
$q4 = "SELECT * FROM testimoni";
$s4 = mysqli_query($l , $q4) or die(mysqli_error($l));

while ($data_testimoni=mysqli_fetch_array($s4)) {
?>
<li>
<h2><i class="icon-user"></i> <?php echo $data_testimoni['nama_pengirim'] ?> – <?php echo $data_testimoni['kota_pengirim'] ?> </h2>
<div class="vtr-testimoni-page-tanggal"><i class="icon-thumbs-up"></i>
<a href="javascript:void(0)">
<?php echo tanggal_indo($data_testimoni['tanggal_testimoni'], true) ?> </a>
</div>
<p><?php echo $data_testimoni['isi_testimoni'] ?></p>
</li>
<?php }; ?>
</ul>
<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"> </div>
<div style="clear: both"></div>
</div>
<form action="" method="post" id="commentform">
	<div id="vtr-form">
			<header><h2>Form Testimoni</h2></header>
		<div class="form-group">
			<label for="author">Nama*</label>
			<input type="text" name="nama" value="" size="22" tabindex="1" />
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="text" name="email" value="" size="22" tabindex="2" />
		</div>
		<div class="form-group">
			<label for="kota">kota*</label>
			<input type="text" name="kota" value="" size="22" tabindex="3" />
		</div>
		<div class="form-group">
			<label for="testimoni">Testimoni*</label>
			<textarea name="testimoni" rows="5"></textarea>
		</div>
		<div class="form-group">
		<input name="submit_testimoni" type="submit" class="btn" value="Kirim Testimoni" />
		</div>
	</div>
</form>

</div>
</div>
</div>

<?php
	if (isset($_POST['submit_testimoni'])) {
		$qku = "INSERT INTO testimoni set nama_pengirim ='".$_POST['nama']."', email_pengirim = '".$_POST['email']."' , kota_pengirim = '".$_POST['kota']."' , isi_testimoni ='".$_POST['testimoni']."' , tanggal_testimoni =NOW()  ";
		$sku = mysqli_query($l , $qku) or die(mysqli_error($l));

		if ($sku) {
			?>
			<script type="text/javascript">
				alert("Testimoni Berhasil Ditambahkan");
				document.location ='index.php?page=testimonial'
			</script>			
<?php
		}else{		
		?>

		<script type="text/javascript">
			alert("Gagal Menambahkan Testimoni !");
			document.location = 'index.php?page=testimonial'
		</script>
<?php 
		}

	}
	
?>