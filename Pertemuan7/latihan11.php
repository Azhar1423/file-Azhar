<?php 
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

//var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
      <li>
        <a href="latihan22.php?nama=<?=$mhs["nama"]?>&nim=<?=$mhs["nim"]?>&jurusan=<?=$mhs["jurusan"]?>&email=<?=$mhs["email"]?>"><?= $mhs["nama"]; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>