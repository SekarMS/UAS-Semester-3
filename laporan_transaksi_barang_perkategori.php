<?php
include('koneksiii.php');
$tampil_barang = mysqli_query($rumah,"select br.kategori_id, br.nama_barang, stn.nama_satuan, qty, harga, qty*harga as total 
from t_transaksi as tr
inner join barang as br 
on tr.id_transaksi=br.id_barang 
inner join t_satuan as stn 
on br.id_barang=stn.id_satuan
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
<?php while($data = mysqli_fetch_array($rumah,$tampil_barang)) { ?>
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
