<?php

// '' と "" の違い: echoするときに違う

$name = 'tanaka';

// "" 変数やエスケープ文字が展開される
echo "こんにちは $name さん";

// '' 展開されない
echo 'こんにちは $name さん';

// エスケープ文字
echo'\'';
echo "\t";
echo "あ\nあ";

?>
