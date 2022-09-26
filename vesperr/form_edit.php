<?php 
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
header('Location: index.php');
}
//ambil id dari query string
$id = $_GET['nim'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim='$id'";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Mahasiswa</title>
</head>
<body>
	<header>
		<h3>Formulir Edit</h3>
	</header>
	
	<form action="proses_edit.php" method="POST">
		<fieldset>

			<input type="hidden" name="nim" value="<?php echo $siswa['nim'] ?>" />
		<p>
			<label for="nim">Nim: </label>
			<input type="number" name="nim" placeholder="Nim" 
value="<?php echo $siswa['nim'] ?>" />
		<p>
			<label for="nama_lengkap">Nama: </label>
			<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" 
value="<?php echo $siswa['nama_lengkap'] ?>" />
		</p>
		<p>
			<label for="tempat_lahir">Tempat Lahir: </label>
			<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" 
value="<?php echo $siswa['tempat_lahir'] ?>" />
		</p>
		<p>
			<label for="tanggal_lahir">Tanggal Lahir: </label>
			<input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" 
value="<?php echo $siswa['tanggal_lahir'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label for="jurusan">Jurusan: </label>
			<input type="text" name="jurusan" placeholder="Jurusan" 
value="<?php echo $siswa['jurusan'] ?>" />
		<p>
			<label for="no_hp">No Hp: </label>
			<input type="number" name="no_hp" placeholder="No Hp" 
value="<?php echo $siswa['no_hp'] ?>" />
		<p>
			<label for="email">Email: </label>
			<input type="email" name="email" placeholder="Email"
value="<?php echo $siswa['email'] ?>" />
		</p>
		<p>
			<input type="submit" value="simpan" name="simpan" />
		</p>

		</fieldset>

	</form>

	</body>

</html