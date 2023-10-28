<?php
	$q = "SELECT * FROM tag join kategori on tag.kategori_tag=kategori.id_kategori where id_tag = ".$_GET['idx']." ";
	$s = mysqli_query($l , $q);
	$d = mysqli_fetch_array($s);
	if (isset($_POST['update'])) {
		$query = "UPDATE tag SET nama_tag = '".$_POST['nama']."',link_tag = '".$_POST['link']."', kategori_tag = ".$_POST['kategori']." where id_tag = ".$_GET['idx']." ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Tag Berhasil di Ubah");
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
<h1>Update tag Produk</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">
                    
                    <input style="width: 100%" name="nama" class="input-data" value="<?php echo $d['nama_tag'] ?>" /><br />
                    <label style="font-size:20px"><b>Nama Tag</b></label><br /><br />
                    
                    <input style="width: 100%" name="link" value="<?php echo $d['link_tag'] ?>" class="input-data" value="" /><br />
                    <label style="font-size:20px"><b>Link Tag</b></label><br /><br />
                    
                    <select name="kategori" title="Pilih Kategori" class="input-data-ket">
                                    <?php
                                    $qnya="SELECT * from kategori";
                                    $sku = mysqli_query($l , $qnya);
                        
                                        while ($dat = mysqli_fetch_array($sku)) {
                                    ?>
                                        <option value="<?php echo $dat['id_kategori']?>" <?php if($d['kategori_tag'] == $dat['id_kategori']){ echo "SELECTED"; }?> >
                                        <?php echo $dat['nama_kategori']; ?>
                                        </option>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                    </select><br />
                    <label style="font-size:20px"><b>Kategori</b></label><br /><br /></td>
                <td width="10%"></td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="update" value="Edit Kategori" />
</form>