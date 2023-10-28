<?php
  $qku = "DELETE FROM kategori where id_kategori = ".$_GET['idx']." ";
  $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

  if ($sku) {
    ?>
    <script type="text/javascript">
      alert("Kategori Berhasil Dihapus !");
      document.location = 'index2.php?page=kategori'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Kategori Gagal Dihapus !");
      document.location = 'index2.php?page=kategori';
    </script>
<?php } ?>