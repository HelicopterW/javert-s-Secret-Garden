<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
</body>
	<?php
	require'content.php';
	header("content-type:text/html;charset=utf-8");
	$username = $_POST["uname"];
	$password = $_POST["pwd"];
	$db = mysql_connect("localhost","root","root");
	mysql_select_db("newsdb",$db);
	$sql = "insert into user(`username`,`password`) values('$username','$password')";
	$row = mysqli_query($link,$sql);
	
	if($row){
		header('Location:logins.html');
		echo"<script>alert('注册成功');location.href='logins.html'</stcript>";
		
	}else{
		echo"<script>alert('注册失败');location.href='registers.html';</script>";
	}
	
	?>
</html>
