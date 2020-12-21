<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$alamat,', '$email')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data mahasiswa berhasil ditambahkan'); 
	window.location.href='mahasiswa.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data mahasiswa gagal ditambahkan');
	window.location.href='mahasiswa.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}