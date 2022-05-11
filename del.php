<?php 
	$delete = $_GET["id"];
	require 'init.php';
	$sql= "DELETE FROM news where id =$delete";

	$pdo->query($sql);
	
	//require 'table.html';
	unset($pdo);
	header("Location:index.php");
 ?>