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
<div style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
<form action="igorov-primitivni-kalkulator.php" method="GET">
<span>Broj 1:</span>  <input style="width:200px;" type="number" data-role="keypad" name="num1" >
     <span>Broj 2:</span>  <input type="number" data-role="keypad" name="num2">
     <span>Izaberi sa liste željenu računsku operaciju</span>
     <select name="računskaoperacija">
    <option value="Broj 1 + Broj 2">Broj 1 + Broj 2</option>
    <option value="Broj 1 - Broj 2">Broj 1 - Broj 2</option>
    <option value="-Broj 1 - Broj 2"> -Broj 1 - Broj 2 </option>
    <option value="-Broj 1 + Broj 2">-Broj 1 + Broj 2</option>
    <option value="Broj 1  * Broj 2">Broj 1  * Broj 2</option>
    <option value="(-Broj 1)  * (Broj 2)">(-Broj 1)  * (Broj 2)</option>
    <option value="(-Broj 1)  * (-Broj 2)">(-Broj 1)  * (-Broj 2)</option>
    <option value="Broj 1  / Broj 2">Broj 1  / Broj 2</option>
    <option value="(-Broj 1)  / (Broj 2)">(-Broj 1)  / (Broj 2)</option>
    <option value="(Broj 1)  / (-Broj 2)">(Broj 1)  / (-Broj 2)</option>
    <option value="(-Broj 1)  / (-Broj 2)">(-Broj 1)  / (-Broj 2)</option>
    <option value="//">kvadratni korjen</option>
    <option value="Broja 1 na Broj 2">stepenovanje Broja 1 sa Broj 2</option>
    <option value="Broja 1 na (-Broj 2)">stepenovanje Broja 1 na (-Broj 2)</option>
  </select>
     <input type="submit" value="izračunaj"> <input type="reset" value="poništi">
</form>
</div>

