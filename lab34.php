
<?php

$numero = $_GET["numero"];
$asterisco = 0 ;
if ($numero >0 && ctype_digit($numero)){
for ($asterisco; $asterisco < $numero; $asterisco++ )
print "*";
}

else{
print "introduce un numero positivo";
}

?>