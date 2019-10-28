<?php

/**
 * @Author DamianDev
 * @Scince 2019
 * @Email ing.gonzaleza@outlook.com 
 * 
 * IvyFrame es un proyecto opensource con la finalidad de crear una herramienta que permita a los desarroladores
 * crear aplicaciones escalables
 * 
 */

//Carga de la clase 'Autoload' de Composer
require __DIR__.'/vendor/autoload.php';


//Carga del core de funcionalidad del Framework
$app = new Core\Kernel;


$data = json_decode(file_get_contents("php://input"), true);

//Ejecucion de la aplicacion
$test = $app->run($data);



echo "<pre>";

var_dump($test);










