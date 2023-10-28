<?php
  $qku = "DELETE FROM resi where id_resi = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Resi Berhasil Dihapus !");
      document.location = 'index2.php?page=resi'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Resi Gagal Dihapus !");
      document.location = 'index2.php?page=resi';
    </script>
<?php } ?>