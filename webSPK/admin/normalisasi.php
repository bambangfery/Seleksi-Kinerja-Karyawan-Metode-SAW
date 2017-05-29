<?php
include "../include/connect.php"; //sambung ke mysql

//query untuk mengambil data dokter ke mysql
$hasil3 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil4 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc ");
$hasil5 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil6 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil7 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil8 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil9 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil10 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil11 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil12 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil13 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$hasil14 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");

$n_kriteria1 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$n_kriteria2 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$n_kriteria3 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$n_kriteria4 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$n_kriteria5 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$n_kriteria6 = mysql_query("SELECT * FROM karyawan order by nama_karyawan asc");
$max = mysql_query("SELECT ROUND(n_c1,2) from karyawan");

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

<table border=0>		
	<tr>
		<td>
			<form action='isi_mhs.php' method='post'>
				<fieldset>
				<legend> Normalisasi Matrix X</legend>
				<table border=0>
				<?php
					$i=1;
					$j=1;
					while ($baris2 = mysql_fetch_array($hasil3)){
					
						$data[]= $baris2['C1'];
						
						$implode = implode(";",$data);
						}
					$max = max($data);
					while ($baris3 = mysql_fetch_array($hasil4)){
						ECHO "<tr><td>r<sub><font size=1>$i$j</font></sub>
						=</td><td><center>$baris3[C1]</center><p2>max{ $implode "; 
						$hasil_n1 = $baris3['C1'] / $max;
						$n_matrix1 = mysql_query("update karyawan set n_c1 = '$hasil_n1' where nik ='$baris3[nik]'");
						echo "}</p2></td><td>=</td><td><center>$baris3[C1]</center><p2>$max</p2></td><td>=</td><td>";echo number_format($hasil_n1,4); echo "</td></tr>		
						";
						$i++;	
					}	
				?>
				<?php
					$i=1;
					$j=2;
					while ($baris4 = mysql_fetch_array($hasil5)){
					
						$data2[]= $baris4['C2'];
						
						$implode2 = implode(";",$data2);
						}
					$max2 = max($data2);
					while ($baris5 = mysql_fetch_array($hasil6)){
						ECHO "<tr><td>r<sub><font size=1>$i$j</font></sub>
						=</td><td><center>$baris5[C2]</center><p2>max{ $implode2 "; 
						$hasil_n2=$baris5['C2']/$max2;
						echo "}</p2></td><td>=</td><td><center>$baris5[C2]</center><p2>$max2</p2></td><td>=</td><td>";echo number_format($hasil_n2,4);echo "</td></tr>			
						";
						$i++;
						$n_matrix2 = mysql_query("update karyawan set n_c2 = '$hasil_n2' where nik ='$baris5[nik]'");
					}					
				?>
				</table>
				</fieldset>
			</form>
		</td>
		<td>
			<form action='isi_mhs.php' method='post'>
				<fieldset>
				<legend> Normalisasi Matrix X</legend>
				<table border=0>
				<?php
					$i=1;
					$j=3;
					while ($baris6 = mysql_fetch_array($hasil7)){
					
						$data3[]= $baris6['C3'];
						
						$implode3 = implode(";",$data3);
						}
					$max3 = max($data3);
					while ($baris7 = mysql_fetch_array($hasil8)){
						ECHO "<tr><td>r<sub><font size=1>$i$j</font></sub>
						=</td><td><center>$baris7[C3]</center><p2>max{ $implode3 "; 
						$hasil_n3=$baris7['C3']/$max3;
						echo "}</p2></td><td>=</td><td><center>$baris7[C3]</center><p2>$max3</p2></td><td>=</td><td>";echo number_format($hasil_n3,4);echo"</td></tr>			
						";
						$i++;
						$n_matrix3 = mysql_query("update karyawan set n_c3 = '$hasil_n3' where nik ='$baris7[nik]'");
					}					
				?>
				<?php
					$i=1;
					$j=4;
					while ($baris8 = mysql_fetch_array($hasil9)){
					
						$data4[]= $baris8['C4'];
						
						$implode4 = implode(";",$data4);
						}
					$max4 = max($data4);
					while ($baris9 = mysql_fetch_array($hasil10)){
						ECHO "<tr><td>r<sub><font size=1>$i$j</font></sub>
						=</td><td><center>$baris9[C4]</center><p2>max{ $implode4 "; 
						$hasil_n4=$baris9['C4']/$max4;
						echo "}</p2></td><td>=</td><td><center>$baris9[C4]</center><p2>$max4</p2></td><td>=</td><td>";echo number_format($hasil_n4,4);echo"</td></tr>			
						";
						$i++;	
						$n_matrix4 = mysql_query("update karyawan set n_c4 = '$hasil_n4' where nik ='$baris9[nik]'");
					}					
				?>
				</table>
				</fieldset>
			</form>
		</td>
		<td>
			<form action='isi_mhs.php' method='post'>
				<fieldset>
				<legend> Normalisasi Matrix X</legend>
				<table border=0>
				<?php
					$i=1;
					$j=5;
					while ($baris10 = mysql_fetch_array($hasil11)){
					
						$data5[]= $baris10['C5'];
						
						$implode5 = implode(";",$data5);
						}
					$max5 = max($data5);
					while ($baris11 = mysql_fetch_array($hasil12)){
						ECHO "<tr><td>r<sub><font size=1>$i$j</font></sub>
						=</td><td><center>$baris11[C5]</center><p2>max{ $implode5 "; 
						$hasil_n5=$baris11['C5']/$max5;
						echo "}</p2></td><td>=</td><td><center>$baris11[C5]</center><p2>$max5</p2></td><td>=</td><td>";echo number_format($hasil_n5,4);echo"</td></tr>			
						";
						$i++;	
						$n_matrix5 = mysql_query("update karyawan set n_c5 = '$hasil_n5' where nik ='$baris11[nik]'");
					}					
				?>
				<?php
					$i=1;
					$j=6;
					while ($baris12 = mysql_fetch_array($hasil13)){
					
						$data6[]= $baris12['C6'];
						
						$implode6 = implode(";",$data6);
						}
					$max6 = max($data6);
					while ($baris13 = mysql_fetch_array($hasil14)){
						ECHO "<tr><td>r<sub><font size=1>$i$j</font></sub>
						=</td><td><center>$baris13[C6]</center><p2>max{ $implode6 "; 
						$hasil_n6=$baris13['C6']/$max6;
						echo "}</p2></td><td>=</td><td><center>$baris13[C6]</center><p2>$max6</p2></td><td>=</td><td>";echo number_format($hasil_n6,4);echo"</td></tr>			
						";
						$i++;	
						$n_matrix6 = mysql_query("update karyawan set n_c6 = '$hasil_n6' where nik ='$baris13[nik]'");
					}					
				?>
				</table>
				</fieldset>
			</form>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td>
			<form action='isi_mhs.php' method='post'>
				<fieldset>
				<legend> Matrix Ternormalisasi</legend>
				<table>
					<tr>
						<Td>
							R =
						</td>
						<tD>
						<p>
						<table><tr><td>
						<?php
						while($normal = mysql_fetch_array($n_kriteria1)){
						echo 
							  number_format($normal['n_c1'],4)
							  ; echo"<br>";
						}
						echo "</td><td></td><td></td><td>";
						while($normal2 = mysql_fetch_array($n_kriteria2)){
						echo 
							  number_format($normal2['n_c2'],4);
							  echo"<br>";
							  
						}
						echo "</td><td></td><td></td><td>";
						while($normal3 = mysql_fetch_array($n_kriteria3)){
						echo 
							  number_format($normal3['n_c3'],4)
							  ; echo"<br>";
						}
						echo "</td><td></td><td></td><td>";
						while($normal4 = mysql_fetch_array($n_kriteria4)){
						echo 
							  number_format($normal4['n_c4'],4)
							  ; echo"<br>";
						}
						echo "</td><td></td><td></td><td>";
						while($normal5 = mysql_fetch_array($n_kriteria5)){
						echo 
							  number_format($normal5['n_c5'],4)
							  ; echo"<br>";
						}
						echo "</td><td></td><td></td><td>";
						while($normal6 = mysql_fetch_array($n_kriteria6)){
						echo 
							  number_format($normal6['n_c6'],4)
							  ; echo"<br>";
						}
						echo "</td><td></td><td></td></tr>";
						?>
						</table>
						</P>
				</TABLE>
				</fieldset>
			</form>
		</td>
	</tr>
</table>
ket : Refresh Page Jika tidak muncul nilai

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