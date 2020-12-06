<?php
$tipov=$_GET['tipov'];
$tipoz=$_GET['tipoz'];
$direccion=$_GET['direccion'];
$nhab=$_GET['nhab'];
$precio=$_GET['precio'];
$tamaño=$_GET['tamaño'];
$extras=$_GET['extras'];


print "Ha elegido el tipo de vivienda " .$tipov. "</br>";
print "Ha elegido el tipo de zona " .$tipoz. "</br>";
if (is_null($nhab)==TRUE) {
    print "";
}

else {
    print "Tiene un total de " .$nhab. " habitaciones </br>";

}


if (empty($direccion)==TRUE) {
    print "";
}

else {
    print "Su direccion es " .$direccion. "</br>";

}
if (is_numeric($precio)==FALSE or empty($precio)) {
    print "Introduzca bien el precio </br";
}

else {
    print "Su precio es " .$precio;

}
if (is_numeric($tamaño)==FALSE or empty($tamaño)) {
    print "Introduzca bien el tamaño </br>";
}

else {
    print "Su tamaño es " .$tamaño;

}








?>
