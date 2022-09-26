<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['submit'])){
// ambil data dari formulir
 $nim = $_POST['nim'];
 $nama_lengkap = $_POST['nama_lengkap'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $alamat = $_POST['alamat'];
 $jurusan = $_POST['jurusan'];
 $no_hp = $_POST['no_hp'];
 $email = $_POST['email'];

// buat query
$sql = "INSERT INTO mahasiswa VALUE ('$nim', '$nama_lengkap', 'tempat_lahir', 'tanggal_lahir', '$alamat', '$jurusan', '$no_hp', '$email')";
$query = mysqli_query($koneksi, $sql);

// apakah query simpan berhasil?
if( $query ){
	
// kalau gagal alihkan ke halaman index.php dengan status=gagal
header('location: index.php?status=gagal');
}
} else {
die("Akses dilarang... ");
}
?>