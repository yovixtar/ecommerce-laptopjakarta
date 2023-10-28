 <!--Modal Profil-->
<div id="profile" class="w3-modal" style="z-index: 999999;display: block;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container header"> 
        <a href="index.php"><span class="w3-closebtn"><font size="7" color="red">&times;</font></span></a>
        <h1 style="color: #fff">Hello <?php echo $_SESSION['username'] ?></h1>
      </header><br />
      <div class="" style="padding-left: 20px;padding-right: 20px;">
        
<a href="index2.php?p=keranjang"><button class="btn">Keranjang</button></a>
<a href="index2.php?p=order"><button class="btn">Pembelian</button></a>
<a href="index.php?page=logout"><button class="btn">Log OUT</button></a>
       
      </div>
    </div>
  </div>