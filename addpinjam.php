<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $nama = $_POST['nama'];
  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO peminjaman VALUES ('', '$judul', '$nama,')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data peminjaman berhasil ditambahkan'); 
	window.location.href='peminjaman.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data peminjaman gagal ditambahkan');
	window.location.href='peminjaman.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: peminjaman.php');
}