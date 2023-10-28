<?php
	if (isset($_POST['save'])) {
		$query2 = "SELECT * FROM pesanan where id_order = ".$_POST['orderan']." ";
		$stat2 = mysqli_query($l , $query2) OR DIE(mysqli_error($l));
		$data_pilih = mysqli_fetch_array($stat2);
		if ($data_pilih) {
			$query = "INSERT INTO resi SET user_resi = '".$data_pilih['user_order']."',alamat_resi = '".$data_pilih['alamat_order']."', no_resi = '".$_POST['resi']."', id_order_resi = ".$_POST['orderan']." ";
			$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

			if ($stat) {
				?>
			<script type="text/javascript">
				alert("Resi Berhasil di Tambah");
				document.location = 'index2.php?page=resi'
			</script>
	<?php
			} else {
	?>
			<script type="text/javascript">
				alert("Gagal Menambah Resi ....");
				document.location = 'index2.php?page=resi'
			</script>
	<?php
			}
		}
	}

?>
<h1>Tambah Resi</h1>

<form method="POST" action="">
<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">               
                    <select name="orderan" title="Pilih Orderan" class="input-data-ket" style="width:80%;">
                                    <?php
                                    $qnya="SELECT * from pesanan join produk on pesanan.id_produk_order=produk.id_produk";
                                    $sku = mysqli_query($l , $qnya) OR DIE(mysqli_error($l));
                        
                                    while ($dat = mysqli_fetch_array($sku)) {
                                    ?>
                                        <option value="<?php echo $dat['id_order']?>">
                                        <?php echo $dat['user_order']. " - " .$dat['nama_produk']; ?>
                                        </option>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                    </select><br />
                    <label><b>Orderan</b></label><br /><br />
                    <input type="number" style="width: 100%" name="resi" class="input-data" /><br />
                    <label style="font-size:20px"><b>Nomor Resi</b></label><br /><br />
                </td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="save" value="Tambah Resi" />
</form>