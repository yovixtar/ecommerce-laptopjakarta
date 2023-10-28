<?php
    $q1 = "DELETE FROM pesanan where id_order = ".$_GET['idx']." ";
    $s1 = mysqli_query($l , $q1) or die(mysqli_error($l));
  if ($s1) {
    ?>
    <script type="text/javascript">
      alert("Pesanan Berhasil Dihapus !");
      document.location = 'index2.php?page=orderan'
    </script>
<?php
  }else{
  ?>
    <script type="text/javascript">
      alert("Pesanan Gagal Dihapus !");
      document.location = 'index2.php?page=orderan';
    </script>
<?php } ?>