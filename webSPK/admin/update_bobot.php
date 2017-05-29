<?php

include "../include/connect.php"; //sambungkan ke database

$nim = $_GET['nik'];//mengambil nim dari addressbar

//query untuk mengambil data dari table input_data_mhs
$query = mysql_query("SELECT * FROM kriteria WHERE id_kriteria = '$nim' ");
$mhs = mysql_fetch_array($query);//memecah hasil query ke dalam array
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
#kiri{height:1000px;background-color:#CCCCCC;margin-top:0px}
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
<font size="5" color="white">Selamat Datang Di Web Seleksi Kinerja Karyawan</font><bR><br></center>
<hr color="maroon">
<center><font size="5" color="black">Update Data Mahasiswa<br></font></center>
<form name="postform" action="update2_bobot.php" method="post">
	<fieldset>
		<legend>Input Nama Karyawan</legend>
		<table>
			<input type="hidden" name="id_kriteria" value="<?php echo $mhs['id_kriteria']?>">
				<tr>	
					<td>
						No
					</td>
					<td>
					<input type='text' name='id_kriteria' size='10' value="<?php echo $mhs['id_kriteria']?>" disabled="disabled">
					</td>
				</tr>
				<tr>	
					<td>
						Nama Kriteria
					</td>
					<td>
					<input type='text' name='nm_kriteria' size='30' value="<?php echo $mhs['nama_kriteria']?>">
					</td>
				</tr>
				<tr>	
					<td>
						Bobot
					</td>
					<td>
					<input type='text' name='bobot' size='10' value="<?php echo $mhs['bobot']?>">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Save"> <input type="reset" value="Ulang">
					</td>
				</tr>
		</table>
	</fieldset>
</form>
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