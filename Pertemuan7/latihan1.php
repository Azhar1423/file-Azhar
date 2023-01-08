<?php 
  // variabel scope / lingkup variabel
  // $x = 10; // $x merupakan variabel global untuk 1 file saja
  // echo $x;
  // function tampilX(){
  //   $x; // $x adalah variabel untuk function tampilX() saja
  //   echo $x;
  // }

  // tampilX();

  // SUPERGLOBALS
  // variabel global milik PHP, dapat diakses didalam php
  // $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
  // seluruhnya merupakan Array Associative
  // var_dump($_SERVER); // informasi mengenai server
  // echo $_SERVER["SERVER_NAME"];

  // metode request GET dan POST

  // $_GET
  // $_GET["nama"] = "Adam";
  // $_GET["nim"] = "0708078505";

  $mahasiswa = [
    [
      "nama" => "Adam",
      "nim" => "0708078505",
      "email" => "adam@gmail.com",
      "jurusan" => "PTI"
    ],
    [
      "nama" => "Fahmi",
      "nim" => "019732927",
      "email" => "fahmi@gmail.com",
      "jurusan" => "PTI"
    ],
    [
      "nama" => "Angan",
      "nim" => "9103472903",
      "email" => "agan@gmail.com",
      "jurusan" => "PTI"
    ],
    [
      "nama" => "Saidah",
      "nim" => "763893047",
      "email" => "saidah@gmail.com",
      "jurusan" => "PTI"
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array Asosiatif</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
      <li><a href="latihan2.php?nama=<?= $mhs["nama"]?>&nim=<?= $mhs["nim"]?>&jurusan=<?= $mhs["jurusan"]?>&email=<?= $mhs["email"]?>"><?= $mhs["nama"]; ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
 
</body>
</html>