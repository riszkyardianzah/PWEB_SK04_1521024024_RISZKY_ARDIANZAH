<!DOCTYPE html>
<html>
<head>
  <title>SK 4_1 Riszky Ardianzah</title>
</head>
<body>
  <?php
    $t = 75;
	echo "<p style=font-size:30px>Nilai</p>";
    if ($t >= "0" && $t <= "59") {
	  echo $t . "<br><p style=font-size:60px;>Ket : Cukup</p>";
    } elseif ($t > "59" && $t < "85") {
      echo $t . "<br><p style=font-size:60px;>Ket : Baik</p>";
	} elseif ($t >= "85" && $t <= "100") {
	  echo $t . "<br><p style=font-size:60px>Ket : Baik Sekali</p>";
    } else {
	  echo $t . "<br><p style=font-size:60px;>Ket : Input Salah</p>";
    }
  ?>
</body>
</html>
