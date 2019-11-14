<?php
//connection database
include "connection.php";

//menangkap data yang dikirim dari form
$Merek = $_POST ['Merek'];
$Harga = $_POST ['Harga'];

//menginput data ke database
mysqli_query ($connection, "insert into t_barang values ('','$Merek','$Harga')");

?>


	<Form Method="POST" action=""><!---Form untuk kirim data ke DB-->
	<table border="1">
		<tr>
			<td>Nama Barang</td>
			<td><input name="Merek" type="text"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="Harga" type="number"></td>
		</tr>
		<tr>
			<td><input name="Simpan" type="submit"></td>
		</tr>
	</table>
	</form>