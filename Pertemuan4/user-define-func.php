<?php 
  function salam($waktu, $nama) {
    return "Selamat $waktu, $nama!";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan Function</title>
</head>
<body>
  <h1><?= salam("Siang", "Mahasiswa"); ?></h1>
  <!-- <h1>Selamat Pagi Administrator</h1> -->
</body>
</html>