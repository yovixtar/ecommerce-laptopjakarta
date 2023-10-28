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
<link rel='stylesheet' id='style-css' href='wp-content/css/my.css' type='text/css' media='all' />

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
.cart1 a{color: #FFF;};

.error {color: #f00};
.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px};
.active{width:12px;height:12px;margin:0;background-color:#fff}
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


</head>
<body>
<div id="wrap">
<?php 
include "base/koneksi.php";
$query2 = "SELECT * FROM kategori";
$statment2 = mysqli_query($l,$query2);

$query3 = "SELECT * FROM merek";
$statment3 = mysqli_query($l,$query3);
include "app/include/header.php";
 
?>

<div class="container">

<!--Content-->

<?php
$sw=isset($_GET['page']) ? $_GET['page'] : null;
switch ($sw) {
	//Detail Produk
	case 'detailproduk':
		include "app/page/detail_produk.php";
		break;
	
	//Tag
	case 'tag':
		include "app/page/tag.php";
		break;

	//Navigasi
	case 'caraorder':
		include "app/page/cara_order.php";
		break;
	case 'newsletter':
		include "app/page/newsletter.php";
		break;
	case 'kontak':
		include "app/page/kontak.php";
		break;
	case 'testimonial':
		include "app/page/testimonial.php";
		break;

	//Kategori
	case 'kategori':
		include "app/page/kategori.php";
		break;

	//Merek
	case 'merek':
		include "app/page/merek.php";
		break;
		
	case 'search':
		include "app/page/search.php";
		break;
		
	case 'profile':
		include "app/page/profile.php";
		break;
	case 'signup':
		include "app/page/signup.php";
		break;
	case 'signin':
		include "app/fungsi/signin.php";
		break;
	case 'logout':
		include "app/fungsi/logout.php";
		break;
		
	//Beli Produk
	case 'beli':
		include "app/page/beli.php";
		break;
	case 'hapuskeranjang':
		include "app/fungsi/hapus_keranjang.php";
		break;
	case 'belikeranjang':
		include "app/fungsi/beli_keranjang.php";
		break;
		
	case 'gantijumlah':
		include "app/fungsi/ganti_jumlah.php";
		break;
		
	default:
		include "home.php";
		break;
}

?>

<!--End Content-->

<?php
include "app/include/sidebar.php";

include "app/include/footer.php";
?>



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

</body>

<!-- Mirrored from www.sophiemartinindonesia.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 08:41:55 GMT -->
</html>