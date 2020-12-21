<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $tahun = $_POST['tahun'];
  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO buku VALUES ('', '$judul', '$tahun,')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Buku berhasil ditambahkan'); 
	window.location.href='buku.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data buku gagal ditambahkan');
	window.location.href='buku.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: buku.php');
}