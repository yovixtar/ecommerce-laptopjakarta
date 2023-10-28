<?php
// define variables and set to empty values
$nama_userErr = $nopeErr = $usernameErr = $passwordErr = "";
$nama_user = $nope = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama_user"])) {
    $nama_userErr = "Nama Harus Diisi";
  } else {
    $nama_user = $_POST["nama_user"];
  }
  
  if (empty($_POST["nope"])) {
    $nopeErr = "No. Hp harus diisi";
  } else {
    $nope = $_POST["nope"];
  }
    
  if (empty($_POST["username"])) {
    $usernameErr = "Username Harus diisi";
  } else {
    $username = $_POST["username"];
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password Harus diisi";
  } else {
    $password = $_POST["password"];
  }
}

  if ($nama_user = $_POST['nama_user'] && $nope = $_POST["nope"] && $username = $_POST["username"] && $password = $_POST["password"]) {
    $qku = "INSERT INTO user set nama_user ='".$_POST['nama_user']."', no_hp_user = '".$_POST['nope']."' , username = '".$_POST['username']."' , password = md5('".$_POST['password']."') ";
    $sku = mysqli_query($l , $qku) or die(mysqli_error($l));

    if ($sku) {
      ?>
      <script type="text/javascript">
        alert("<?php echo $_POST['nama_user'] ?> Berhasil Ditambahkan !! Silahkan Login Dahulu !! ");
        document.location ='index.php?page=signin'
      </script>     
<?php
    }else{    
    ?>

    <script type="text/javascript">
      alert("Gagal Menambahkan <?php echo $_POST['nama_user'] ?> !");
      document.location = 'index.php?page=signup';
    </script>
<?php 
    }

  }
?>



<!--Modal Sign In-->
<div id="signup" class="w3-modal" style="z-index: 999999;display: block;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container header"> 
        <a href="index.php"><span class="w3-closebtn"><font size="7" color="red">&times;</font></span></a>
        <h2 style="color: #fff">Silahkan isi untuk Daftar Akun</h2>
      </header><br />
      <div class="" style="padding-right: 20px;padding-left: 20px;">
        <form method="post" action="">
           <p>
          <label>Nama Pengguna</label>
          <input class="w3-input" name="nama_user" type="text"><span class="error">* <?php echo $nama_userErr;?></span></p>
          <br />
          <p>
          <label>No. HP</label>
          <input class="w3-input" name="nope" type="number"><span class="error">* <?php echo $nopeErr;?></span></p>
          <br />
          <p>
          <label>Username</label>
          <input class="w3-input" name="username" type="text"><span class="error">* <?php echo $usernameErr;?></span></p>
          <br />
          <p>
          <label>Password</label>
          <input class="w3-input" name="password" type="password"><span class="error">* <?php echo $passwordErr;?></span></p>
          <br />
          <input style="font-size: 20px" class="btn" name="signin" type="submit" value="Sign Up" /><br /><br />
        </form>
        
        <p>* Sudah punya Akun ? <a href="index.php?page=signin">LogIn Sekarang !</a></p>
       <br />
      </div>
    </div>
  </div>