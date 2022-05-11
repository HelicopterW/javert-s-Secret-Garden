<?php
//引入连接数据库的代码
require 'init.php';
$n = "abc";
//拼写SQL语句 查询id 标题 时间 时间升序
$sql = 'select id,title,addtime from news order by addtime desc';
//数据库对象 
//query 执行sql语句
//返回PDOStatement对象
$stmt = $pdo->query($sql); 
//var_dump($stmt);

//处理结果集 $data 查询的新闻数组
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);  
//调用PDOStatement对象的fetchAll()方法处理结果集
//var_dump($data);
//载入HTML模板
require 'news.html';