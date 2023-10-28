<?php
	$q1 = "SELECT * FROM resi where id_resi = ".$_GET['idx']." ";
	$s1 = mysqli_query($l , $q1) OR DIE(mysqli_error($l));
	$d1 = mysqli_fetch_array($s1);
		
	if (isset($_POST['update'])) {
		$q = "SELECT * FROM resi join pesanan on resi.id_order_resi=pesanan.id_order join produk on pesanan.id_produk_order=produk.id_produk where id_order_resi = ".$_POST['orderan']." ";
		$s = mysqli_query($l , $q);
		$d = mysqli_fetch_array($s);
		
		$query = "UPDATE resi SET user_resi = '".$d['user_order']."',alamat_resi = '".$d['alamat_order']."', no_resi = '".$_POST['resi']."', id_order_resi = ".$_POST['orderan']." where id_resi = ".$_GET['idx']." ";
		$stat = mysqli_query($l , $query) or die(mysqli_error($l)); 

		if ($stat) {
			?>
		<script type="text/javascript">
			alert("Resi Berhasil di Ubah");
			document.location = 'index2.php?page=resi'
		</script>
<?php
		} else {
?>
		<script type="text/javascript">
			alert("Gagal Mengubah Resi ....");
			document.location = 'index2.php?page=resi'
		</script>
<?php
		}
	};

?>
<h1>Update Resi</h1>

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
                                        <option value="<?php echo $dat['id_order']?>" <?php if($dat['id_order'] == $d1['id_order_resi']){echo "SELECTED";};?>>
                                        <?php echo $dat['user_order']. " - " .$dat['nama_produk']; ?>
                                        </option>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                    </select><br />
                    <label><b>Orderan</b></label><br /><br />
                    <input type="number" style="width: 100%" name="resi" class="input-data" value="<?php echo $d1['no_resi'] ?>" /><br />
                    <label style="font-size:20px"><b>Nomor Resi</b></label><br /><br />
                    
                <td width="10%"></td>
              </tr>
            </tbody>
            </table>

<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit" name="update" value="Edit Resi" />
</form>