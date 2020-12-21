<?php

require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
   $tahun = $_POST['tahun'];
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE `buku` SET `Judul` = '$judul', `tahun` = '$tahun' WHERE `buku`.`id_buku` = $id;");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data buku berhasil diubah'); window.location.href='buku.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data buku gagal diubah'); window.location.href='buku.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: buku.php'); 
}