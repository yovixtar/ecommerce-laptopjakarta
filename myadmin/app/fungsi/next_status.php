<?php
		
  $query = "UPDATE pesanan SET status_order=status_order+1 where id_order=".$_GET['idx']." ";
    $stat = mysqli_query($l , $query) or die(mysqli_error($l));
    
    if ($stat) {
          ?>
        <script type="text/javascript">
          alert("Data Berhasil di Ubah");
          document.location = 'index2.php?page=orderan'
        </script>
    <?php
        } else {
    ?>
        <script type="text/javascript">
          alert("Gagal Mengubah data ....");
          document.location = 'index2.php?page=orderan'
        </script>
    <?php
        }

?>