<form method="POST" action="brojac script i meta tagova.php">
<textarea  name="text">unesi URL...</textarea>
<input type="submit" name="tagovi" value="izbroj">
</form> 
<?php
$lat = isset($_POST['text']) ? $_POST['text'] : '';


if (isset($_POST["tagovi"])) {
    
    echo '<br>';
    $homepage = file_get_contents($_POST['text']);
    $homepage1 = htmlentities($homepage);
    echo $homepage1;
    echo '<br>';
    echo '__________________';
    echo '<br>';
    $homepage4 = substr_count($homepage1, "&lt;script");
    echo "Broj script tagova u tekstu je:\n", $homepage4;
    echo '<br>';
    $homepage2 = substr_count($homepage1, '&lt;meta');
    echo "Broj meta tagova u tekstu je:\n", $homepage2;
    
    


  }
