<?php
	if (isset($_POST['save'])) {
		$query = "INSERT INTO admin_password SET admin = '".$_POST['nama']."', password = md5('".$_POST['pass']."')";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Admin Berhasil di Tambah");
			document.location = 'index2.php?page=admin'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal menambah Admin ....");
			document.location = 'index2.php?page=admin'
		</script>
<?php
		}
	}

?>
<h1>Tambah Admin</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">               
                    <input style="width: 100%" name="nama" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>AdminName</b></label><br /><br />
                    <input style="width: 100%" name="pass" class="input-data" type="password" value="" /><br />
                    <label style="font-size:20px"><b>Password</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Admin" />
</form>