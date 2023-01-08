<?php 
  // cek apakah tidak ada data di $_GET
  if( !isset($_GET["nama"]) || 
      !isset($_GET["nim"]) ||
      !isset($_GET["jurusan"]) ||
      !isset($_GET["email"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detail Mahasiswa</title>
</head>
<body>
  
  <ul>
    <li>Nama : <?= $_GET["nama"]; ?></li>
    <li>Nim : <?= $_GET["nim"]; ?></li>
    <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
    <li>Email : <?= $_GET["email"]; ?></li>
  </ul>

<a href="latihan1.php">Kembali...</a>
</body>
</html>