<form method="POST" action="cirilizator.php">
<textarea  name="text">Ћирилица/Latinica</textarea>
<input type="submit" name="cirilko" value="Ћирилизуј">
<input type="submit" name="latinko" value="Daj Latinicu">
</form> 
<?php
$lat='';
$lat = isset($_POST['text']) ? $_POST['text'] : '';

$cir = isset($_POST['text']) ? $_POST['text'] : '';
//$array = str_split($str);
$array1 = array("LJ", "Lj", "lj","DŽ","Dž","dž","NJ", "Nj", "nj","A","a","B","b","C","c","Č","č","Ć","ć","D","d", "Đ", "đ", "E", "e", "F", "f", "G", "g", "H", "h", "I", "i", "J", "j", "K", "k", "L", "l",  "M", "m", "N", "n",  "O", "o", "P", "p", "R", "r", "S", "s", "Š", "š", "T", "t", "U", "u", "V", "v", "Z", "z", "Ž", "ž");

$array3 = array("Љ","Љ","љ","Џ","Џ","џ","Њ","Њ","њ","А","а","Б","б","Ц","ц","Ч","ч","Ћ","ћ","Д","д", "Ђ","ђ","Е","е","Ф","ф","Г","г","Х","х","И","и","Ј","ј","К","к","Л","л","М","м","Н","н","О","о","П","п","Р","р","С","с","Ш","ш","Т","т","У","у","В","в","З","з","Ж","ж");

if (isset($_POST["cirilko"])) {

  $circonvert = str_replace($array1,$array3, $lat);
  
  //$dr1 = str_replace($array2,$array3, $dr);
  //$jk = str_replace("lj","љ", $str);
  //$cirilko = implode($dr);
  echo "<p style='text-align: justify;'>".$circonvert."</p>";} elseif(isset($_POST["latinko"])){
    $latconvert = str_replace($array3,$array1, $cir);
    echo "<p style='text-align: justify;'>".$latconvert."</p>";

  }
  

/*foreach($array as $bukva){ 

}

if ($bukva === "o" || $bukva === "v"|| $bukva === "j"|| $bukva === "e"|| $bukva === "t"|| $bukva === "s"
    || $bukva === "ć"|| $bukva === "i"|| $bukva === "r"|| $bukva === "l" || $bukva === "z" || $bukva === "a"){
    $pita = "о";
    echo "$pita <br>";
}*/