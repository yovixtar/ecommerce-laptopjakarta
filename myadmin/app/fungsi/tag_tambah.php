<?php
	if (isset($_POST['save'])) {
		$query = "INSERT INTO tag SET nama_tag = '".$_POST['nama']."', kategori_tag = ".$_POST['kategori']." , link_tag ='".$_POST['link']."' ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Tag Berhasil di Tambah");
			document.location = 'index2.php?page=tag'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal Mengubah Tag ....");
			document.location = 'index2.php?page=tag'
		</script>
<?php
		}
	}

?>
<h1>Tambah Tag Produk</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">               
                    <input style="width: 100%" name="nama" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Nama Tag Produk</b></label><br /><br />
                    
                    <input style="width: 100%" name="link" placeholder="*Tanpa Spasi" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Link Tag</b></label><br /><br />
                    
                    <select name="kategori" title="Pilih Kategori" class="input-data-ket">
                                    <?php
                                    $qnya="SELECT * from kategori";
                                    $sku = mysqli_query($l , $qnya);
                        
                                        while ($dat = mysqli_fetch_array($sku)) {
                                    ?>
                                        <option value="<?php echo $dat['id_kategori']?>">
                                        <?php echo $dat['nama_kategori']; ?>
                                        </option>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                    </select><br />
                    <label style="font-size:20px"><b>Kategori Tag</b></label><br /><br />
                </td>
              </tr>
            </tbody>
</table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Tag" />
</form>