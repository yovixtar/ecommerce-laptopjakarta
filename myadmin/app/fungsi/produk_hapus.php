<?php
  $qku = "DELETE FROM produk where id_produk = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
        ?>
    <script type="text/javascript">
      alert("Produk Berhasil Dihapus !");
      document.location = 'index2.php?page=produk'
    </script>
 <?php     
  }else{
  ?>
    <script type="text/javascript">
      alert("Produk Gagal Dihapus !");
      document.location = 'index2.php?page=produk';
    </script>
<?php } ?>