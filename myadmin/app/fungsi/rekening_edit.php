<?php
	$q = "SELECT * FROM rekening where id_no_rek = ".$_GET['idx']." ";
	$s = mysqli_query($l , $q);
	$d = mysqli_fetch_array($s);
	if (isset($_POST['update'])) {
		$query = "UPDATE rekening SET nama_bank = '".$_POST['nama']."' , no_rek = '".$_POST['rek']."' where id_no_rek = ".$_GET['idx']." ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Rekening Berhasil di Ubah");
			document.location = 'index2.php?page=rekening'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal Mengubah Rekening ....");
			document.location = 'index2.php?page=rekening'
		</script>
<?php
		}
	}

?>
<h1>Update Rekening</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">
                    
                    <input style="width: 100%" name="nama" class="input-data" value="<?php echo $d['nama_bank'] ?>" /><br />
                    <label style="font-size:20px"><b>Nama Bank</b></label><br />
                    <input type="number" maxlength="10" style="width: 100%" name="rek" class="input-data" value="<?php echo $d['no_rek'] ?>" /><br />
                    <label style="font-size:20px"><b>Nomor Rekening</b></label><br /><br />
                <td width="10%"></td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="update" value="Edit Rekening" />
</form>