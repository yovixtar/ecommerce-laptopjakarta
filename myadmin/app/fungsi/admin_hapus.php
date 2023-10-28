<?php
  $qku = "DELETE FROM admin_password where id_admin = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Admin Berhasil Dihapus !");
      document.location = 'index2.php?page=admin'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Admin Gagal Dihapus !");
      document.location = 'index2.php?page=admin';
    </script>
<?php } ?>