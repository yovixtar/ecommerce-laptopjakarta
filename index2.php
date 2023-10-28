<?php session_start(); 
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
};
?>
<!DOCTYPE html>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mirrored from www.sophiemartinindonesia.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 08:40:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78415837-1', 'auto');
  ga('send', 'pageview');

</script>
<title>Laptop Jakarta | Rumahnya Laptop</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="xmlrpc.php" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/www.sophiemartinindonesia.com\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='vcss-css' href='wp-content/themes/WP-Laris/css/v-css.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='wp-content/css/w3.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='wp-content/themes/WP-Laris/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='wp-content/css/my.css' type='text/css' />

<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />

<meta name="description" content="Penjelasan Web" />
<meta name="keywords" content="keywords produk, apa aja" />
<link rel="canonical" href="index.html" />

<script type="text/javascript">
        var templateDirectory = "wp-content/themes/WP-Laris/index.html";
        var popup_act = "0";
        </script>
<style type="text/css">
body{margin:0px auto;padding:0px;
}
a, h1, h2, h3, h4  {color:#3385ff;}
.vtr-menu  li.active > a,.vtr-menu  li.active,
.vtr-menu  li:hover > a {background-color: #3385ff;}
.wp-pagenavi a:hover{color:#FFFFFF;background-color:#3385ff;}
.current{color:#FFFFFF;background-color:#3385ff;}
.cart i.icon-basket {color:#fff;}
#virtacart th{background-color: #3385ff;}
.cart a{color:#3385ff;}
.btn a{color: #FFF;}
.header {background-color: #3385ff;}
.btn-cart a{color: #fff;}
.btn-cart i a{color: #fff;}
#marquee {color: #3385ff;font-weight:bold;}
.search-button {background-color: #3385ff;}
.sidebar-menu-icon {background-color: #000;}
.sidebar h4{color: #3385ff; }
.sidebar .box ul li a:hover{ color: #3385ff; }
.wpbeli-harga{ color:#3385ff; }
.btn{ background-color: #3385ff; }
.btn:disabled {background: #666;} 
.btn-kiri{background-color: ; }
.btn-kanan{background-color: #3385ff; }
.button-widget-link{color:#3385ff;}
.telp-number{color:#3385ff;}
.tombol-sms{background-color:#3385ff;}
.tombol-email{background-color:;}
.vtr-title a{color: #3385ff;}
.vtr-menu-wrap {border-bottom-color: #3385ff;}
.cart1 a{color: #FFF;}

.input-data {
	border-bottom: 4px solid #1a75ff; 
	width: 30%;
	padding: 7px;
	border-top: none;
	border-left: none;
	border-right: none;
}
</style>

<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../connect.facebook.net/en_US/fbevents.js');
fbq('init', '472345553103791'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=472345553103791&amp;ev=PageView&amp;noscript=1"
/></noscript>

<script type="text/javascript" src="wp-content/js/dg.js"></script>
</head>
<body>
<div id="wrap">
<?php 
include "base/koneksi.php";

include "app/include/header.php"; 
?>
<div class="container">

<!--Content-->

<?php
$sw2=isset($_GET['p']) ? $_GET['p'] : null;
switch ($sw2) {
	case 'signin':
		include "app/page/signin.php";
		break;
		
	//Footer
	case 'pricelist':
		include "app/page/pricelist.php";
		break;
	//Footer
	case 'katalog':
		include "app/page/katalog.php";
		break;
		
	//order
	case 'order':
		include "app/page/order.php";
		break;
	//Keranjang
	case 'keranjang':
		include "app/page/keranjang.php";
		break;
		
	//Resi
	case 'resi':
		include "app/page/resi.php";
		break;
}
?>

<!--End Content-->

<?php
include "app/include/footer.php";
?>


</div>
<div class="footer">
<script type="text/javascript">
	/*Print*/
	function printDiv(printArea) {
	     var printContents = document.getElementById(printArea).innerHTML;
	     var originalContents = document.body.innerHTML;

	     document.body.innerHTML = printContents;

	     window.print();

	     document.body.innerHTML = originalContents;
	}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31095983-1', 'auto');
  ga('send', 'pageview');
</script><br />
Copyright &#169; 2017 <a href="index.php">Laptop Jakarta</a><br />

<div class="keatas">
<a href="#"><i class="icon-up-circled"></i></a>
</div>

<script type='text/javascript' src='wp-content/themes/WP-Laris/js/jquery.min.js' defer='defer'></script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js' defer='defer'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.sophiemartinindonesia.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/WP-Laris/js/jquery-migrate.js' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/WP-Laris/js/vjQuery.libs.js' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/WP-Laris/js/vjQuery.script.js' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/WP-Laris/includes/stores/js/virtacart.js' defer='defer'></script>
</div>
</div>
</div>
</div>
</body>
</html>