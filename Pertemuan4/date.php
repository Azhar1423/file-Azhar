<?php 
  // Date
  // Menampilkan tanggal dengan format tertentu
  // echo date("l, d-M-Y");

  // Time
  // UNIX Timestamp / EPOCH time
  // detik yang sudah berlalu sejak 1 Januari 1970
  //echo time();
  //echo date("l d M y", time()-60*60*24*1000);
  
  // mktime
  // membuat sendiri detik dari 1 Januari 1970 sampai waktu yang diinginkan
  //mktime(0,0,0,0,0,0)
  // jam, menit, detik, bulan, tanggal, tahun
  //echo mktime(0,0,0,7,8,1985);
 //echo date("l d M Y", mktime(0,0,0,7,8,1985));

  // strtotime
  $date = strtotime("8 jul 1985");
  echo date("l d M Y", strtotime("8 jul 1985"));
?>