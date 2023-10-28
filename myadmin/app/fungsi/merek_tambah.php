<?php
	if (isset($_POST['save'])) {
		$query = "INSERT INTO merek SET nama_merek = '".$_POST['nama']."', link_merek = '".$_POST['link']."'";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Data Berhasil di Tambah");
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
<h1>Tambah merek</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">               
                    <input style="width: 100%" name="nama" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Nama merek</b></label><br /><br />
                    <input style="width: 100%" name="link" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Link merek</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah merek" />
</form>