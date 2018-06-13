<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<center>
	  <form action="/eleven/exam1/index.php/Home/Index/do_insert" method="post">
		<table border="1">
			<tr>
				<td>标题</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><input type="text" name="content"></td>
			</tr>
			<tr>
				<td>留言者</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="发布"></td>
			</tr>
		</table>
	  </form>
	</center>
</body>
</html>