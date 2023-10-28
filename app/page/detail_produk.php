<?php
$statawal = mysqli_query($l , "UPDATE produk set dilihat=dilihat+1 where id_produk=".$_GET['idx']." ");
$q2 = "SELECT * FROM produk inner join kategori on produk.kategori=kategori.id_kategori inner join merek on produk.merek=merek.id_merek where id_produk=".$_GET['idx']." ";
$s2 = mysqli_query($l ,$q2) or die(mysqli_error($l));
$s3 = mysqli_query($l ,$q2) or die(mysqli_error($l));
$data_detail = mysqli_fetch_array($s2);

?>
<div class="grid-9 pull-right">
<div class="breadcrumbs">
	<div xmlns:v="http://rdf.data-vocabulary.org/#">
		<span typeof="v:Breadcrumb">
			<a rel="v:url" property="v:title" href="index.php">Home</a>
		</span>
		<i class="icon-angle-right"></i>
		<span typeof="v:Breadcrumb">
			<a rel="v:url" property="v:title" href="index.php?page=kategori&k=<?php echo $data_detail['link_kategori'] ?>" title="<?php echo $data_detail['nama_kategori'] ?>"><?php echo $data_detail['nama_kategori'] ?></a>
		</span>
		<i class="icon-angle-right"></i>
	<?php echo $data_detail['nama_produk'] ?>
	</div>
</div> 
<h1><a href="#" title="<?php echo $data_detail['nama_produk'] ?>"><?php echo $data_detail['nama_produk'] ?></a></h1>

<div class="nest">
<div class="grid-6">

<div class="photo">
<div class="photo-frame">
		<?php
		if ($data_detail['best_seller'] == 1) {
		?>
			<div class="ribbon best"><span>Best Seller</span></div>
		<?php
		}else{};
		?>
<a href="app/foto/<?php echo $data_detail['foto'] ?>" class="test-popup-link" data-title="<?php echo $data_detail['nama_produk'] ?>">
	<img src="app/foto/<?php echo $data_detail['foto'] ?>" alt="<?php echo $data_detail['nama_produk'] ?>" width="340" height="265" />
</a>
<div class="photo-slider">
	<ul id="small-slider" class="content-small">
	</ul>
</div>
</div>
</div>

<div class="share-buttons">
	<a class="twitter" title="Share on Twitter" href="#" target="_blank" rel="nofollow"><i class="icon-twitter-squared"></i> Twitter</a>
	<a class="facebook" title="Share on Facebook" href="#" target="_blank" rel="nofollow"><i class="icon-facebook-squared"></i> Facebook</a>
	<a class="googleplus" title="Share on Google+" href="#" target="_blank" rel="nofollow"><i class="icon-gplus-squared"></i> Google+</a>
</div>
</div>


<div class="grid-6">
<table class="vtr-table w3-bordered w3-card-8">
	<tr>
		<td>Kategori</td><td><a href="index.php?page=kategori&k=<?php echo $data_detail['link_kategori'] ?>"><?php echo $data_detail['nama_kategori'] ?></a> </td>
	</tr>
	<tr>
		<td>Kode</td><td><?php echo $data_detail['kode'] ?></td>
	</tr>
	<tr>
		<td>Dilihat</td><td><?php echo $data_detail['dilihat'] ?></td>
	</tr>
	<tr>
		<td>Harga </td><td>Rp <?php echo number_format($data_detail['harga']) ?> 
		<span class="coret"></span></td>
	</tr>
</table>

<a class="btn btn-single" href="index.php?page=beli&id=<?php echo $_GET['idx'] ?>" title="<?php echo $data_detail['nama_produk'] ?>" target="_blank">Beli Sekarang <i class="glyphicon glyphicon-plus"></i></a>
</div>

<div class="vtr-title"><h2>Detail Produk <?php echo $data_detail['nama_produk'] ?></h2></div>

<div class="post">
	
<?php echo $data_detail['detail'] ?>

<p>&nbsp;</p>

<div class="tags">tags: 
	<a href="#" rel="tag"><?php echo $data_detail['nama_produk'] ?></a>,
	<a href="index.php?page=merek&m=<?php echo $data_detail['link_merek'] ?>" rel="tag">Laptop <?php echo $data_detail['nama_merek'] ?></a>,
	 <?php
	 $s4 = mysqli_query($l, "SELECT * from tag_produk join tag on tag_produk.id_tag_tag_produk=tag.id_tag join produk on tag_produk.id_produk_tag_produk=produk.id_produk where id_produk_tag_produk=".$_GET['idx']." ");
	 while ( $data_detail1 = mysqli_fetch_array($s4)) {
	 
	 ?>
	<a href="index.php?page=tag&key=<?php echo $data_detail1['link_tag'] ?>" rel="tag"><?php echo $data_detail1['nama_tag'] ?></a>,
	<?php } ?>
</div>
</div>
</div>
</div>