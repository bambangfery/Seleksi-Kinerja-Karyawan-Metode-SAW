<?php
include "../include/connect.php"; //sambung ke mysql

//query untuk mengambil data dokter ke mysql
$hasil = mysql_query("SELECT * FROM karyawan");
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

 nav ul ul {
display: none;
}

nav ul li:hover > ul {
display: block;
}
nav ul {
background: maroon;
padding: 0;
list-style: none;
position: relative;
display: inline-table;
}
nav ul:after {
content: ""; clear: both; display: block;
}
nav ul li {
float: left;
}
nav ul li:hover {
background: maroon;
}
nav ul li:hover a {
color: maroon;
}

nav ul li a {
display: block;
color: white; text-decoration: none;
}
nav ul ul {
background: maroon;
position: absolute;
}
nav ul ul li {
float: none;
border-top: 1px solid #6b727c;
border-bottom: 1px solid #575f6a;
position: relative;
}
nav ul ul li a {
padding: 15px 40px;
color: #fff;
}
nav ul ul li a:hover {
background: #4b545f;
}

nav ul ul ul {
position: absolute; left: 100%; top:0;
}

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
                        SELEKSI KINERJA KARYAWAN DENGAN METODE SAW
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
		<a href="nilai.php"><font color="white"> &nbsp;&nbsp;Kriteria Penilaian </font></a></td> 
	<td width="15%"bgcolor="maroon">
		<nav>
			<ul><li><a href="penilaian.php"><font color="white"> &nbsp;&nbsp;Data Karyawan </font></a>
				<ul><li><a href="matrix.php"><font color="white"> &nbsp;&nbsp;Matrix </font></a></li>
					<li><a href="normalisasi.php"><font color="white"> &nbsp;&nbsp;Normalisasi </font></a></li>
					<li><a href="ranking.php"><font color="white"> &nbsp;&nbsp;Perankingan </font></a></li>
				</ul></li>
			</ul>
		</nav>	
	</td> 
	<td width="15%"bgcolor="maroon">
		<a href="input_data.php"><font color="white"> &nbsp;&nbsp;Input data</font></a></td> 
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
<font size="5" color="white">Selamat Datang Di Web Seleksi Kinerja Karyawan</font><bR><br></center>
<hr color="maroon"><center>
<table border="1" width="780" >

<tr height="50%" bgcolor="white">
<td width="10" scope="col"><font color="maroon"><b>NO</td>
<td width="90" scope="col"><font color="maroon"><b>NIK</td>
<td width="210" scope="col"><font color="maroon"><b>Nama</td>
<td width="120" scope="col"><font color="maroon"><b>Tanggal Lahir</td>
<td width="400" scope="col"><font color="maroon"><b>Alamat</td>
<td width="50" scope="col"><font color="maroon"><b>Jabatan</td>
<td width="150" scope="col"><font color="maroon"><b>Jenjang Pendidikan</td>
<td width="20" scope="col" colspan="2"><font color="maroon"><b>Opsi</b></td></font>
</tr>
<?php
$i=1;
$warna = "#CB54C";
while ($baris = mysql_fetch_array($hasil)){

echo "<tr bgcolor=$warna>";
echo "<td><font color='white'> $i </td>";
echo "<td>";
echo "<font color='white'>$baris[nik]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[nama_karyawan]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[tgl_lahir]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[alamat]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[jabatan]";
echo "</td>";
echo "<td>";
echo "<font color='white'>$baris[jenjang_pendidikan]";
echo "</td>";
echo "<td><a href='update_mhs.php?nim_mhs=$baris[nik]' title='update'><img src='update.png' border=0></a></td> ";?>
<td><a href=hapus_mhs.php?nim_mhs=<?php echo $baris['nik']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')" title='delete'><img src='hapus.jpg' border='0'></a></td></tr>
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