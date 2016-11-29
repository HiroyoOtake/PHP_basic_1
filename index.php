<?php

$score = 40;
$age = 20;

if ($score >= 50)
{
	echo '合格';
}
elseif($score >= 40 && $age >= 18)
{
	echo '再試験';
}
else
{
	echo '不合格';
}

?>
