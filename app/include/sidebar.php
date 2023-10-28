
<!--Sidebar-->
<div class="grid-3 pull-left">
<div class="sidebar">

<!--Categori / Merek-->
<div class="sidebar-menu">
<h4>Kategori Produk</h4>
<div class="sidebar-mobile-menu">

<div class="menu-kategori-container">
	<ul id="menu-kategori" class="kategori-menu">
<?php
while ($data_kategori = mysqli_fetch_array($statment2)) {
?>
		<li id="menu-item-143" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-143">
			<a href="index.php?page=kategori&k=<?php echo $data_kategori['link_kategori'] ?>"><?php echo $data_kategori['nama_kategori'] ?></a>
		</li>
<?php
}
?>
	</ul>
</div> 

</div>
</div>
<!--###########################################-->
<div class="sidebar-menu">
<h4>Merek Produk</h4>
<div class="sidebar-mobile-menu">

<div class="menu-kategori-container">
	<ul id="menu-kategori" class="kategori-menu">
<?php
while ($data_merek = mysqli_fetch_array($statment3)) {
?>
		<li id="menu-item-143" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-143">
			<a href="index.php?page=merek&m=<?php echo $data_merek['link_merek'] ?>"><?php echo $data_merek['nama_merek'] ?></a>
		</li>
<?php
}
?>
	</ul>
</div> 

</div>
</div>
<!-- End Categori / Merek-->

<!--Contact-->
<div class="box">
<h4>Hubungi Kami</h4>
<div class="kontak">
<i class="icon-mobile"></i> #nomor_HP<br /><i class="icon-bbm"></i> #pin_BBM<br /><i class="icon-whatsapp"></i> #nomor_WA<br /><i class="icon-mail"></i> 
<a class="__cf_email__" href="http://www.cloudflare.com/email-protection" data-cfemail="20434f4c4c494e53605941484f4f0e434f4d">[email&nbsp;protected]</a><script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
/* ]]> */
</script><br /> </div>
</div>
<!--End Contact-->

<!--fANSPAGE Facebook-->
<div class="box">
<div class="fanpage">
	<h2>Untuk Fanspage</h2>
</div>
<div style="clear: both"></div>
</div>
<!-- End fANSPAGE Facebook-->

<!--Cek Resi-->
<div class="box"><h4>RESI</h4> <div class="textwidget"><a title="resisophie" href="index2.php?p=resi" target="_blank"><img src="wp-content/uploads/page/resi.jpg" /></a></div>
</div>
<!-- End Cek Resi-->

<!--Pengiriman-->
<div class="box"><h4>Pengiriman</h4>  
	<div class="textwidget">
		<img src="wp-content/uploads/page/pengiriman.jpg" />
	</div>
</div> 
<!--End Pengiriman-->

<!--Transfer-->
<div class="box">
<h4>Rekening Bank</h4>
<div class="bca"></div> 
<div class="mandiri"></div> 
<div class="bni"></div> 
<div class="bri"></div> 
<div class="cimb"></div> 
<div style="clear: both"></div>
</div>
<!--Transfer-->
</div>
</div>
</div>
<!--End Sidebar-->
