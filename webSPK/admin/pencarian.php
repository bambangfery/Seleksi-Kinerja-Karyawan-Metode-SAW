<?php
include "../include/connect.php";

$nim_cari = $_GET['nim_cari'];

//query untuk mengambil data dari table input_data_mhs
$hasil = mysql_query("SELECT * FROM input_data_mhs WHERE nim  like '%$nim_cari%' ");
?>
<html>
<head>
<title>Penilaian Mahasiswa</title>
<style type="text/css">
body
{
	background-image:url(yupi.jpg);
	background-attachment:fixed;
	margin-left:115px;
	margin-right:115px;

}

#halaman{width=1000px margin:0px auto; font-size:10pt}
#header{height:150px;background-color:#eeeeee; margin:0px auto}
#kiri{min-height:400px;height:auto;background-color:#CCCCCC;margin-top:0px}
#footer {height:20px; background-color:maroon;}
#h1{background-color:white; font-size:20pt}


h2{
margin-bottom:0px; margin-top:0px;
}

h1{
margin-bottom:0px; margin-top:0px;
}

h4{
margin-bottom:0px; margin-top:0px;
}

ul.a
{ list-style-type : circle; }
ul.b
{ list-style-type : square; }
p.a
{ text-indent:20px;} 

a
{text-decoration : none ;} /*menghilangkan garis bawah*/
</style>
</head>
<body>
<div id="halaman">
	<div id="header">
	 <center>
        <table>   
            <tr>
                <td colspan="2" align="center">
                    <br>
                    <h2>
                        Informasi Nilai Mahasiswa
                    </h2>
                    <h1>
                        UNIVERSITAS PAMULANG
                    </h1>
                    <h4>
                        Jl. Surya Kencana No. 1 Pamulang, Tangerang Selatan, Banten
                    </h4>
                    <br>
                </td>
            </tr>
		</table>
	</center>	
	</div>
<table border=0 cellspacing=0>
	<tr>
	<td width="25%" bgcolor="maroon"></td>
	<td width="15%"bgcolor="maroon">
		<a href="index.php"><font color="white"> &nbsp;&nbsp;Home </font></a></td> 
	<td width="15%"bgcolor="maroon">
		<a href="nilai.php"><font color="white"> &nbsp;&nbsp;Lihat Nilai </font></a></td> 
	<td width="15%"bgcolor="maroon">
		<a href="penilaian.php"><font color="white"> &nbsp;&nbsp;Penilaian </font></a></td> 
	<td width="15%"bgcolor="maroon">
		<a href="tamplate.html"><font color="white"> &nbsp;&nbsp;Input Data</font></a></td> 
	<td width="15%"bgcolor="maroon">
		<font color="white"> &nbsp;&nbsp;</font></td> 
	<td width="95%"bgcolor="maroon"></td>
	<td width="5%"bgcolor="maroon"></td>
	</tr>
</table>


<div id="h1"><font face="arial black" size="3">
 <center>WEB DESIGN  </center></font>
</div>



<div id="kiri">
<center>
<font size="5" color="white">Selamat Datang Di Web Penilaian Praktikum Jaringan Komputer</font><bR><br></center>
<hr color="maroon">
<center><font size="5" color="maroon">Data Mahasiswa<br></font></center>
<center>
<table border=1 width=800>
<tr height="50%" bgcolor="white">
<td width="10" scope="col"><font color="maroon"><b>NO</td>
<td width="90" scope="col"><font color="maroon"><b>NIM</td>
<td width="210" scope="col"><font color="maroon"><b>Nama</td>
<td width="50" scope="col"><font color="maroon"><b>Kelas</td>
<td width="50" scope="col"><font color="maroon"><b>Absen</td>
<td width="50" scope="col"><font color="maroon"><b>Tugas</td>
<td width="50" scope="col"><font color="maroon"><b>UTS</td>
<td width="50" scope="col"><font color="maroon"><b>UAS</td>
<td width="50" scope="col"><font color="maroon"><b>Nilai Akhir</td>
<td width="50" scope="col"><font color="maroon"><b>Grade</b></td></font>
<td width="100" scope="col" colspan="2"><font color="maroon"><b>Opsi</b></td></font>
</tr>
<?php
$i=1;
$warna = "#CB54C";
while ($baris = mysql_fetch_array($hasil)){

echo "<tr bgcolor=$warna>";
echo "<td><font color='white'> $i </td>";
echo "<td>";
echo "<font color='white'>$baris[nim]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[nama]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[kelas]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[absen]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[tugas]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[uts]";
echo "</td>";
echo "<td><font color='white'> $baris[uas]
</td>";
echo "<td><font color='white'> $baris[nilai_akhir]
</td>";
echo "<td><font color='white'> $baris[grade]
</td>";
echo "<td><a href='update_mhs.php?nim_mhs=$baris[nim]' title='update'><img src=../icon/update.png border=0/></a></td> ";?>
<td><a href=hapus_mhs.php?nim_mhs=<?php echo $baris['nim']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')" title='delete'><img src='../icon/hapus.png' border='0'></a></td></tr>
<?php echo "</tr>";
$i++;

?>
<?php
}
?>
</table>
<br><br>
</center>
</div>


<div id="footer">
<center>
<font color="white">
&copy;Copyright Bambang Fery</font>
</center>
</div>
</div>
	
</body>
</html>