<?php

// 練習問題
// (1) $familyName $firstName $age にそれぞれ自分の姓、名、年齢を代入せよ。
$familyName = 'たなか';
$firstName = 'まきこ';
$age = 72; 

// (2) 上記の変数とecho を使って「◯◯の年齢は☆☆歳です」とブラウザに表示せよ。
//     この際、文字列の連結を利用すること。

echo $familyName . $firstName . 'の年齢は' . $age . '歳です';

// (3) $fiveには整数型の5 $FIVEには文字列型の5 を代入し、
//     それぞれデータ型を var_dump() で確認せよ。

$five = 5;
$FIVE = '5';

var_dump($five);
var_dump($FIVE);

?>
