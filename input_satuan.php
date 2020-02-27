<?php
include("koneksiii.php");
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into t_satuan(id_satuan,nama) values
	('".$_POST['id_satuan']."',
	 '".$_POST['nama']."')";
	 $proses_data=mysqli_query($rumah,$query_tambah_data);
	 if ($proses_data){
		 echo ' Tambah data berhasil<br/>';
	 } else {
		 echo mysqli_error();
	 }
}	 
?>

<form method="POST" action="">
<table border="1">
	<tr>
		<td>Id Satuan </td>
		<td><input name="id_satuan" type="number"></td>
	</tr>
	<tr>
		<td> Nama </td>
		<td><input name="nama" type="text"></td>
	</tr>
	
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
 </form>