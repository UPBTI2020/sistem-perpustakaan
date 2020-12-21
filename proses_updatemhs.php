<?php

require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE mahasiswa SET NAMA_MAHASISWA = '$nama', ALAMAT = '$alamat', EMAIL = '$email' WHERE NIM = '$nim'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data mahasiswa berhasil diubah'); window.location.href='mahasiswa.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data mahasiswa gagal diubah'); window.location.href='mahasiswa.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mahasiswa.php'); 
}