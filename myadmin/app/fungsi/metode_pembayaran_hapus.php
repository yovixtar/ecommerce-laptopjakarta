<?php
  $qku = "DELETE FROM metode_pembayaran where id_metode_pembayaran = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Metode Pembayaran Berhasil Dihapus !");
      document.location = 'index2.php?page=metodepembayaran'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Metode Pembayaran Gagal Dihapus !");
      document.location = 'index2.php?page=metodepembayaran';
    </script>
<?php } ?>