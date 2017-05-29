<?php
include "../include/connect.php";//sambung ke mysql

$nim = $_GET['nim_mhs'];//mengambil nim dari address bar

//query untuk menghapus data
$query_hapus = mysql_query("DELETE FROM karyawan WHERE nik = '$nim'");

if ($query_hapus){//jika berhasil
//echo "nim Berhasil dihapus";
?><script>document.location.href="penilaian.php"</script><?php
}else{//jika  gagal menghapus
echo "Gagal : ".mysql_error();
}
?>
