<?php

require_once 'Deporte.php';
require_once 'Futbol.php';
require_once 'basket.php';
require_once 'Rugby.php';

    $arrayDeportes = [];
    $deportes = ['Futbol','Rugby','Basketball'];

    $arrayDeportes[] = $deportes[rand(0,2)];
    $arrayDeportes[] = $deportes[rand(0,2)];
    $arrayDeportes[] = $deportes[rand(0,2)];
    $arrayDeportes[] = $deportes[rand(0,2)];
    $arrayDeportes[] = $deportes[rand(0,2)];

    for ($i = 0; $i < count($arrayDeportes); $i++){
        if ($arrayDeportes[$i] == 'Rugby'){
            $arrayDeportes[$i] = new $arrayDeportes[$i]('Ensayos',7, 90, 1,5);
        }
        if ($arrayDeportes[$i] == 'Futbol'){
            $arrayDeportes[$i] = new $arrayDeportes[$i]('Goles',11, 90, 'Cancha de cesped');
        }
        if ($arrayDeportes[$i] == 'Basketball'){
            $arrayDeportes[$i] = new $arrayDeportes[$i]('Canastas',5, 90, 1,5);
        }
    }

    var_dump($arrayDeportes);
?>