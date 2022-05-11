<!--<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
</head>

<body>
	<form action="" method="POST">
        
          <label>用户名：</label>
          <input type="text" name="uname">
          <label>密码：</label>
          <input type="text" name="pwd">
        <button type="submit" >登录</button>
      </form>

</body>-->
		<?php
	require'content.php';
	header("content-type:text/html;charset=utf-8");
	
	$username = $_POST['uname'];
	$password = $_POST['pwd'];
	$sql = "select * from user where username='$username' and password = '$password'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_num_rows($result);
	if($row){
		header('Location:news.html');
		echo"<script>alert('登录成功');window.location.href='news.html'<script/>";
	}else{
		echo"<script>alert('账户或密码错误');location.href='logins.html'</script>";
	}
	require'index.html';
	
?>
</html>
