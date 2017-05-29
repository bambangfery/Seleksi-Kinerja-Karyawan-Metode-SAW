<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form
$nim = $_POST['nik'];
$nama = $_POST['nama'];
$kelas = $_POST['tgl'];
$absen = $_POST['alamat'];
$tugas = $_POST['jabatan'];
$uts = $_POST['pendidikan'];
$C1 = $_POST['K_intelektual'];
$C2 = $_POST['sikap_kerja'];
$C3 = $_POST['perilaku'];
$C4 = $_POST['loyalitas'];
$C5 = $_POST['prestasi'];
$C6 = $_POST['T_jawab'];



$query = mysql_query("INSERT INTO karyawan (nik, nama_karyawan, tgl_lahir, alamat, jabatan, jenjang_pendidikan, C1, C2, C3, C4, C5, C6)
VALUES('$nim', '$nama', '$kelas', '$absen', '$tugas', '$uts','$C1','$C2','$C3','$C4','$C5','$C6')");

if ($query){
//echo "sukses";
?><script>document.location.href="penilaian.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>
