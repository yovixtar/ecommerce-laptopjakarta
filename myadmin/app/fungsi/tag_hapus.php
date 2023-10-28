<?php
  $qku = "DELETE FROM tag where id_tag = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Tag Berhasil Dihapus !");
      document.location = 'index2.php?page=tag'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Tag Gagal Dihapus !");
      document.location = 'index2.php?page=tag';
    </script>
<?php } ?>