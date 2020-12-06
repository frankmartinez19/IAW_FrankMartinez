<?php

$peso=$_GET['peso'];
$estatura=$_GET['estatura'];
$imc=$peso/($estatura**2);
if (is_numeric($peso)==FALSE or is_numeric($altura)==FALSE){
    print "Introduce bien los datos por favor";
}

elseif ($imc<=18.5) {
    print "Su IMC  es de" .$imc. " e indica peso bajo";
}
elseif ($imc>18.5 && $imc<=24.9) {
    print "Su IMC  es de" .$imc. " e indica peso normal";
}
elseif ($imc>24.9 && $imc<=29.9){
    print "Su IMC  es de" .$imc. " e indica Sobrepeso";
}

elseif ($imc>30) {
    print "Su IMC  es de" .$imc. " e indica obesidad";
}



?>