<h5 style="display: block; margin-left: auto; margin-right: auto; width: 40%;"><?php
     $num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
     //$num1 = $_GET['num1'];
     $num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
     //$num2 = $_GET['num2'];
     $računskaoperacija = isset($_GET['računskaoperacija']) ? $_GET['računskaoperacija'] : '';
     //$računskaoperacija = $_GET['računskaoperacija'];
     if ($računskaoperacija == "Broj 1 + Broj 2" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", $num1 + $num2;
        //echo "Rezultat je: \n", $zbir = (isset($num1) ? -$num3 + $num1 + $num2 : -$num3 + $num2) ;
        //echo "Rezultat je: \n", $zbir = (isset($num2) ? -$num3 + $num1 + $num2 : -$num3 + $num1) ;
    } elseif ($računskaoperacija == "Broj 1 + Broj 2" && is_numeric($num1)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
    
      } elseif ($računskaoperacija == "Broj 1 + Broj 2" && is_numeric($num2)) {
       echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
            
         
    }  elseif ($računskaoperacija == "Broj 1 - Broj 2" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", $num1 - $num2;
             
          
     } elseif ($računskaoperacija == "Broj 1 - Broj 2" && is_numeric($num1))  {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
             
          
     } elseif ($računskaoperacija == "Broj 1 - Broj 2" && is_numeric($num2)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
             
          
     } elseif ($računskaoperacija == "-Broj 1 - Broj 2" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", - $num1 - $num2;
             
          
     } elseif ($računskaoperacija == "-Broj 1 - Broj 2" && is_numeric($num1)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
             
          
     } elseif ($računskaoperacija == "-Broj 1 - Broj 2" && is_numeric($num2)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
             
          
     } elseif ($računskaoperacija == "-Broj 1 + Broj 2" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n",  - $num1 + $num2;
             
          
     } elseif ($računskaoperacija == "-Broj 1 + Broj 2" && is_numeric($num1)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
             
          
     }  elseif ($računskaoperacija == "-Broj 1 + Broj 2" && is_numeric($num2)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
             
          
     } elseif ($računskaoperacija == "Broj 1  * Broj 2" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", $num1 * $num2;
             
          
     } elseif ($računskaoperacija == "Broj 1  * Broj 2" && is_numeric($num1)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
             
          
     } elseif ($računskaoperacija == "Broj 1  * Broj 2" && is_numeric($num2)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
             
          
     } elseif ($računskaoperacija == "(-Broj 1)  * (Broj 2)" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n",   - $num1 * $num2;
        
    } elseif ($računskaoperacija == "(-Broj 1)  * (Broj 2)" && is_numeric($num1)) {
      echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
        
    
    } elseif ($računskaoperacija == "(-Broj 1)  * (Broj 2)" && is_numeric($num2)) {
      echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
            
         
    }  elseif ($računskaoperacija == "(-Broj 1)  * (-Broj 2)" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", - $num1 * -$num2;
             
          
     } elseif ($računskaoperacija == "(-Broj 1)  * (-Broj 2)" && is_numeric($num1)) {
      echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
             
          
     }  elseif ($računskaoperacija == "(-Broj 1)  * (-Broj 2)" && is_numeric($num2)) {
      echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
    
    
    } elseif ($računskaoperacija == "Broj 1  / Broj 2" && is_numeric($num1) && $num2 == NULL) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
              
    
    } elseif ($računskaoperacija == "Broj 1  / Broj 2" && is_numeric($num1) && $num2 == 0) {
      echo "Rezultat je: ∞ \n";         
          
     } elseif ($računskaoperacija == "Broj 1  / Broj 2" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", $num1 / $num2;
             

     }  elseif ($računskaoperacija == "Broj 1  / Broj 2" && is_numeric($num2)) {
      echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
             
    } elseif ($računskaoperacija == "(-Broj 1)  / (Broj 2)" && is_numeric($num1) && $num2 == NULL) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
              
    
    } elseif ($računskaoperacija == "(-Broj 1)  / (Broj 2)" && is_numeric($num1) && $num2 == 0) {
      echo "Rezultat je: -∞ \n"; 
             
          
     } elseif ($računskaoperacija == "(-Broj 1)  / (Broj 2)" && is_numeric($num1) && is_numeric($num2)) {
       echo "Rezultat je: \n", -$num1 / $num2;
             
          
     }  elseif ($računskaoperacija == "(-Broj 1)  / (Broj 2)" && is_numeric($num2)) {
      echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
            
         
    } elseif ($računskaoperacija == "(Broj 1)  / (-Broj 2)" && is_numeric($num1) && $num2 == NULL) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
              
    
    } elseif ($računskaoperacija == "(Broj 1)  / (-Broj 2)" && is_numeric($num1) && $num2 == 0) {
        echo "Rezultat je: ∞ \n";
             
          
    } elseif ($računskaoperacija == "(Broj 1)  / (-Broj 2)" && is_numeric($num1) && is_numeric($num2)) {
        echo "Rezultat je: \n", $num1 / -$num2;
              
     
    } elseif ($računskaoperacija == "(Broj 1)  / (-Broj 2)" && is_numeric($num2)) {
        echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
              
    } elseif ($računskaoperacija == "(-Broj 1)  / (-Broj 2)" && is_numeric($num1) && $num2 == NULL) {
            echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 2!";
                  
        
    } elseif ($računskaoperacija == "(-Broj 1)  / (-Broj 2)" && is_numeric($num1) && $num2 == 0) {
            echo "Rezultat je: ∞ \n";
                 
              
    } elseif ($računskaoperacija == "(-Broj 1)  / (-Broj 2)" && is_numeric($num1) && is_numeric($num2)) {
            echo "Rezultat je: \n", -$num1 / -$num2;
                  
         
    } elseif ($računskaoperacija == "(-Broj 1)  / (-Broj 2)" && is_numeric($num2)) {
            echo "Za izvršavanje ove računske operacije potrebno je da unesete vrijednost Broja 1!";
    
    } elseif ($računskaoperacija == "//" && is_numeric($num1) && is_numeric($num2)) {
        $num3 = sqrt($num1);
        $num4 = sqrt($num2);
        echo "Rezultat je: \n $num3  \n iz polja Broj 1, a polja Broj 2 je \n $num4 ";
        
    } elseif ($računskaoperacija == "//" && is_numeric($num1)) {
        echo "Rezultat je: \n", sqrt($num1),  "\n iz polja Broj 1. </br>" ;
    } elseif ($računskaoperacija == "//" && is_numeric($num2)) {
        echo "Rezultat je: \n", sqrt($num2) , "\n iz polja Broj 2. </br>";
    } elseif ($računskaoperacija == "Broja 1 na Broj 2") {
        echo "Rezultat je: \n", pow($num1, $num2);
    } elseif ($računskaoperacija == "Broja 1 na (-Broj 2)") {
        echo "Rezultat je: \n", pow($num1, -$num2);
    } 
     
     
    
     
?></h5>
<div style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
<form action="igorov-primitivni-kalkulator.php" method="GET">
<span>Konvertor nekih fizičkih jedinica:</span>  <input type="number" data-role="keypad" name="brzina" >
     
     <span>Izaberi sa liste željenu računsku operaciju</span>
     <select name="konvertor">
    <option value="km/h => m/s">km/h => m/s</option>
    <option value="m/s => km/h">m/s => km/h</option>
    <option value="s => min">sekunda [s] => minuta [min]</option>
    <option value="s => h">sekunda [s] => sat [h]</option>
    <option value="min => s">minuta [min] => sekunda [s]</option>
    <option value="min => h">minuta [min] => sat [h]</option>
    <option value="h => s">sat [h] => sekunda [s]</option>
    <option value="h => min">sat [h] => minuta [min]</option>
    </select>
     <input type="submit" value="izračunaj"> <input type="reset" value="poništi">
