<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
</body>
	<?php
	$link = mysqli_connect('localhost','root','root','newsdb');
	mysqli_set_charset($link,'utf8');
	echo $link ? '连接成功' : '连接失败';
	?>
</html>
