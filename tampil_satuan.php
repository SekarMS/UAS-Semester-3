<?php
include('koneksiii.php');
$tampil_satuan = mysqli_query($rumah,"select * from t_satuan");
?>
<table border="1">
	<tr>
		<td>ID Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_satuan)) { ?>
	<tr>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="menu.php">Menu Utama</a>