<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>
<body>
<h1>Jednostavan kalkulator na kome sam radio osam sati :( jer od drveta nisam vidio šumu.</h1>

<p>
    U ovom primjeru se koriste GET varijable za prosljedjivanje parametara / podataka na server te se tamo obradjuju i server vraca rezultat.
</p>
<p>Uputstvo: klikni na polje i iskočiće brojčanik, poslije unosa klikni opet da ga zatvoriš. Kod računske radnje <b>stepenovanje</b> u polje Broj 1 unjeti bazu, a u polje Broj 2 eksponent.</p>
<form action="igorov-primitivni-kalkulator.php" method="GET">
<span>Broj 1:</span>  <input type="number" data-role="keypad" name="num1" >
     <span>Broj 2:</span>  <input type="number" data-role="keypad" name="num2">
     <span>Izaberi sa liste željenu računsku operaciju</span>
     <select name="računskaoperacija">
    <option value="+">saberi</option>
    <option value="-">oduzmi</option>
    <option value="*">pomnoži</option>
    <option value="/">podjeli</option>
    <option value="//">kvadratni korjen</option>
    <option value="**">stepenuj</option>
  </select>
     <input type="submit" value="izračunaj"> <input type="reset" value="poništi">
</form>

<h5><?php
     $num1 = $_GET['num1'];
     $num2 = $_GET['num2'];
     $računskaoperacija = $_GET['računskaoperacija'];
     if ($računskaoperacija == "+") {
        echo "Rezultat je: \n", $num1 + $num2;
    } elseif ($računskaoperacija == "-") {
        echo "Rezultat je: \n", $num1 - $num2;
    } elseif ($računskaoperacija == "*") {
        echo "Rezultat je: \n", $num1 * $num2;
    } elseif ($računskaoperacija == "/") {
        echo "Rezultat je: \n", $num1 / $num2;
    } elseif ($računskaoperacija == "//" && is_numeric($num1) && is_numeric($num2)) {
        $num3 = sqrt($num1);
        $num4 = sqrt($num2);
        echo "Rezultat je: \n $num3  \n iz polja Broj 1, a polja Broj 2 je \n $num4 ";
        
    } elseif ($računskaoperacija == "//" && is_numeric($num1)) {
        echo "Rezultat je: \n", sqrt($num1),  "\n iz polja Broj 1. </br>" ;
    } elseif ($računskaoperacija == "//" && is_numeric($num2)) {
        echo "Rezultat je: \n", sqrt($num2) , "\n iz polja Broj 2. </br>";
    } elseif ($računskaoperacija == "**") {
        echo "Rezultat je: \n", pow($num1, $num2);
    }
     
     
     
     
?></h5>

<p>Brojčanik je napravljen pomoću jQuery i Metro 4.</p>
<p><?php 
      if (date("l") === "Saturday" || date("l") === "subota") {
      echo "Danas je subota, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>";
     } elseif (date("l") === "Sunday" || date("l") === "nedelja") {
        echo "Danas je nedelja, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>" ;
    } elseif (date("l") === "Monday" || date("l") === "ponedeljak") {
        echo "Danas je ponedeljak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Tuesday" || date("l") === "utorak") {
        echo "Danas je utorak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Wednesday" || date("l") === "srijeda") {
        echo "Danas je srijeda, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Thursday" || date("l") === "četvrtak") {
        echo "Danas je četvrtak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Friday" || date("l") === "petak") {
        echo "Danas je petak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je : \n". date("h:ia") . ".<br>" ;
    }
     ?></p>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>