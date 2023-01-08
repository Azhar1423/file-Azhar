<?php 
// koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "db_mhs");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  // cek data dari form   
  //var_dump($_POST);

  // ambil data dari setiap elemen dalam form
  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $jurusan = $_POST["jurusan"];
  $gambar = $_POST["gambar"];

  // query insert data
  $query = "INSERT INTO mahasiswa
            VALUES
            ('','$nama', '$nim', '$email', '$jurusan', '$gambar')
            ";
  mysqli_query($conn, $query);

  // cek apakah data berhasil ditambahkan atau tidak
  //var_dump(mysqli_affected_rows($conn));
  
  if( mysqli_affected_rows($conn) > 0 ) {
    echo "Data Berhasil ditambahkan";
  } else {
    echo "Data Gagal Ditambahkan";
    echo "<br>";
    echo mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  
</head>
<body>
  
  <h1>Tambah Data Mahasiswa</h1>

  <form action="" method="post">

    <ul>
      <li>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required>
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">Photo :</label>
        <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Simpan</button>
      </li>
    </ul>

  </form>

  <a href="index.php">Kembali..</a>
  

</body>
</html>