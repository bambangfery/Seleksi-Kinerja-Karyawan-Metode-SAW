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
#kiri{height:400px;background-color:#CCCCCC;float:left;width:200px;margin-top:0px}
#kanan { height:400px; background-color:#CCCCCC;float:right;width:200px; margin-top:0px; }
#tengah { height:400px;background-color:#CCCCCC;padding-left:50px;padding-right:50px;margin:0px 180px 0px 180px;}
#footer {height:20px; background-color:maroon; }
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
		</nav>		<td width="15%"bgcolor="maroon">
		<a href="input_data.php"><font color="white"> &nbsp;&nbsp;Input data</font></a></td> 
	<td width="15%"bgcolor="maroon">
		<font color="white"> &nbsp;&nbsp;</font></td> 
	<td width="95%"bgcolor="maroon"></td>
	<td width="5%"bgcolor="maroon"></td>
	</tr>
</table>


<div id="h1"><font face="arial black" size="3">
 <center>Welcome  </center></font>
</div>


<div id="kiri">
<table border=0 cellspacing=0>
									<tr>
									<td width="10%" bgcolor="maroon" align="center"><font color="white" size="3">Kampus</font></td>
									</tr>
									<tr>
									<td>
									<img src="kampus.jpg" width="200" height="150">
									</td>
									</tr>
									
</table>
</div>

<div id="kanan">
<form align="center" action="">
					<table border=0 cellspacing=0>
									<tr>
									<td width="10%" bgcolor="maroon" align="center"><font color="white" size="3">Akun</font></td>
									</tr>
									<tr>
									<td>
									
										
									<font color="white" size="3">
									Selamat datang<br>
									<br>
									<hr color="maroon">									
									<hr color="maroon">
									</font>
									
									</td>
									</tr>
									</table>
</form>
</div>

<div id="tengah">
<center>
<font size="5" color="white">Sistem Seleksi Kinerja Karyawan</font><bR><br></center>
<hr color="maroon"><center>
<img src="logo_unpam.jpg" width="150" height="150"></center>
<p class=a><center>Web ini digunakan untuk seleksi kinerja karyawan pada UNVERSITAS PAMULANG 
mengunakan metode SAW. Cara menggunakan web ini adalah pertama masukkan data yang akan di seleksi,lalu lihat pada form data karyawan lalu cek data yang sudah diinputan sudah masuk
atau belum. Lalu masuk ke kreiteria penilaian  lalu klik link martrix jika sudah masuk ke link normalisasi lalu masuk ke proses terakhir yaitu perankingan.</center><br></p>

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