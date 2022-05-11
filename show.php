<?php 
	require 'init.php';
	// $id = isset($_GET['id']) ? (int)$_GET['id']:1;
	$id = $_GET['id'];
	
	$sql = "select title,addtime,content,author from news where id=$id";
	$stmt = $pdo->query($sql);
	if($stmt == false)
	{
		unset($pdo);
		exit("很抱歉，您查看的商品找不到了！");
	}

	$data = $stmt->fetch(PDO::FETCH_ASSOC);
    
	
	//$data = mysqli_fetch_assoc($stmt);
	//var_dump($data);
	unset($pdo);
	require 'show.html';	
 ?>