<?php
	$qku = "DELETE FROM keranjang where id_keranjang = ".$_GET['idx']." ";
	$sku = mysqli_query($l , $qku) or die(mysqli_error($l));

	if ($sku) {
		?>
		<script type="text/javascript">
			alert("Data Terhapus !");
			document.location = 'index.php?page=profile'
		</script>
<?php
	}else{
	?>
		<script type="text/javascript">
			alert("Data Gagal Dihapus !");
			document.location = 'index.php?page=profile'
		</script>
<?php
	}


  ?>