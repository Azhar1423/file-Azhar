<?php 
// array multidimensi
// array di dalam array

$mahasiswa = [
  ["Adam", "0708078505", "PTI", "adam@gmail.com"],
  ["Fahmi", "010120202", "PTI", "fahmi@gmail.com"],
  ["Angan", "09897648", "PTI", "angan@gmail.com"],
  ["098765467", "Saidah", "PTI","saidah@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan Array Mulitdimesi</title>
</head>
<body>
  <h1>Daftar Biodata Mahasiswa</h1>

  <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM : <?= $mhs[1]; ?></li>
      <li>Jurusan : <?= $mhs[2]; ?></li>
      <li>Email : <?= $mhs[3];  ?></li>
      <br>
    <?php endforeach; ?>
  </ul>
</body>
</html>