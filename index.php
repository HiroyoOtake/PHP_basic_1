<?php

/**
if と for を組み合わせた練習問題

(1) 1から100までの数字を表示せよ。
(2) 1から100までの数字のうち、奇数のみを表示せよ。
(3) 1から100までの数字を表示せよ。ただし、3の倍数のときにはFizzと表示せよ。
(4) 1から100までの数字を表示せよ。ただし、3の倍数のときにはFizz, 5の倍数のときはBuzz, 3と5の公倍数の時にはFizzBuzzと表示せよ。

*/

// (1)

for ($i = 1; $i <=100; $i++) {
	echo $i;
}

echo '<br>';

// (2)

// for ($i = 1; $i <=100; $i++) {
// 	if ($i % 2 == 1) {
// 	echo $i;
// 	}
// }

for ($i = 1; $i <=100; $i+=2) {
	echo $i;
}

echo '<br>';

// (3)

for ($i = 1; $i <=100; $i++)
{
	if ($i % 3 == 0)
       	{
		echo 'Fizz';
	}
	else
	{
		echo $i;
	}
}

echo '<br>';

// (4)

for ($i = 1; $i <=100; $i++)
{
	if ($i % 3 == 0 && $i % 5 == 0)
	{
		echo 'FizzBuzz';
	}
	elseif	($i % 3 == 0)
       	{
		echo 'Fizz';
	}
	elseif ($i % 5 == 0)
       	{
		echo 'Buzz';
	}
	else
	{
		echo $i;
	}
}

?>
