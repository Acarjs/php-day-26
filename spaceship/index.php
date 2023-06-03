<?php 

require_once './Spaceship.php';
require_once './Captain.php';


$first_spaceship = new Spaceship('USS Enterprise');
$second_spaceship = new Spaceship('Kobayashi Maru');

$my_spaceship = new Spaceship('Car');

$millenium_falcon = new Spaceship('Millenium Falcon');


$first_spaceship->goForward();
$first_spaceship->getName();

var_dump($first_spaceship->getName());

$my_spaceship->goForward();


$millenium_falcon->fly(120);

$millenium_falcon->setName('Millenium Falcon II');

// var_dump($first_spaceship);
// var_dump($my_spaceship);
// var_dump($millenium_falcon);


$han = new Captain('Han','Solo');
$han->addSkill('pilot');
$han->addSkill('joke around');
$han->addSkill('kiss Leia');


$millenium_falcon->captain = $han;

$new_captain = new Captain('Anil','Acar');
$millenium_falcon->assignCaptain($new_captain);
// $millenium_falcon->captain = $new_captain;


// print_r($millenium_falcon->captain);