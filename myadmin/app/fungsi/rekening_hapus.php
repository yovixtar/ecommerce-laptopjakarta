<?php
  $qku = "DELETE FROM rekening where id_no_rek = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("rekening Berhasil Dihapus !");
      document.location = 'index2.php?page=rekening'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("rekening Gagal Dihapus !");
      document.location = 'index2.php?page=rekening';
    </script>
<?php } ?>