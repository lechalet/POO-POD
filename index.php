<?php
// index.php

require_once 'Bicycle.php';
$bike = new Bicycle('mbk rocket');
var_dump($bike);
$bike->getColor('blue');
$bike->getCurrentSpeed = 0;
var_dump($bike); 
// then, another dump.

// Moving bike
echo $bike->forward(20);
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake(30);
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(20) . ' km/h' . '<br>';
echo $bike->brake(20);

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('purple');
$rockrider->getColor('yellow');
var_dump($rockrider);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('white');
$tornado->getColor('black');
$tornado->forward(20);
var_dump($tornado);

// Challenge 
require_once 'car.php';
$car = new Car('green', '5', 'sans plomb 95');
var_dump($car);

// Moving car
echo $car->forward(20);
echo '<br>';
echo $car->brake(20);
echo '<br>';
echo $car->curb(19);













