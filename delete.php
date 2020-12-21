<?php
require_once 'koneksi.php';
// cek id
if (isset($_GET['id'])) {
  $nim = $_GET['id'];

  // perintah hapus data berdasarkan id yang dikirimkan
  $q = $conn->query("DELETE FROM mahasiswa WHERE NIM = '$nim'");

  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='mahasiswa.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='mahasiswa.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:mahasiswa.php');
}