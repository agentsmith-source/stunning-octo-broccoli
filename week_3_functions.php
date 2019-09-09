<h2 style="text-align: center;">Šta je šta u PHP-u...</h2>
<form action="week_3_functions.php" method="GET">
  
     <input type="submit"  style="background-color: #008CBA;" name="SUPERGLOBALS" value="$_SUPERGLOBALS"><input type="submit" style="background-color: #f44336;" name="VariableHandlingFunctions" value="Variable handling Functions"><input type="submit" style="background-color: #4CAF50;"  name="ArrayFunctions" value="Array Functions"><input type="submit" style="background-color: #654321;"  name="FilesystemFunctions" value="Filesystem Functions"><input type="submit" style="background-color: #ffc0cb;"  name="JSONFunctions" value="JSON Functions"><input type="submit" style="background-color: #ffff00;"  name="NetworkFunctions" value="Network Functions"><input type="submit" style="background-color: #FDBA31;"  name="Functions" value="Functions">
</form>
<div><?php 

 $g = '<form action="week_3_functions.php" method="GET">
  
 <input type="submit" style="background-color: #008CBA;" name="GET1" value="$_GET"><input type="submit" style="background-color: #008CBA;" name="POST1" value="$_POST"><input type="submit" style="background-color: #008CBA;"  name="SERVER1" value=" $_SERVER">
</form>';
$h = '<form action="week_3_functions.php" method="GET">
  
 <input type="submit" style="background-color: #f44336;" name="is_array" value="is_array"><input type="submit" style="background-color: #f44336;" name="empty" value="empty"><input type="submit" style="background-color: #f44336;" name="unset" value="unset">
</form>';
$j = '<form action="week_3_functions.php" method="GET">
  
<input type="submit" style="background-color: #4CAF50;" name="count" value="count"><input type="submit" style="background-color: #4CAF50;" name="in_array" value="in_array">
</form>';
$k = '<form action="week_3_functions.php" method="GET">
  
<input type="submit" style="background-color: #654321;" name="file_get_contents" value="file_get_contents"><input type="submit" style="background-color: #654321;" name="file_put_contents" value="file_put_contents"><input type="submit" style="background-color: #654321;" name="file_exists" value="file_exists">
</form>';
$l = '<form action="week_3_functions.php" method="GET">
  
<input type="submit" style="background-color: #ffc0cb;" name="json_decode" value="json_decode"></form>';
$a = '<form action="week_3_functions.php" method="GET">
  
<input type="submit" style="background-color: #ffff00;" name="http_response_code" value="http_response_code"></form>';
$s = '<form action="week_3_functions.php" method="GET">
  
<input type="submit" style="background-color: #FDBA31"; name="error" value="error()">
<input type="submit" style="background-color: #FDBA31"; name="respond" value="respond()">
<input type="submit" style="background-color: #FDBA31"; name="saveData" value="saveData()">
<input type="submit" style="background-color: #FDBA31"; name="getData" value="getData()">
<input type="submit" style="background-color: #FDBA31"; name="get" value="get()">
<input type="submit" style="background-color: #FDBA31"; name="post" value="post()">
<input type="submit" style="background-color: #FDBA31"; name="put" value="put()">
<input type="submit" style="background-color: #FDBA31"; name="delete" value="delete()"></form>';

