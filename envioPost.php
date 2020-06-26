<?php

    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    echo("<br>");
    echo($numero1. " mas ". $numero2. " es igual a ". $suma );
    echo("<br>");
    echo($numero1. " menos ". $numero2. " es igual a ". $resta );
    echo("<br>");
    echo($numero1. " por ". $numero2. " es igual a ". $multiplicacion );
    echo("<br>");
    echo($numero1. " dividido ". $numero2. " es igual a ". $division );

?>