<?php
    $q = "SELECT * FROM produk where id_produk = ".$_GET['idx']." ";
    $s = mysqli_query($l , $q);
    $d = mysqli_fetch_array($s);
    
    if (isset($_POST['update'])) {
        $query = "UPDATE produk SET nama_produk ='".$_POST['nama_produk']."',  kode = '".$_POST['kode_produk']."' , kategori = ".$_POST['kategori']." , detail ='".$_POST['detail_produk']."' , merek = ".$_POST['merek']." , harga = ".$_POST['harga']." , stok =".$_POST['stok']." , best_seller =".$_POST['best']." where id_produk =".$_GET['idx']."";
        $stat = mysqli_query($l , $query) or die(mysqli_error($l));
        
        
          $ekstensi_diperbolehkan = array('png','jpg');
          $nama = $_FILES['foto']['name'];
          $x = explode('.', $nama);
          $ekstensi = strtolower(end($x));
          $ukuran = $_FILES['foto']['size'];
          $file_tmp = $_FILES['foto']['tmp_name'];  

          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 10044070){      
              move_uploaded_file($file_tmp, '../app/foto/'.$nama);
              $query = "UPDATE produk set foto = '".$nama."' where id_produk = ".$_GET['idx']."";
              $stat=mysqli_query($l, $query) OR DIE(mysqli_error($l));
              if($stat){
               ?>
               <?php
              }else{
                ?>
                <script type="text/javascript">alert('Gagal Upload Foto !')</script>
                <?php
              }
            }else{
              ?>
              <script type="text/javascript">alert('Ukuran Foto Terlalu Besar !')</script>
            <?php
            }
          }else{
            ?>
            <script type="text/javascript">alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN')</script>
            <?php ;
            
          }; 

        if ($stat) {
        
            ?>
        <script type="text/javascript">
            alert("Data Berhasil di Ubah");
            document.location = 'index2.php?page=produk'
        </script>
<?php
        } else {
?>
        <script type="text/javascript">
            alert("Gagal Mengubah data ....");
            document.location = 'index2.php?page=produk'
        </script>
<?php
        }
    }

?>
<h1>Update Sekolah</h1>

<form method="POST" action="" enctype="multipart/form-data">

<table align="center" style="margin-top: 10px ; width:100%; font-size: 15px; padding: 20px;">
            <tbody>
              <tr>
                <td width="40%">
                    <input style="width: 100%" type="text" name="nama_produk" class="input-data"  value="<?php echo $d['nama_produk'] ?>" /><br />
                    <label style="font-size:20px"><b>Nama Produk</b></label><br /><br />

                    <input style="width: 100%" name="kode_produk" maxlength="5"  class="input-data" value="<?php echo $d['kode'] ?>" /><br />
                    <label style="font-size:20px"><b>Kode Produk</b></label><br /><br />
                    
                    <select name="kategori" title="Pilih Kategori" class="input-data-ket">
                                    <?php
                                    $qnya="SELECT * from kategori";
                                    $sku = mysqli_query($l , $qnya);
                        
                                        while ($dat = mysqli_fetch_array($sku)) {
                                    ?>
                                        <option value="<?php echo $dat['id_kategori']?>" <?php if($d['kategori'] == $dat['id_kategori']){ echo "SELECTED"; }?> >
                                        <?php echo $dat['nama_kategori']; ?>
                                        </option>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                    </select><br />
                    <label><b>Kategori</b></label><br /><br />

                    <textarea style="width: 100%; resize: none;" id="edittext" name="detail_produk" class="input-data" rows="8"><?php echo $d['detail'] ?></textarea> <br />
                    <label style="font-size:20px"><b>Detail Produk</b></label>
                    
                    
                </td>
                <td width="10%"></td>
                <td width="40%" valign="top">
                    <select name="merek" title="Pilih Merek" class="input-data-ket">
                                    <?php
                                    $qnya="SELECT * from merek";
                                    $sku = mysqli_query($l , $qnya);
                        
                                        while ($dat = mysqli_fetch_array($sku)) {
                                    ?>
                                        <option value="<?php echo $dat['id_merek']?>" <?php if($d['merek'] == $dat['id_merek']){ echo "SELECTED";} ?> >
                                        <?php echo $dat['nama_merek']; ?>
                                        </option>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                    </select><br />
                    <label><b>Merek</b></label><br /><br />
                    
                    <input style="width: 100%" name="harga" type="number" class="input-data" value="<?php echo $d['harga'] ?>" /><br />
                    <label style="font-size:20px"><b>Harga Produk</b></label><br /><br />

                    <input style="width: 100%" name="stok" type="number" class="input-data"  value="<?php echo $d['stok'] ?>" /><br />
                    <label style="font-size:20px"><b>Stok Produk</b></label><br /><br />
                    
                    <p>Best Seller ?</p>
                      <p>
                      <input class="w3-radio" type="radio" name="best" value="1" <?php if($d['best_seller'] == 1){ echo "CHECKED";} ?>>
                      <label class="w3-validate">Ya</label>
                      <input class="w3-radio" type="radio" name="best" value="0" <?php if($d['best_seller'] == 0){ echo "CHECKED";} ?>>
                      <label class="w3-validate">Tidak</label></p><br />  
                      
                    <input type="file" name="foto" class="input-data" style="width: 100%" title="*Nama Foto tanpa spasi ! Ekstensi berhuruf kecil !"><br />
                    <label>Foto</label>
                </td>
              </tr>
            </tbody>
            </table>
<input class="btn-tm" style="padding-left: 50px; padding-right: 50px; font-size: 20px" type="submit"name="update" value="Edit Produk" />
</form>