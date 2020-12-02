<?php
$nombre=$_GET["nombre"];
$apellidos=$_GET["apellidos"];
$edad=$_GET["edad"];
$salario=$_GET["salario"];

if ($salario>2000) {
    print "Este es tu salario ". $salario;
}
elseif ($salario>=1000 && $salario<=2000) {
    if ($edad>45) {
        $salario=$salario*1.03;
        print "Este es tu salario con más de 45 años ". $salario;
    }
    else {
        $salario=$salario*1.1;
        print "Este es tu salario por tener menos de 45 ". $salario;
    }
}
elseif ($salario<1000) {
    if ($edad<30) {
        print "Este es tu salario por tener menos de 30, 1100";
    }
    elseif ($edad>=30 && $edad<=45) {
        $salario=$salario*1.03;
        print "Tu salario sube hasta los ". $salario;
    }
   else {
       $salario=$salario*1.15;
        print "Tu salario sube hata los ". $salario;    }
    
}



else {
    print "Datos erroneos";
}



?>