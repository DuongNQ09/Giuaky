<?php

class Database
{
	public $conn = NULL;
	private $server = 'localhost';
	private $dbName = 'quanlysach';
	private $user = 'root';
	private $password = '';
        
        // Hàm kết nối CSDL
	public function connect()
	{
		$conn = new mysqli($server, $user, $password, $dbName);

		if ($conn->connect_error) {
			printf($conn->connect_error);
			exit();
		}
		$conn->set_charset("utf8");
	}
        // Hàm đóng kết nối CSDL
        public function closeDatabase()
	{
		if ($conn) {
			$conn->close();
		}
	}
}