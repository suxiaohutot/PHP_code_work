<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户头像上传</title>
</head>
<body>
	<div class="box">
		<h2>编辑用户头像</h2>
		<p>用户姓名：小明</p>
		<form action="./upload_object.php" method="post" enctype="multipart/form-data">
			<p>上传头像：<input name="pic" type="file"/></p>
			<p><input class="sub" type="submit" value="保存头像"></p>
		</form>
	</div>
</body>
</html>
