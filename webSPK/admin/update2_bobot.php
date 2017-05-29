<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form
$no = $_POST['id_kriteria'];
$nama = $_POST['nm_kriteria'];
$bobot = $_POST['bobot'];




$query = mysql_query("UPDATE kriteria SET nama_kriteria = '$nama', bobot = '$bobot'  WHERE id_kriteria = '$no'");

if ($query){
//echo "sukses";
?><script>document.location.href="nilai.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>
