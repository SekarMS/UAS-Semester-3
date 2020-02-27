<?php
include('koneksiii.php');
//SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
//join dengan satuan dan kategori
$tampil_barang = mysqli_query($rumah,"select id_barang, nama_barang, t_kategori.nama, t_satuan.nama
							from barang  
							inner join t_kategori  on barang.id_barang=t_kategori.id_kategori
							inner join t_satuan  on barang.id_barang=t_satuan.id_satuan");
?>
<table border="1">
	<tr>
		<td>ID Barang</td>
		<td>Nama Barang</td>
		<td>Nama Kategori</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_barang))
		
		
			
	{ ?>
	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="menu.php">Menu Utama</a>
