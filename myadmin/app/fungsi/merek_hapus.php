<?php
  $qku = "DELETE FROM merek where id_merek = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Merek Berhasil Dihapus !");
      document.location = 'index2.php?page=merek'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Merek Gagal Dihapus !");
      document.location = 'index2.php?page=merek';
    </script>
<?php } ?>