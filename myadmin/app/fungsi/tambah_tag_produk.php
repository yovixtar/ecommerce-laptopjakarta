<?php
  $q1 = "SELECT * FROM produk where id_produk =".$_GET['idx']." ";
  $s1 = mysqli_query($l , $q1) OR DIE(mysqli_error($l));
  $d1 = mysqli_fetch_array($s1);
  
if (isset($_POST['save'])) {
  
$tag_prod = $_POST['tag'];
$jumlah_dipilih = count($tag_prod);
 
for($x=0;$x<$jumlah_dipilih;$x++){
  $query = "INSERT INTO tag_produk SET id_tag_tag_produk=".$tag_prod[$x].", id_produk_tag_produk=".$_GET['idx']."";
  $stat= mysqli_query($l, $query);
};
  if ($stat) {
    ?>
    <script type="text/javascript">
      alert("Berhasil menambahkan Tag");
      document.location ='index2.php?page=produk';
    </script>
<?php
  }else{
    
    ?>
    <script type="text/javascript">
      alert("Tidak Bisa Menambahkan Tag");
      document.location ='index2.php?page=tambahtagproduk&idx=<?php echo $_GET['idx'] ?>';
    </script>
<?php
  }
}
?>


<!--Modal Tag-->
<div id="signin" class="w3-modal" style="z-index: 999999;display: block;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container w3-blue"> 
        <h2 style="color: #fff">Pilih Tag untuk Produk</h2>
      </header><br />
      <div class="" style="">
        
        <form method="POST" action="">
        <?php
        $query_tag = "SELECT * FROM tag join kategori on tag.kategori_tag=kategori.id_kategori where kategori_tag =".$d1['kategori']." ";
        $stat_tag = mysqli_query($l , $query_tag) OR DIE(mysqli_error($l));
          while ($data_tag=mysqli_fetch_array($stat_tag)) {
              ?>
        <input class="w3-check" name="tag[]" value="<?php echo $data_tag['id_tag'] ?>" type="checkbox">
        <label class="w3-validate"><?php echo $data_tag['nama_tag'] ?></label>
        <?php
          }
        ?>
        <br />
        <br />
          <input style="font-size: 20px" class="w3-btn w3-round w3-blue" name="save" type="submit" value="Tambahkan" /><br /><br />
        </form>
       
      </div>
    </div>
  </div>