</form>
<h5><?php 
        $brzina = isset($_GET['brzina']) ? $_GET['brzina'] : '';
        $vrijeme = isset($_GET['brzina']) ? $_GET['brzina'] : '';
        $konvertor = isset($_GET['konvertor']) ? $_GET['konvertor'] : '';
       
    if ($konvertor == "km/h => m/s") {
        $brzina2 = $brzina * (1000/3600);
        echo "Rezultat je: \n", round($brzina2, 2), "\nm/s"; 
    }elseif ($konvertor == "m/s => km/h") {
        $brzina2 = $brzina * (0.001/0.000277);
        echo "Rezultat je: \n", round($brzina2, 2), "\nkm/h"; 
    }elseif ($konvertor == "s => min") {
        $vrijeme2 = $vrijeme / 60;
        echo "Rezultat je: \n", round($vrijeme2, 2), "\nmin"; 
    } elseif ($konvertor == "s => h") {
        $vrijeme2 = $vrijeme / 3600;
        echo "Rezultat je: \n", round($vrijeme2, 2), "\nh"; 
    } elseif ($konvertor == "min => s") {
        $vrijeme2 = $vrijeme * 60;
        echo "Rezultat je: \n", round($vrijeme2, 2), "\ns"; 
    } elseif ($konvertor == "min => h") {
        $vrijeme2 = $vrijeme / 60;
        echo "Rezultat je: \n", round($vrijeme2, 2), "\nh"; 
    } elseif ($konvertor == "h => s") {
        $vrijeme2 = $vrijeme * 3600;
        echo "Rezultat je: \n", round($vrijeme2, 2), "\ns"; 
    } elseif ($konvertor == "h => min") {
        $vrijeme2 = $vrijeme * 60;
        echo "Rezultat je: \n", round($vrijeme2, 2), "\nmin"; 
    } 
     ?>
</h5>
</div>
<div style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
<form action="igorov-primitivni-kalkulator.php" method="GET">
<span>Geometrijski kalkulator:</span> 
     
     <span>Izaberi sa liste željenu računsku operaciju</span>
     <select name="geometar">
    <option value="a*2">Površina kvadrata</option>
    <option value="a*3">Površina kružnice</option>
    </select>
     <input type="submit" value="izračunaj"> <input type="reset" value="poništi">
</form>
<h5><?php 
        
        $konvertor = isset($_GET['geometar']) ? $_GET['geometar'] : '';
       
        if ($konvertor == "a*2") {
            echo "<div style=display: block; margin-left: auto; margin-right: auto; width: 40%;>
            <form action=igorov-primitivni-kalkulator.php method='GET'>
            <span>Dužina stranice a:</span>  <input style=width:200px; type=number data-role=keypad name='num11' >
                 
                 <span>Izaberi sa liste željenu jedinicu površine</span>
                 <select name='računska'>
                <option value='mm'>mm2</option>
                <option value=cm * cm>cm2</option>
                <option value=dm * dm>dm2</option>
                
              </select>
                 <input type=submit value=izračunaj> <input type=reset value=poništi>
            </form>
            </div>";
            
            $num11 = isset($_GET['num11']) ? $_GET['num11'] : '';
            $računska == isset($_GET['računska']) ? $_GET['računska'] : '';
            
            if ($računska == "mm" && is_numeric($num11)) {
                
                echo $num11 * $num11;
                
        }  
            
       
    }   elseif ($konvertor == "a*3") {
        echo "<div style=display: block; margin-left: auto; margin-right: auto; width: 40%;>
        <form action=igorov-primitivni-kalkulator.php method='GET'>
        <span>Prečnik kružnice:</span>  <input style=width:200px; type=number data-role=keypad name='num11' >
             
             <span>Izaberi sa liste željenu jedinicu površine</span>
             <select name='računska'>
            <option value='mm'>mm</option>
            <option value=cm>cm</option>
            <option value=dm>dm</option>
            
          </select>
             <input type=submit value=izračunaj> <input type=reset value=poništi>
        </form>
        </div>"; 
}
     ?>
</h5>
</div>

</p>
<p>Brojčanik je napravljen pomoću jQuery i Metro 4.</p>
<p><?php 
      if (date("l") === "Saturday" || date("l") === "subota") {
      echo "Danas je subota, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>";
     } elseif (date("l") === "Sunday" || date("l") === "nedelja") {
        echo "Danas je nedelja, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>" ;
    } elseif (date("l") === "Monday" || date("l") === "ponedeljak") {
        echo "Danas je ponedeljak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Tuesday" || date("l") === "utorak") {
        echo "Danas je utorak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Wednesday" || date("l") === "srijeda") {
        echo "Danas je srijeda, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Thursday" || date("l") === "četvrtak") {
        echo "Danas je četvrtak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>" ;
    }
    elseif (date("l") === "Friday" || date("l") === "petak") {
        echo "Danas je petak, \n" . date("d.m.Y") ."\ngodine." . "\nLokalno serversko vrijeme je: \n". date("h:ia") . ".<br>" ;
    }
     ?></p>

<p><?php 

//$var = NULL;
//$d = 8;
//$j = 2;
// This will evaluate to TRUE so the text will be printed.
//echo $var = (isset($var) ? $bo = 50 : $d + $j) ;

//$var = '';

// This will evaluate to TRUE so the text will be printed.
//if (isset($var)) {
    //echo "This var is set so I will print.";
//}
    



    ?>
</p>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>