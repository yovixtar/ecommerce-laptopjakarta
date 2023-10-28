<?php
	if (isset($_POST['save'])) {
		$query = "INSERT INTO metode_pembayaran SET nama_metode_pembayaran = '".$_POST['nama']."' ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 
 
 		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Metode Pembayaran Berhasil di Tambah");
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
<h1>Tambah Metode Pembayaran</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">               
                    <input style="width: 100%" name="nama" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Nama Metode Pembayaran</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Metode Pembayaran" />
</form>