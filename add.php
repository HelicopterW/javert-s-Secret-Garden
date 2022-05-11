<?php 
	require 'init.php';
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_POST["title"];
		$num = $_POST["content"];
		$aut = $_POST["author"];
		
		//插入语句
		$sql = "INSERT INTO news (title,content,author) VALUES ('$name','$num','$aut')";

		if ($pdo->query($sql)) {//执行sql语句
	    echo "新记录插入成功";
		} 
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}					
	}
	unset($pdo);
	require 'add.html';
 ?>