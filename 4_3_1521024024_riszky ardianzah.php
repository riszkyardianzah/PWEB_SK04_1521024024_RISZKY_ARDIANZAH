<!DOCTYPE html>
<html>
<head>
  <title>SK 4_3 Riszky Ardianzah</title>
  <style>
  body {
	  background-color : yellow;
  }
  </style>
</head>
<body>
  <?php
  //bagian 1
  $n = 5;
  echo "PIRAMIDA SETENGAH KANAN<br>";
    for ( $i =1; $i <= $n; $i++) {
		for ($j =1; $j <= $i; $j++){
			echo "*";
		}
	echo "<br>";
	}
	echo "<br>";
   
  //bagian 2
  echo "PIRAMIDA SETENGAH KIRI<br>";
    for ($i= 1;$i <=$n; $i++){
      echo "<br>";
		for ($m =$i; $m <=$n-1; $m++){
		echo "&nbsp ";  
		}
			for ($j =$n+1-$i; $j <=$n; $j++){
			echo "*";
			}
  }

  //bagian 3
  echo "<br>";
  echo "<br>";
  echo "PIRAMIDA PENUH<br>";
    for ( $i =1; $i <= $n; $i++) {
		for ($m =$i; $m <=$n-1; $m++){
		echo "&nbsp ";  
		}
		for ($j =$n+1-$i; $j <=$n+$i-1; $j++){
			echo "*";
			}
	echo "<br>";
	}
  ?>
</body>
</html>
