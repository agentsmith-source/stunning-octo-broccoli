<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div>Tekstualni zadaci
    Zbrajanje i oduzimanje do 20 - sa i bez prijelaza 
    </div> 
    <br>
    <div>1. Teretni vlak ima 17 vagona. Na prvoj stanici otkopčano je 5 vagona i
        prikopčana 2. Na drugoj stanici otkopčano je 7 vagona i prikopčano
        9. Na trećoj stanici otkopčano je 8 vagona. Koliko je vagona
        nastavilo put? </div>
    <div>
        Rješenje: <?php $lokomotiva = 17;
                        $prvastanica = 2;
                        $prvastanica -= 5;
                        $drugastanica = -7;
                        $drugastanica += 9;
                        $trećastanica = -8;

                        echo   $lokomotiva + $prvastanica + $drugastanica + $trećastanica, "\nvagona.";

                 ?>
    </div>
    <br>
    <div>
    2. Na maskenbalu je bilo 16 maškara. 7 ih je imalo šarene šeširiće, 5
jednobojne, a ostali nisu imali šeširiće. Koliko je maškara bilo bez
šeširića? 
    </div>
    <div>
        Rješenje: <?php $ukupnomaškaranamaskenbalu = 16;
                        $šarenišeširići = 7;
                        $jednobojnišeširići = 5;
                        

                        echo "Maškara \n" , $ukupnomaškaranamaskenbalu - $šarenišeširići - $jednobojnišeširići , "\nnije imalo šeširiće.";

                 ?>
    </div>
    <br>
    <div>
    3. Da bi stigao do princeze, princ mora prijeći 7 mora, 7 gora i 7
planina. Ako je prešao 2 mora, 5 gora i 3 planine, koliko još čega
mora prijeći? 
    </div>
    <div>
        Rješenje: <?php $mora = 7;
                        $gora = 7;
                        $planina = 7;
                        
                        echo "<ul style=list-style-type:circle;>";
                        echo "<li>Mora ima $mora;</li>";
                        echo "<li>Gora ima $gora;</li>";
                        echo "<li>Planina ima $planina;</li>";
                        echo "</ul>";
                        $mora -= 2;
                        $gora -= 5;
                        $planina -= 3;
                        echo "</br>";
                        echo "Ostalo mu da pređe \n"  , $mora, "\n mora i\n", $gora, "\n gore te\n", $planina, "\nplanine.";

                 ?>
        </ul>
    </div>
    <br>
    <div>4. U vazi su bila 4 crvena, 5 bijelih i 8 plavih cvjetova. Uvenula su 3
crvena, 4 bijela i 6 plavih cvjetova, pa ih je Minea bacila. Koliko je
cvjetova ostalo u vazi?</div>
    <div>
        Rješenje: <?php $crvenicvjetovi = 4;
                        $bijelicvjetovi = 5;
                        $plavicjetovi = 8;
                        $crvenicvjetovi += -3;
                        $bijelicvjetovi += -4;
                        $plavicjetovi += -6;

                        echo  "U vazi su ostala \n" , $crvenicvjetovi + $bijelicvjetovi + $plavicjetovi , "\ncvijeta.";

                 ?>
    </div>
    <br>
    <div>5. Na stolu je bilo 12 kockica. Slavko je stavio još 5 kockica na stol. Marko je uzeo 3 kockice. 7 je kockica palo na pod.
           Koliko je kockica ostalo na stolu? </div>
    <div>
        Rješenje: <?php $kockicanastolu = 12;
                        $novihkockicanastolu = 5;
                        $odnjetokockica = 3;
                        $kockicapalonapod = 7;
                        
                        echo  "Na stolu je ostalo \n" , $kockicanastolu + $novihkockicanastolu - $odnjetokockica - $kockicapalonapod , "\nkockica.";

                 ?>
    </div>
    <br>
    <div>
    <?php $a = rand(0,10);
          echo "Slučajni broj a: \n" , $a;
          echo "</br>";
          $b = rand(0,10);
          echo "Slučajni broj b: \n" , $b;
          echo "</br>";
          if ($a > $b) {
              echo "<b>Broj a je veći od broja b</b>";
          } elseif ($a == $b) {
            echo "<b>Broj a i broj b su jednaki</b>";
        } else {
            echo "<b>Broj b je veći od broja a</b>";
        }
          
    ?>
    </div> 
    <br>
    <div>
    <?php $a = rand(0,10);
          echo "Slučajni broj a: \n" , $a;
          echo "</br>";
          $b = rand(0,10);
          echo "Slučajni broj b: \n" , $b;
          echo "</br>";
          if ($a != $b) {
              echo "<b>Broj a i broj b su nejednaki</b>";
          } elseif ($a == $b) {
            echo "<b>Broj a i broj b su jednaki</b>";
        } 
          
    ?>
    </div>    
    <br>
    <div>
    <?php $a = rand(0,10);
          echo "Slučajni broj a: \n" , $a;
          echo "</br>";
          $b = 10;
          echo "Vrijednost broja b: \n" , $b;
          echo "</br>";
          if ($a === $b) {
              echo "<b>Broj a i broj b su identični</b>";
          } else {
            echo "<b>Broj a i broj b nisu identični</b>";
        } 
          
    ?>
    </div>    
    <br>
    <div>
    <?php
        $vulkan = "Popokatepetl";
        echo "Broj slova u riječi\n" , $vulkan, "\nje:\n"; 
        echo strlen($vulkan);
?>  
    </div> 
    <br>
    <div>
    <?php

$mjeseciHR = array("siječanj", "veljača", "ožujak" , "travanj", "svibanj", "lipanj", "srpanj", "kolovoz", "rujan", "listopad", "studeni", "prosinac");
$mjeseciSR = array("januar", "februar", "mart" , "april", "maj", "jun", "jul", "avgust", "septembar", "oktobar", "novembar", "decembar");  

$rand_keys = array_rand($mjeseciHR, 3);
$rand_keys = array_rand($mjeseciSR, 3);
echo "Prevod mjeseci u godini sa hrvatskog na srpski";
echo "</br>";
echo $mjeseciHR[$rand_keys[0]] . "\n";
echo $mjeseciSR[$rand_keys[0]] . "\n";
?>
    </div>
</body>
</html>