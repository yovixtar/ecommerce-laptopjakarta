<?php
session_start();
include "base/koneksi.php";
if (isset($_POST['login'])) {
	$statment = mysqli_query($l, "select * from admin_password WHERE admin='".$_POST['admin']."' ");
	$data = mysqli_fetch_array($statment);
	
	$password = $data['password'];

	if (md5($_POST['pass']) == $password && $data['admin'] == $_POST['admin']) {
		$_SESSION['admin'] = $data['admin'];
?>
		<script type="text/javascript">
			document.location = "index2.php"
		</script>
<?php
	}else{
?>

 		<script type="text/javascript">
 			alert('Admin Tidak Terdaftar, Mohon Masuk Sebagai Admin.');
 			document.location = "index.php"
 		</script>
<?php
}
};
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Comerce | Data Gede</title>
	<link rel="stylesheet" type="text/css" href="assets/my.css">
	<link rel="stylesheet" type="text/css" href="assets/w3.css">
</head>
<body>
<!--Modal LOgim-->
<div id="Login" class="w3-modal" style="z-index: 999999;display: block;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container" style="background-color: #3385ff; color: #fff"> 
        <h2 style="color: #fff">Silahkan isi untuk login</h2>
      </header><br />
       <center>
		 <h1>Masukan Password Admin</h1>
		 <form action="" method="POST">
		 	<input type="text" name="admin" placeholder="Nama Admin" style="height: 35px; width: 40%;border-top-right-radius: 10px;border-top-left-radius: 10px; border:1px solid #3385ff"><br />
		 	<input type="password" name="pass" placeholder="Password" style="height: 35px; width: 40%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px; border:1px solid #3385ff"><br />
		 	<input type="submit" name="login" value="login" class="w3-btn" style="margin-top: 5px;">
		 </form>
		</center>
	<br />		 
    </div>
  </div>
 <!--End Modal-->
 
</body>
</html>