<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>フォームの練習</title>
	</head>
	<body>
		<p>名前と感想を入力して下さい。</p>
		<form action="contact.php" method="post">
			名前:<input type="text" name="name"><br>
			感想:<input type="text" name="impression">
			<input type="submit" value="感想を投稿">
		</form>
	</body>
</html>
