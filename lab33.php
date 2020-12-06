<?php

$numero=$_GET["numero"];

if (is_numeric($numero)) {
    print $numero;
}

else {
    print "Introduce un numero";
}

?>