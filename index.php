<?php

// 配列 連想配列 の練習問題
//
// // 1) 以下のような配列が与えられている。この時に、イヌと出力するには下記の???に何を入力すればよいか答えよ。

$animals = array('イヌ', 'ネコ', 'うさぎ');

echo $animals[0];

// 2)
// // 次のような連想配列が与えられている。この場合に、 卓球 と出力するには???に何を入力すればよいか答えよ。


$sports = array(
'サッカー' => '蹴球',
'ベースボール' => '野球',
'バスケットボール' => '籠球',
'ピンポン' => '卓球'
);

echo $sports['ピンポン'];

// 3) var_dump($fruits); としたとき、下記の内容が出力されるような$fruitsを定義せよ。

// array(4) {
// 	["red"] =>
// 	string(5) "apple"
// 	["yellow"] =>
// 	string(6) "banana"
// 	["green"] =>
// 	string(5) "melon"
// 	["purple"] =>
// 	string(5) "grape"
// }

$fruits = array(
	'red' => 'apple',
	'yellow' => 'banana',
	'green' => 'melon',
	'purple' => 'grape'
	);

var_dump($fruits)

?>
