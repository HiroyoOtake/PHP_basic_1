<?php

$animals = array('dog','cat','rabbit');

// echo $animals[2];

$animals[] = 'elephant';

// echo $animals[3];

// var_dump($animals);

$animals[0] = 'bat';

unset($animals[0]);

print_r($animals);
?>
