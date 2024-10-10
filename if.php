<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba if</title>
</head>
<body>
   <form action="" method="get">
       Nilai : <input type="number" nama="nilai" />
       <input type="submit" value="kirim" />
   </form>

   <?php
   $nilai = $_GET["nilai"];
   if($nilai >100){
        echo "Nilai Invalid";
   }elseif(nilai >= 70){
        echo "Lulus Ujian Dengan Baik";
   }elseif(nilai >= 60){
        echo "Lulus Ujian Dengan Cukup";
   }else{
        echo "Tidak Lulus Ujian";
   }
   ?>
</body>
</html>