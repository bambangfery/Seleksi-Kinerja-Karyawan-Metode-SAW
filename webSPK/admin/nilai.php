<?php
include "../include/connect.php"; //sambung ke mysql

//query untuk mengambil data dokter ke mysql
$hasil = mysql_query("SELECT * FROM kriteria ");
$hasil2 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
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
				<legend>Kriteria Penilaian</legend>
				<table width='280'>
				<tr>
					<td width='10'>No</td>
					<td width='200'>Nama</td>
					<td width='10'>Bobot</td>
				</tr>
					<?php
						$i=1;
						while ($baris = mysql_fetch_array($hasil)){
						echo"<tr>
								<tD>$baris[id_kriteria]</td>
								<tD>$baris[nama_kriteria] (C$i)</td>
								<tD>$baris[bobot]</td>
							</tr>";
						$i++;
						}
					?>
				</table>
			</fieldset>
			</form>
		</td>
		<td>
		<form action='isi_mhs.php' method='post'>
			<fieldset>
				<legend> Tingkat Kepentingan</legend>
					0.1 = Rendah<bR>
					0.14 = Cukup<bR>
					0.19 = Tinggi<bR>
					0.24 = Sangat Tinggi<bR>
			</fieldset>
		</form>
		</td>
		<td>
		<form action='isi_mhs.php' method='post'>
			<fieldset>
				<legend> Rating Kecocokan</legend>
					1 = Sangat Rendah<bR>
					2 = Rendah<bR>
					3 = Cukup<bR>
					4 = Tinggi<bR>
					5 = Sangat Tinggi<bR>
			</fieldset>
		</form>
		</td>
	</tr>
	<tr>
		<td colspan=2>
		<form action='isi_mhs.php' method='post'>
			<fieldset>
				<legend> Tabel Kecocokan</legend>
				<table width='500'>
				<tr>
					<td width='10'>No</td>
					<td width='200'>Nama</td>
					<td width='20'>C1&nbsp;</td>
					<td width='20'>C2&nbsp;</td>
					<td width='20'>C3&nbsp;</td>
					<td width='20'>C4&nbsp;</td>
					<td width='20'>C5&nbsp;</td>
					<td width='20'>C6&nbsp;</td>			
				</tr>
				<?php
						$j=1;
						while ($baris2 = mysql_fetch_array($hasil2)){
						echo"<tr>
								<tD>$j</td>
								<tD>$baris2[nama_karyawan](Alt $j)</td>
								<td>$baris2[C1]</td>
								<td>$baris2[C2]</td>
								<td>$baris2[C3]</td>
								<td>$baris2[C4]</td>
								<td>$baris2[C5]</td>
								<td>$baris2[C6]</td>
								<td><a href='update_kriteria.php?nik=$baris2[nik]'>ubah</a></td>
							</tr>";
							$j++;
						}
				?>
				</table>
			</fieldset>
		</form>
		</td>
	</tr>
</table>



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