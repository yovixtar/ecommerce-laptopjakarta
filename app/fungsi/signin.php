<?php
if (isset($_POST['signin'])) {
  $qc = "SELECT * FROM user where username = '".$_POST['username']."' AND password = md5('".$_POST['password']."') ";
  $sc = mysqli_query($l, $qc) or die(mysqli_error($l));
  $dc = mysqli_fetch_array($sc);

  if (empty($dc['username']) && empty($dc['password'])) {
        ?>
    <script type="text/javascript">
      alert('Tidak bisa Masuk, Silahkan Coba Lagi....')
    </script>
<?php
  }else{
        $_SESSION['username'] = $_POST['username'];
    ?>
    <script type="text/javascript">
        alert('Selamat Datang <?php echo $_SESSION['username']; ?>');
        document.location = 'index.php'
    </script>
<?php
  }
}
?>


<!--Modal Sign In-->
<div id="signin" class="w3-modal" style="z-index: 999999;display: block;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container header"> 
        <a href="index.php"><span class="w3-closebtn"><font size="7" color="red">&times;</font></span></a>
        <h2 style="color: #fff">Silahkan isi untuk login</h2>
      </header><br />
      <div class="" style="padding-left: 20px;padding-right: 20px;">
        
        <form method="post" action="">
          <p>
      <label>Username</label>
      <input class="w3-input" name="username" type="text"></p>
      <p>
      <label>Password</label>
      <input class="w3-input" name="password" type="password"></p>
          <input style="font-size: 20px" class="btn" name="signin" type="submit" value="Sign In" /><br /><br />
        </form>
       
       <p>* Tidak punya Akun ? <a href="index.php?page=signup">Daftar Sekarang !</a></p>
       <br />
      </div>
    </div>
  </div>

