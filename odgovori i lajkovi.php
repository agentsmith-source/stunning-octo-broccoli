<p>Potrebno je kopirati link po izboru u polje i kliknuti na dugmence:</p>
<a>https://stackoverflow.com/questions/3737139/reference-what-does-this-symbol-mean-in-php</a>
<br>
<a>https://stackoverflow.com/questions/60118873/root-element-getting-written-multiple-times-in-spring-batch</a>

<form method="POST" action="odgovori i lajkovi.php">
<textarea  name="text">unesi URL...</textarea>
<input type="submit" name="tagovi" value="izbroj">
</form> 
<?php

echo (!isset($_POST['text']) || $_POST['text'] == false) ? exit("")  : '';
$homepage = file_get_contents($_POST['text']);
$homepage1 = strip_tags($homepage, "<div>");
$homepage2 = htmlentities($homepage1);
$homepage3 = str_replace("&quot;","&#039;",$homepage2);
$homepage4 = strchr($homepage3,"answer accepted-answer");
$homepage10 = stripos($homepage4,"answer accepted-answer");
echo "Tip podatka:\n".gettype($homepage10), "\n";
echo "<br>";

if ($homepage10 === false) {
    echo "Nema potvrđenog odgovora!";

} elseif ($homepage10 !== false){ 
$homepage5 = strchr($homepage4,"data-value=");
$homepage6 = str_replace("data-value","datavalue",$homepage5);
$homepage7 = strchr($homepage6,"&gt;",true);
$homepage8 = str_replace("&#039;","",$homepage7);
parse_str($homepage8, $homepage9);
echo "Ima potvrđen odgovor i glasova:\n" .$homepage9['datavalue'];
    
}





    