<?php 
  // koneksi ke database
  $conn = mysqli_connect("localhost", "root", "", "db_20241009");

  // ambil data dari tabel mahasiswa (query)
  $result =  mysqli_query($conn, "SELECT * FROM mahasiswa");

  if( !$result ) {
    echo mysqli_error($conn);
  }  

  
  // ambil data (fetch) dari object result
  // empat cara fetch
  // mysqli_fetch_row() // mengembalikan array numerik
  //$mhs = mysqli_fetch_row($result);
  //var_dump($mhs);
  // mysqli_fetch_assoc() // mengembalikan array asosiatif
  //$mhs = mysqli_fetch_assoc($result);
  //var_dump($mhs);
  // mysqli_fetch_array()
  //$mhs = mysqli_fetch_array($result); // mengembalikan array assoiatif dan numerik
  //var_dump($mhs);
  // mysqli_fetch_object()
  //$mhs = mysqli_fetch_object($result); // mengembalikan object
  //var_dump($mhs);

  
  // while( $mhs = mysqli_fetch_assoc($result) ) {
  //   var_dump($mhs); 
  // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Admin</title>
</head>
<body>
  
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

  </table>


</body>
</html>