if (isset($_GET["SUPERGLOBALS"])) { 
    
    echo $g; 
}
if (isset($_GET["GET1"])) { 
   echo $g;
   echo " Skup niza varijabli prenešenih URL parametrima (aka. query 'string'; niz alfanumeričkih znakova iza ? u URL), popunjenih HTTP GET metodom. Važno je znati da taj niz nije rezervisan samo za GET zahtjev, već i za sve druge sa query 'string'.";
   
}
    if (isset($_GET["POST1"])) { 
        echo $g;
        echo "Skup niza varijabli prenešenih skripti preko  HTTP POST metode kada se koristi application/x-www-form-urlencoded ili multipart/form-data kao HTTP Content-Type u zahtjevu.
           ";
    }

    if (isset($_GET["SERVER1"])) { 
        echo $g;
        echo "$ _SERVER je niz koji sadrži informacije poput zaglavlja, putanje i lokacije skripte. Unose u ovom nizu kreira web server. Ne postoji garancija da će svaki web server pružiti bilo šta od toga; serveri mogu izostaviti neke ili pružiti druge koji nisu ovdje navedeni. U skladu s tim, velik broj tih varijabli objašnjeno je u »CGI / 1.1 specifikaciji. REST Web Services 06 - Method Idempotence</br>What is JSON ?</br>https://www.youtube.com/watch?v=JuFdz8f-cT4</br>
        How a web browser builds and displays a web page Al Zimmerman</br>
         ";
    }
    if (isset($_GET["VariableHandlingFunctions"])) { 
    
        echo $h; 
    }
    if (isset($_GET["is_array"])) { 
        $var = '$var';
        echo $h;
        echo "<a href='https://www.php.net/manual/en/function.is-array.php' target='_blank'><b>is_array</b></a>  - utvrđuje da li je varijabla niz. Kao odgovor vraća TRUE ako je varijabla niz ili FALSE. <br> Sintaksa: is_array ( mixed $var ) : bool";
        
     }
     if (isset($_GET["empty"])) { 
        $var = '$var';
        echo $h;
        echo "<a href='https://www.php.net/manual/en/function.empty.php' target='_blank'><b>empty</b></a>  - utvrđuje da li je varijabla prazna. Kao odgovor vraća TRUE ako je varijabla prazna ili FALSE.<br>
        <pre>Varijabla se smatra praznom u sljedećim slučajevima:
                                                                   '' (prazan string)
                                                                    0 (0 kao broj)
                                                                    0.0 (0 kao float)
                                                                   '0' (0 as a string)
                                                                    NULL
                                                                    FALSE
                                                                    array() (prazan niz)</pre> <br> Sintaksa: empty ( mixed $var ) : bool";
        
     }
     if (isset($_GET["unset"])) { 
        $var = '$var';
        echo $h;
        echo "<a href='https://www.php.net/manual/en/function.unset.php' target='_blank'><b>unset</b></a>  - poništava varijablu. <br> Sintaksa: unset ( mixed $var [, mixed $... ] ) : void";
        
     }

     if (isset($_GET["ArrayFunctions"])) { 
    
        echo $j; 
    }
     if (isset($_GET["count"])) { 
        $array_or_countable = '$array_or_countable';
        $mode = '$mode';
        echo $j;
        echo " <a href='https://www.php.net/manual/en/function.count.php' target='_blank'><b>count</b></a> - broji sve elementa u nizu ili nešto u objektu. Kao odgovor vraća broj. <br> Sintaksa: count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) : int";
        
     }
     if (isset($_GET["in_array"])) { 
        $needle = '$needle';
        $haystack = '$haystack';
        $strict = '$strict';
        echo $j;
        echo " <a href='https://www.php.net/manual/en/function.in-array.php' target='_blank'><b>in_array</b></a> - provjerava da li vrjednost postoji u nizu. Kao odgovor vraća TRUE, ako vrjednost postoji i ako se poklapa, ako ne FALSE. Ako je vrjednost string, poređenje se vrši na case-sensitive način. <br> Sintaksa: in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : bool";
        
     }
     if (isset($_GET["FilesystemFunctions"])) { 
    
        echo $k; 
    }
    if (isset($_GET["file_get_contents"])) { 
        $filename = '$filename';
        $use_include_path = '$use_include_path';
        $context = '$context';
        $maxlen = '$maxlen';
        $offset = '$offset';
        echo $k;
        echo " <a href='https://www.php.net/manual/en/function.file-get-contents.php' target='_blank'><b>file_get_contents</b></a> - čita čitav file kao string. Kao odgovor vraća pročitane podatke ili FALSE u slučaju nekog otkazivanja. <br> Sintaksa: file_get_contents ( string $filename [, bool $use_include_path = FALSE [, resource $context [, int $offset = 0 [, int $maxlen ]]]] ) : string";
        
     }
     if (isset($_GET["file_put_contents"])) { 
        $filename = '$filename';
        $data = '$data';
        $flags = '$flags';
        $context = '$context';
        
        echo $k;
        echo " <a href='https://www.php.net/manual/en/function.file-put-contents.php' target='_blank'><b>file_put_contents</b></a> - upisuje podatke u file. Ako file ne postoji, stvara se novi, ako postoji biva presnimljen, osim ako nije uključen FILE_APPEND, u tom slučaju novi podaci se dodaju starim. Kao odgovor funkcija vraća količinu upisanih podataka u bajtovima ili FALSE u slučaju nekog otkazivanja. <br> Sintaksa: file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] ) : int";
        
     }
     if (isset($_GET["file_exists"])) { 
        $filename = '$filename';
        
        echo $k;
        echo " <a href='https://www.php.net/manual/en/function.file-exists.php' target='_blank'><b>file_exists</b></a> - provjerava da li file ili folder postoje. Ako file postoji, kao odgovor vraća TRUE, ako ne postoji vraća FALSE. Vraća FALSE i kao posljedicu zaštićenog file. Varijabla je putanja do file. <br> Sintaksa: file_exists ( string $filename ) : bool";
        
     }
     if (isset($_GET["JSONFunctions"])) { 
    
        echo $l; 
    }
    if (isset($_GET["json_decode"])) { 
        $json = '$json';
        $assoc = '$assoc';
        $depth = '$depth';
        $options = '$options';

        echo $l;
        echo "<a href='https://www.php.net/manual/en/function.json-decode.php' target='_blank'><b>json_decode</b></a>  - prevodi JSON string u PHP varijablu. <br> Sintaksa: json_decode ( string $json [, bool $assoc = FALSE [, int $depth = 512 [, int $options = 0 ]]] ) : mixed";
        
     }
     if (isset($_GET["NetworkFunctions"])) { 
    
        echo $a; 
    }
    if (isset($_GET["http_response_code"])) { 
        $response_code = '$response_code';
        
        echo $a;
        echo " <a href='https://www.php.net/http-response-code' target='_blank'><b>http_response_code</b></a> - vraća ili postavlja HTTP status kod.  <br> Sintaksa: http_response_code ([ int $response_code ] ) : mixed";
        
     }
     if (isset($_GET["Functions"])) { 
    
      echo $s; 
    }
    if (isset($_GET["error"])) { 
      
      
      echo $s;
      echo " <b>error()</b> - vraća poruku o grešci<br>
      Kratak opis:<br> 1. vrati HTTP status kod;<br>2. ako nema poruke o grešci, prikaži default poruku;<br>3. poruku o grešci prikaži kao JSON;<br> 4. ispiši poruku i prekini skriptu; ";
      
   }
   if (isset($_GET["respond"])) { 
      
      
      echo $s;
      echo " <b>respond()</b> - odgovor<br>
      Kratak opis:<br> 1. vrati HTTP status kod;<br>2. ako postoji rezultat, prikaži kao JSON;<br>3. ispiši poruku i prekini skriptu; ";
      
   }
   if (isset($_GET["saveData"])) { 
      
      
      echo $s;
      echo " <b>saveData()</b> - čuvanje podataka<br>
      Kratak opis:<br> 1. poziva se globalna varijabla koja sadrži putanju do file sa podacima;<br>2. ako takav fajl ne postoji, prikazati poruku o grešci;<br>3. u fajl se upisuju podaci, kao dekodirani JSON string; ";
      
   }
   if (isset($_GET["getData"])) { 
      
      
      echo $s;
      echo " <b>getData()</b> - učitaj podatak<br>
      Kratak opis:<br> 1. poziva se globalna varijabla koja sadrži putanju do file sa podacima;<br>2. ako takav fajl ne postoji, prikazati poruku o grešci;<br>3. vrati, pročitani fajl dekodiran u object; ";
      
   }
   if (isset($_GET["get"])) { 
      $request = '$request';
      $articleID = '$aticleID';
      $articles = '$articles';
      $request = '$request';

      echo $s;
      echo " <b>get()</b> - dobavi artikl<br>
      Kratak opis: 
<br>1. Odabirom metode GET, poziva se funkcija get(), koja ima uslov za niz varijable $request ima dva člana ili više, ako ima, koristi se vrijednost drugog člana, ako nema, onda je NULL. Varijabla $request je niz dobijen pomoću trim funkcije, tj. skraćenjem varijable server, koja sadrži informacije o putanji, a sve to pretvoreno u niz pomoću funkcije explode. 
<br>2. $articleID nema vrjednost po defalut u funkciji get();
<br>3. $articles je sadržaj baze podataka u JSON, dekodiran u object, ukoliko nema artikla izbaci error 404;
<br>4. ukoliko je $articles, prazan, u smislu da nema ničega ili broj članova niza $articles je 0 ili nije niz izbaci error 404;
<br>5. ako je $articleID nepostojeći, prikaži bazu podataka kao JSON;
<br>6. kontrolnom strukturom foreach, vršimo poređenje naše vrjednosti varijable $articleID sa nekom vrjednošću iz objekta sa id key, ukoliko ima podudaranja dobijamo articl u obliku JSON.
<br>7. ako nema prikazuje se error 404; ";
      
   }
   if (isset($_GET["post"])) { 
      $input = '$input';
      $articleID = '$aticleID';
      $articles = '$articles';
      $article = '$article';

      echo $s;
      echo " <b>post()</b> - kreiraj novi artikl<br>
      Kratak opis: 
<br>1. Odabirom metode POST, poziva se funkcija post(), u kojoj je definisana varijabla $input, a ona je niz nastala dekodiranjem JSON  iz  read-only toka koji omogućava da se čitaju sirovi podaci u body. 
<br>2. $articles je sadržaj baze podataka u JSON, dekodiran u object, ukoliko nema artikla izbaci error 404;
<br>3. ako $articles nije niz, kreiraj prazan niz i ubaci varijablu $article.
<br>4. funkcijom saveData() se čuva u bazi podataka u obliku JSON novi artikl jer se prethodno enkoduje;  ";
      
   }
   if (isset($_GET["put"])) { 
      $input = '$input';
      $articleID = '$aticleID';
      $articles = '$articles';
      $article = '$article';
      $request[1] = '$request[1]';
      $key = '$key';

      echo $s;
      echo " <b>put()</b> - izmjeni artikl<br>
      Kratak opis: 
<br>1. Odabirom metode PUT, poziva se funkcija put(), u kojoj su definisane varijable $input i $request[1]. 
<br>2. $articles je sadržaj baze podataka u JSON, dekodiran u object, ukoliko nema artikla izbaci error 404;
<br>3. ukoliko je $articles, prazan, u smislu da nema ničega ili broj članova niza $articles je 0 ili nije niz izbaci error 404;
<br>4. ako je $articleID nepostojeći, prikaži error 400; 
<br>5. kontrolnom strukturom foreach, vršimo poređenje naše vrjednosti varijable $articleID sa nekom vrjednošću iz objekta sa  key, ukoliko ima podudaranja, tada se dodaje $article po ključu $key;
<br>6. funkcijom saveData() se čuva u bazi podataka u obliku JSON novi artikl jer se prethodno enkoduje;
<br>7. ";
      
   }
   if (isset($_GET["delete"])) { 
      $input = '$input';
      $articleID = '$aticleID';
      $articles = '$articles';
      $article = '$article';
      $request[1] = '$request[1]';
      $key = '$key';

      echo $s;
      echo " <b>delete()</b> - izmjeni artikl<br>
      Kratak opis: 
<br>1. Odabirom metode DELETE, poziva se funkcija delete(), u kojoj je definisana varijabla $request[1]. 
<br>2. $articles je sadržaj baze podataka u JSON, dekodiran u object, ukoliko nema artikla izbaci error 404;
<br>3. ukoliko je $articles, prazan, u smislu da nema ničega ili broj članova niza $articles je 0  izbaci error 404;
<br>4. kontrolnom strukturom foreach, vršimo poređenje naše vrjednosti varijable $articleID sa nekom vrjednošću iz objekta sa  key, ukoliko ima podudaranja, tada se unsetuje po ključu $key;
<br>5. funkcijom saveData() se čuva u bazi podataka u obliku JSON novo stanje;
<br>6. 
<br>7. ";
      
   }

   /* hoš neš Bangladeš</br>
        https://www.php.net/manual/en/reserved.variables.post.php</br>
        Differences Between Get and Post - Web Development</br>https://www.youtube.com/watch?v=UObINRj2EGY</br>
        Post vs Put</br>https://www.youtube.com/watch?v=1xVK2m817Bw</br>
        What is the difference between GET and POST?</br>https://www.youtube.com/watch?v=BcpI1hYmGj4</br>
        Basic concepts of web applications, how they work and the HTTP protocol </br>
        https://www.youtube.com/watch?v=RsQ1tFLwldY </br>
        GET and POST methods in HTML</br>
        https://www.youtube.com/watch?v=RkFswrkkie8</br>
        REST API & RESTful Web Services Explained</br>
        https://www.youtube.com/watch?v=LooL6_chvN4</br>
        URIs, URLs, and URNs | Difference between URI and URL | URL Explained</br>
        https://www.youtube.com/watch?v=vpYct2npKD8</br>
        What is REST API? | Web Service</br>
        https://www.youtube.com/watch?v=qVTAB8Z2VmA</br>
        <img src='https://i.ytimg.com/vi/UObINRj2EGY/maxresdefault.jpg'></img> */
 ?></div>
  
