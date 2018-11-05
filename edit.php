<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="film[]" value="Horor">Horor
			<input type="checkbox" name="film[]" value="Action">Action
			<input type="checkbox" name="film[]" value="Anime">Anime
			<input type="checkbox" name="film[]" value="Thriller">Thriller
			<input type="checkbox" name="film[]" value="Animasi">Animasi
		</td>
	</tr>
	<tr>
		<td>Tempat Wisata Travelling</td>
		<td>
			<input type="checkbox" name="travelling[]" value="Bali">Bali
			<input type="checkbox" name="travelling[]" value="Raja Ampat">Raja Ampat
			<input type="checkbox" name="travelling[]" value="Pulau Derawan">Pulau Derawan
			<input type="checkbox" name="travelling[]" value="Bangka Belitung">Bangka Belitung
			<input type="checkbox" name="travelling[]" value="Labuan Bajo">Labuan Bajo
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
