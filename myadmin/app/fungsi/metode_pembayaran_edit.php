<?php
	$q = "SELECT * FROM metode_pembayaran where id_metode_pembayaran = ".$_GET['idx']." ";
	$s = mysqli_query($l , $q);
	$d = mysqli_fetch_array($s);
	if (isset($_POST['update'])) {
		$query = "UPDATE metode_pembayaran SET nama_metode_pembayaran = '".$_POST['nama']."' where id_metode_pembayaran = ".$_GET['idx']." ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Metode Pembayaran Berhasil di Ubah");
			document.location = 'index2.php?page=metodepembayaran'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal Mengubah Metode Pembayaran ....");
			document.location = 'index2.php?page=metodepembayaran'
		</script>
<?php
		}
	}

?>
<h1>Update Metode Pembayaran</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">
                    
                    <input style="width: 100%" name="nama" class="input-data" value="<?php echo $d['nama_metode_pembayaran'] ?>" /><br />
                    <label style="font-size:20px"><b>Nama Metode Pembayaran</b></label><br /><br />
                <td width="10%"></td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="update" value="Edit Metode Pembayaran" />
</form>