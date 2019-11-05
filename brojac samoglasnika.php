
<form method="POST" action="brojac samoglasnika.php">
<textarea  name="text">unesi tekst...</textarea>
<input type="submit" name="latinko" value="Brojač samoglasnika na latinici">
<input type="submit" name="cirilko" value="Бројач самогласника на ћирилици">
</form> 
<?php
$lat='';
$lat = isset($_POST['text']) ? $_POST['text'] : '';


if (isset($_POST["latinko"])) {
  
    $array = str_split($lat);
    
    $array2 = array_count_values($array);
    if (!isset($array2['A'])) {
       $array2['A']=0;
    } if (!isset($array2['a'])) {
      $array2['a']=0;
   } if (!isset($array2['E'])) {
    $array2['E']=0;
 } if (!isset($array2['e'])) {
  $array2['e']=0;
}   if (!isset($array2['O'])) {
  $array2['O']=0;
}   if (!isset($array2['o'])) {
  $array2['o']=0;
}   if (!isset($array2['U'])) {
  $array2['U']=0;
}   if (!isset($array2['u'])) {
  $array2['u']=0;
}   if (!isset($array2['I'])) {
  $array2['I']=0;
}   if (!isset($array2['i'])) {
  $array2['i']=0;
}
    echo $lat;
    echo '<br>';
    echo "Broj slova a u tekstu je:\n",$array2['A'] + $array2['a'];
    echo '<br>';
    echo "Broj slova e u tekstu je:\n",$array2['E'] + $array2['e'];
    echo '<br>';
    echo "Broj slova o u tekstu je:\n",$array2['O'] + $array2['o'];
    echo '<br>';
    echo "Broj slova u u tekstu je:\n",$array2['U'] + $array2['u'];
    echo '<br>';
    echo "Broj slova i u tekstu je:\n",$array2['I'] + $array2['i']; 
    
    
     
    } 
  
  elseif(isset($_POST["cirilko"])){
    
    $array3 = array("А","а","Е","е","О","о","У","у","И","и");
    $array4 = array("A","a","E","e","O","o","U","u","I","i");
    $circonvert = str_replace($array3,$array4, $lat);
    $array = str_split($circonvert);
    $array2 = array_count_values($array);
    
    if (!isset($array2['A'])) {
       $array2['A']=0;
    } if (!isset($array2['a'])) {
      $array2['a']=0;
   } if (!isset($array2['E'])) {
    $array2['E']=0;
 } if (!isset($array2['e'])) {
  $array2['e']=0;
}   if (!isset($array2['O'])) {
  $array2['O']=0;
}   if (!isset($array2['o'])) {
  $array2['o']=0;
}   if (!isset($array2['U'])) {
  $array2['U']=0;
}   if (!isset($array2['u'])) {
  $array2['u']=0;
}   if (!isset($array2['I'])) {
  $array2['I']=0;
}   if (!isset($array2['i'])) {
  $array2['i']=0;
}
    echo $lat;
    echo '<br>';
    echo "Број слова а у тексту је:\n",$array2['A'] + $array2['a'];
    echo '<br>';
    echo "Број слова е у тексту је:\n",$array2['E'] + $array2['e'];
    echo '<br>';
    echo "Број слова о у тексту је:\n",$array2['O'] + $array2['o'];
    echo '<br>';
    echo "Број слова у у тексту је::\n",$array2['U'] + $array2['u'];
    echo '<br>';
    echo "Број слова и у тексту је:\n",$array2['I'] + $array2['i']; 
  }
  

?>