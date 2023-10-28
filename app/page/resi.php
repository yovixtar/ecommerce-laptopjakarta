<div class="grid-12">
	<div class="breadcrumbs">
		<div xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a rel="v:url" property="v:title" href="index.php">Home</a>
			</span>
			<i class="icon-angle-right"></i>
		Resi
		</div>
	</div>

<h1><a href="#" title="pricelist">Resi</a>
<div class="w3-bar">
	<button class="w3-item-bar btn pull-right" name=print value="Print Pricelist" onClick="printDiv('printArea')">
		Print Resi
		<i class="icon-print"></i>
	</button> <font class="pull-right"> - </font>
	<a onclick="document.getElementById('resi').style.display = 'block'">
	<button class="w3-item-bar btn pull-right" >
		Cek Resi
	</button></a> 
</div>
</h1>

<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Resi / Nama.." class="input-data input-cari-sm"><br /><br />
<!--Tabel Pricelist-->
<div id="printArea">

<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama Pemesan</font></th>
		<th align="center"> <font size="4">Produk</font></th>
		<th align="center"> <font size="4">Alamat Pemesan</font></th>
		<th align="center"> <font size="4">Nomor Resi</font></th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM resi join pesanan on resi.id_order_resi=pesanan.id_order join produk on pesanan.id_produk_order=produk.id_produk";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['user_resi'] ?></td>
		<td><?php echo $d['nama_produk'] ?></td>
		<td><?php echo $d['alamat_resi'] ?></td>
		<td><?php echo $d['no_resi'] ?></td>

	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>
<br /><br />
</div>


<!--Modal Cek Resi-->
<div id="resi" class="w3-modal" style="z-index: 999999;">
    <div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container header"> 
        <a onclick="document.getElementById('resi').style.display = 'none' "><span class="w3-closebtn"><font size="7" color="red">&times;</font></span></a>
        <h2 style="color: #fff">Anda, Bisa membuka webnya :</h2>
      </header>
      <div class="" style="padding :20px;">
        <table>
        	<tr>
        		<td>POS Indonesia</td>
        		<td><a href="#">: Link </a></td>
        	</tr>
        </table>
      </div>
    </div>
  </div>