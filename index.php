<html>
<?php
	require('model/connect.php');
	$db = new Database;
	$db->connect();

	$db->closeDatabase();
?>
<head>
	<title>Trang chủ
</title>
</head>
<body>
	<a href="Sach.php">Đăng nhập</a>
</body>
</html>