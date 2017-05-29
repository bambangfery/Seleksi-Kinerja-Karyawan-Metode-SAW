<?php
include "../include/connect.php"; //sambung ke mysql

//query untuk mengambil data dokter ke mysql
$bobot = mysql_query("SELECT *FROM kriteria ");
$R_kriteria1 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hR_kriteria1 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$max = mysql_query("SELECT * FROM karyawan order by V desc limit 1");
$max2 = mysql_query("SELECT * FROM karyawan order by V desc limit 1");




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

#halaman{width=1500px margin:0px auto; font-size:10pt}
#header{height:150px;background-color:#eeeeee; margin:0px auto}
#kiri{min-height:400px;height:auto;background-color:#CCCCCC;margin-top:0px;}
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

border {
    border-right-style: solid;
    border-left-style: solid;
}

p {
    border-right-style: solid;
    border-left-style: solid;
}

p2 {
    border-top-style: solid;
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

</center>

<table>
	<tr>
		<td>
			<form action='isi_mhs.php' method='post'>
				<fieldset>
				<legend> Proses Perankingan</legend>
					
					<?php
					while($h_bobot = mysql_fetch_array($bobot)){
						$bobot_a1[] = $h_bobot['bobot'];
					}
					while($hr_kriteria = mysql_fetch_array($hR_kriteria1)){
						$hasil_k = $bobot_a1[0]*$hr_kriteria['n_c1']+
								   $bobot_a1[1]*$hr_kriteria['n_c2']+
								   $bobot_a1[2]*$hr_kriteria['n_c3']+
								   $bobot_a1[3]*$hr_kriteria['n_c4']+
								   $bobot_a1[4]*$hr_kriteria['n_c5']+
								   $bobot_a1[5]*$hr_kriteria['n_c6'];
				
					$hasil_k2 = mysql_query("update karyawan set V = '$hasil_k' where nik ='$hr_kriteria[nik]'");
					}
					$j=1;
					while($r_kriteria1 = mysql_fetch_array($R_kriteria1)){
						
						echo "V<sub>$j</sub> = ($bobot_a1[0])($r_kriteria1[n_c1]) + 
											   ($bobot_a1[1])($r_kriteria1[n_c2]) +
											   ($bobot_a1[2])($r_kriteria1[n_c3]) +
											   ($bobot_a1[3])($r_kriteria1[n_c4]) +
											   ($bobot_a1[4])($r_kriteria1[n_c5]) + 
											   ($bobot_a1[5])($r_kriteria1[n_c6]) = $r_kriteria1[V]
											   <br>";
					$j++;
					}
					
					?>
			</fieldset>
			</form>
		</td>
	</tr>
</table>
<h2>
Setelah di hitung menggunakan metode saw dengan kriteria yang sudah ditentukan. Maka dapat diketahui nama karyawan dengan kinerja terbaik jatuh kepada
 <?php 
while($h_max = mysql_fetch_array($max) ){
echo "
$h_max[nama_karyawan] dengan nilai $h_max[V] ";

}
?>

<table border="1" width="780" >

<tr height="50%" bgcolor="white">
<td width="10" scope="col"><font color="maroon"><b>NO</td>
<td width="90" scope="col"><font color="maroon"><b>NIK</td>
<td width="210" scope="col"><font color="maroon"><b>Nama</td>
<td width="100" scope="col"><font color="maroon"><b>Tanggal Lahir</td>
<td width="400" scope="col"><font color="maroon"><b>Alamat</td>
<td width="50" scope="col"><font color="maroon"><b>Jabatan</td>
<td width="150" scope="col"><font color="maroon"><b>Jenjang Pendidikan</td>
<td width="20" scope="col" colspan="2"><font color="maroon"><b>Nilai</b></td></font>
</tr>
<?php
$i=1;
$warna = "#CB54C";
while ($baris = mysql_fetch_array($max2)){

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
echo "<td><font color='white'>$baris[V]</td></tr> ";?>
<?php
$i++;

?>
<?php
}
?>
</table>
</h2>
ket : Refresh page jika nilai tidak keluar
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