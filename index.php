<?php
//CLASE 1 (Variables, listas, constantes, objetos e imprimir) 15/02/2021 

//Variables:
    $letras = (string) "bolsas de papel";
    $numero = (int) 50;
    $decimales_grande = (float) 1.123456789;
    $decimales = (double) 1.12345678;
    $logico = (bool) false;

//Listas:    
    $listas = (array) ["jhon", 23, false];

//Constantes:
    define("numero", 3.1415);
    const letras = "Jhon";
    
//Objeto:
    $vaso = (object) [];
    $vaso->color = "blanco";
    $vaso->altura = 10;

//Imprimir:    
    var_dump($listas);
    echo "<br>";
    var_dump($vaso->altura);
    echo numero;
    echo "<br>";
    echo letras;

?>