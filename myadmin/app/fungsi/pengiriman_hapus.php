<?php
  $qku = "DELETE FROM pengiriman where id_pengiriman = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Jasa pengiriman Berhasil Dihapus !");
      document.location = 'index2.php?page=pengiriman'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Jasa pengiriman Gagal Dihapus !");
      document.location = 'index2.php?page=pengiriman';
    </script>
<?php } ?>