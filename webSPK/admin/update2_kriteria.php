<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form
$nim = $_POST['nik'];
$nama = $_POST['nama'];
$C1 = $_POST['K_intelektual'];
$C2 = $_POST['sikap_kerja'];
$C3 = $_POST['perilaku'];
$C4 = $_POST['loyalitas'];
$C5 = $_POST['prestasi'];
$C6 = $_POST['T_jawab'];



$query = mysql_query("UPDATE karyawan SET nama_karyawan = '$nama', C1 = '$C1', C2 = '$C2',C3 = '$C3',C4 = '$C4',C5 = '$C5',C6 = '$C6' WHERE nik = '$nim'");

if ($query){
//echo "sukses";
?><script>document.location.href="nilai.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>
