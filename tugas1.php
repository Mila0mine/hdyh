<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box">
<?php
function Prima($hid) {
    if ($hid <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($hid); $i++) {
        if ($hid % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "Pengulangan Untuk Mencari kategori bilangan :<br><br>";

for($j = 1; $j < 20; $j++){
    echo "<br>";
    if( ($j % 2) == 0){
        echo "&emsp;&emsp;•Angka $j adalah bilangan Genap";
    }else {
		echo "&emsp;&emsp;•Angka $j adalah bilangan Ganjil";
	}	

    if (Prima($j)) {
        if ($j > 10) {
            echo " dan sekaligus bilangan prima";
        } else {
            echo " sekaligus bilangan prima";
        }
    }
      if($j >=1){
        echo "<br>";
      }else{
        echo "";
      }
}
?>
    </div>
</body>
<style>
    .box{
        width: 600px;
        height: 750px;
        border: 2px solid black;
    }
</style>
</html>
