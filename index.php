<?php

$animals = array('イヌ', 'ネコ', 'うさぎ');

// for ($i = 0; $i <= 2; $i++)
// {
// 	echo $animals[$i];
// }

foreach ($animals as $animal)
{
	echo $animal . '<br>';
}

$fruits = array(
	'red' => 'apple',
	'yellow' => 'banana',
	'green' => 'melon',
	'purple' => 'grape'
	);

// foreach (対象となる配列 as ラベルの名前 => 要素の名前)
foreach ($fruits as $color =>  $fruit)
{
	echo $fruit . 'の色は' . $color . '<br>';
}


?>
