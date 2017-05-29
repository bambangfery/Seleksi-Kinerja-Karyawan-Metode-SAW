<?php 


$mysql_host = "localhost";
$mysql_database = "kinerja_pegawai";
$mysql_user = "root";
$mysql_password = "";
//sambungkan ke database
$koneksi=mysql_connect($mysql_host,$mysql_user,$mysql_password); 

//memilih database yang akan dipakai
mysql_select_db($mysql_database,$koneksi); 

if($koneksi){  //cek koneksi 
//echo "berhasil koneksi"; 
}else{ 
 echo "koneksi ke database mysql gagal"; 
} 

?>
