<?php

$numero=$_GET["numero"];

if (ctype_digit($numero)) {
    print "Este numero " .$numero. " es entero";
}

elseif(is_numeric($numero)==TRUE) {
    print "Este numero " .$numero. " es decimal";
}
else{
    print "Introduce bien el numero";
}
?>