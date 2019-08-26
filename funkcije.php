<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>

<form action = "funkcije.php" method = "GET">
<input type = "number" name = "broj1" placeholder = "UNESITE BROJ">
<input type = "number" name = "broj2" placeholder = "UNESITE BROJ">
<input type = "submit" value = "PROVJERI">
</form>

<?php
error_reporting(0);

$var1 = $_GET['broj1'];
$var2 = $_GET['broj2'];

function mojafunkcija($num1, $num2){

     if($num1 < $num2){
        echo "PRVI BROJ JE MANJI OD DRUGOG";
    }
     if ($num1 > $num2) {
        echo "DRUGI BROJ JE MANJI OD PRVOG";
    }
     if($num1 == $num2){
       echo "PRVI BROJ JE JEDNAK DRUGOM";
   }
    
}



mojafunkcija($var1, $var2);




?>



</html>