<?php

require_once 'civic.php';

$myCar = new civic();

var_dump($myCar->honk());
var_dump($myCar->getYear());
$myCar->setYear(1995);
var_dump($myCar->getYear());




?>