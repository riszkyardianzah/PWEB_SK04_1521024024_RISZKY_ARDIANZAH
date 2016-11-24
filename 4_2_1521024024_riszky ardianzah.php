<!DOCTYPE html>
<html>
<head>
	<title>SK 4_2 Riszky Ardianzah</title>
	<style>
table {
    width:35%;
	margin-left:450px;
}
table, th, td {
    border: 1px solid red
;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t th	{
    text-align:center;
}

</style>

</head>
<body>
<table id="t">
  <tr>
    <th>No</th>
    <th>Kode Barang</th>		
    <th>Nama Barang</th>
    <th>Harga</th>
  </tr>
  
	<?php
    define("mb25", "MB25", true);
    define("pr80", "PR80", true);
    define("m717", "M717", true);
    define("mm34", "MM34", true);
    define("k987", "K987", true);
    $h1="250";
    $h2="750";
    $h3="30";
    $h4="150";
    $h5="35";

    $kode=k987;
	
	echo "<p style=text-align:center><b>DAFTAR BARANG DAN HARGA<br>TOKO RAMAI LANCAR</b></p>";
    echo "
    <tr>
    <td style=text-align:center;>1</td>
    <td>".Mb25."</td>   
    <td>Motherboard</td>
    <td style=text-align:right;>".$h1."</td>
  </tr>
  <tr>
    <td style=text-align:center;>2</td>
    <td>".PR80."</td>   
    <td>Printer</td>
    <td style=text-align:right;>".$h2."</td>
  </tr>
  <tr>
    <td style=text-align:center;>3</td>
    <td>".M717."</td>   
    <td>Mouse</td>
    <td style=text-align:right;>".$h3."</td>
  </tr>
  <tr>
    <td style=text-align:center;>4</td>
    <td>".MM34."</td>   
    <td>Memory</td>
    <td style=text-align:right;>".$h4."</td>
  </tr>
  <tr>
    <td style=text-align:center;>5</td>
    <td>".K987."</td>   
    <td>Keyboard</td>
    <td style=text-align:right;>".$h5."</td>
  </tr>
</table>";
    
		echo "<br>";
    if ($kode==Mb25){
        echo "Kode barang <b>".Mb25."</b> dengan harga <b>".$h1.".000</b>";
    }
    else if ($kode==PR80){
        echo "Kode barang <b>".PR80."</b> dengan harga <b>".$h2.".000</b>";
    }
    else if ($kode==M717){
        echo "Kode barang <b>".M717."</b> dengan harga <b>".$h3.".000</b>";
    }
    else if ($kode==MM34){
        echo "Kode barang <b>".MM34."</b> dengan harga <b>".$h4.".000</b>";
    }
    else if ($kode==K987){
        echo "Kode barang <b>".K987."</b> dengan harga <b>".$h5.".000</b>";
    }
    else
      echo "Kode barang tidak sesuai";
	?>

</body>
</html>