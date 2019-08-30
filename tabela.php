<form action="tabela.php" method="GET">
<span>Broj kolona:</span>  <input style="width:200px;" min="1" max="20" type="number" data-role="keypad" name="num1" >
<span>Broj redova:</span>  <input style="width:200px;" min="1" max="20" type="number" data-role="keypad" name="num2" >  
     <input type="submit"  name="pretraziiprikazi" value="izradi"> 
</form>
<?php 

$h = '';
$h = isset($_GET['num1']) ? $_GET['num1'] : '';
$g = '';
$g = isset($_GET['num2']) ? $_GET['num2'] : '';
if (isset($_GET["pretraziiprikazi"])) {
    echo "<table style='border: 1px solid black; border-collapse: collapse;'><tr style='border: 1px solid black; border-collapse: collapse;'>";
    $x = $h;
    while ($x >= 1){$x--; $th = "<th style='border: 1px solid black; border-collapse: collapse;'>Company</th>";
        
        echo  "<th style='border: 1px solid black; border-collapse: collapse;'><b><form ><input type='text' name='firstname' value='klikni na ćeliju' style='width:50px; height:30px; border:none; display: block; padding: 0; margin: 0; border: 0; width: 100%;text-align: center;font-size: 17px;'></form></b>";
        echo "</th>";} 
        
    
    $z = $g; while ($z >= 1) { $z--; 
      echo  "<tr style='border: 1px solid black; border-collapse: collapse; nth-child(even) {
        background-color: #dddddd};'>";
      
      for ($y = 1; $y <= $h; $y++) {
        
        echo  "<td style='border: 1px solid black; margin: 0 !important; padding: 0 !important; '><form action='/action_page.php'><input type='text' name='firstname' value='klikni na ćeliju' style='width:50px; height:30px; border:none; display: block; padding: 0; margin: 0; border: 0; width: 100%;'></form> </td>";
        
        } 
       
      
    echo "</tr>";
    }
   
echo "</table>";}

