<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// $hari = "Senin"; 
// $hari2 = "Selasa";


// membuat array
// cara lama
//$hari = array("Senin", "Selasa", "Rabu");

// cara baru
//$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];
// print_r($arr1);

// menampilkan array
// echo tidak bisa mencetak array
// yang digunakan var_dump() atau print_r()
//print_r($bulan);
//var_dump($bulan);
//echo "<br>";
//print_r($bulan);
//echo "<br>";


// menampilkan 1 elemen pada array
echo $arr1[2];
//echo "<br>";
//echo $bulan[1];


// menambahkan elemen baru pada array
// print_r($hari);
// echo "<br>";
// $hari[] = "Kamis";
// print_r($hari);
$arr1[] = 0.75;
print_r($arr1);
echo $arr1[3];
var_dump($arr1);

?>