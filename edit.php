<?php 
	require "init.php";
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		echo "用户点击了修改";
		$name = $_POST["title"];
		$num = $_POST["content"];
		$sid = $_GET["id"];
		$sql = "update news set title='$name',content='$num' where id=$sid";
		$stmt = $pdo->query($sql); 

		header("Location:index.php");
	}
	
	$sid = $_GET["id"];
	$sql = "select title,content from news where id=$sid";
	$stmt = $pdo->query($sql); 

	$data = $stmt->fetch(PDO::FETCH_ASSOC);

	$name = $data["title"];
	$phone = $data["content"];
	unset($pdo);
	require "edit.html";
 ?>