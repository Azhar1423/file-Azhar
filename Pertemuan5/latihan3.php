<?php 
// array multidimensi
// array di dalam array
  $mahasiswa = [
  ["Adam Bachtiar", "0708078505", "PTI", "adambachtiar@undikma.ac.id"],
  ["Citra", "0708078505", "PTI", "citrra@undikma.ac.id"],
  ["0708078505", "Adam Bachtiar", "PTI", "adambachtiar@undikma.ac.id"]
];

// echo $mahasiswa[2][0];
// echo $mahasiswa[2][1];
// echo $mahasiswa[2][2];
// echo $mahasiswa[2][3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan 3</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM :<?= $mhs[1]; ?></li>
      <li>Jurusan :<?= $mhs[2]; ?></li>
      <li>Email: <?= $mhs[3]; ?></li>
      <br>
    <?php endforeach; ?>
  </ul>
</body>
</html>