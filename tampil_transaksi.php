<?php
include('koneksiii.php');
$tampil_barang = mysqli_query($rumah,"select barang.kategori_id, barang.nama, t_satuan.nama, qty, harga, qty*harga as total 
from t_transaksi 
inner join barang  
on t_transaksi.id_transaksi=barang.id_barang 
inner join t_satuan 
on barang.id_barang=satuan.id_satuan
");
?>
<h1>Laporan Transaksi Barang Perkategori</h1>
<table border="1">
	<tr>
		<td>Kategori</td>
		<td>Nama</td>
		<td>Barang</td>
		<td>Quantity</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_barang)) { ?>
	<tr>
		<td><?php echo $data['kategori_id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="menu.php">Menu Utama</a>
