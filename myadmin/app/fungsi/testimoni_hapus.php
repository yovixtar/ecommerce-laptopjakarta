<?php
  $qku = "DELETE FROM testimoni where id_testimoni = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Testimoni Berhasil Dihapus !");
      document.location = 'index2.php?page=testimoni'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Testimoni Gagal Dihapus !");
      document.location = 'index2.php?page=testimoni';
    </script>
<?php } ?>