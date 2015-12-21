<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>华西医院</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/normalize.css">
	<link rel="stylesheet" href="__PUBLIC__/huaxi-midical-success.css">
</head>
<body>
	<section>
		<div>
			<!-- <h1>欢迎进入华西口腔</h1> -->
			<form action="<?php echo U('Register/register');?>">
				<label  >用户名:</label><input class="text-input" type="text" name="username">
				<br>
				<label  >密码:</label><input class="text-input  " type="password" name="pwd">
				<br>
				<!-- <label for="email" >确认密码:</label><input class="text-input  " type="email" name="pwd"> -->
				<input class="botton" type="submit" value="提交">
			</form>
		</div>
	</section>
</body>
</html>