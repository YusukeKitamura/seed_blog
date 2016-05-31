<?php
  // DB接続準備
	function getDB() {
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$dbName = 'seed_blog';
		$charSet = 'utf8';
		$db = mysqli_connect($host, $user, $password, $dbName) or die(mysqli_connect_error());
		mysqli_set_charset($db, $charSet);
		return $db;
	}

 ?>
