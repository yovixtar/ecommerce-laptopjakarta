<?php
	$q = "SELECT * FROM merek where id_merek = ".$_GET['idx']." ";
	$s = mysqli_query($l , $q);
	$d = mysqli_fetch_array($s);
	if (isset($_POST['update'])) {
		$query = "UPDATE merek SET nama_merek = '".$_POST['nama']."', link_merek = '".$_POST['link']."' where id_merek = ".$_GET['idx']." ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Data Berhasil di Ubah");
			document.location = 'index2.php?page=merek'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal Mengubah data ....");
			document.location = 'index2.php?page=merek'
		</script>
<?php
		}
	}

?>
<h1>Update merek</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">
                    
                    <input style="width: 100%" name="nama" class="input-data" value="<?php echo $d['nama_merek'] ?>" /><br />
                    <label style="font-size:20px"><b>Nama merek</b></label><br /><br />
                 	<input style="width: 100%" name="link" class="input-data" value="<?php echo $d['link_merek'] ?>" /><br />
                    <label style="font-size:20px"><b>Link merek</b></label><br /><br /></td>
                <td width="10%"></td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="update" value="Edit merek" />
</form>