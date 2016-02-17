<?php
	class Blog {
		private $dbconnect = '';
		public function __construct() {
			require('dbconnect.php');
			// DB接続の値を代入
			$this->dbconnect = $db;
		}

		public function index() {
			$sql = 'SELECT * FROM `blogs` WHERE `delete_flag`=0';
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error());

			$rtn = array();
			while($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			//取得結果を返す
			return $rtn;
		}

		public function show($id) {
			$sql = sprintf('SELECT * FROM `blogs` WHERE `delete_flag`=0 AND `id`=%d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error());

			$rtn = mysqli_fetch_assoc($results);
			//取得結果を返す
			return $rtn;
		}

		public function add() {

		}

		public function create() {

		}

		public function edit($id) {
			$sql = sprintf('SELECT * FROM `blogs` WHERE `delete_flag`=0 AND `id`=%d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error());

			$rtn = mysqli_fetch_assoc($results);
			//取得結果を返す
			return $rtn;
		}

		public function update($id) {
			$sql = sprintf('SELECT * FROM `blogs` WHERE `delete_flag`=0 AND `id`=%d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error());

			$rtn = mysqli_fetch_assoc($results);
			//取得結果を返す
			return $rtn;
		}

		public function delete($id) {
			$sql = sprintf('SELECT * FROM `blogs` WHERE `delete_flag`=0 AND `id`=%d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error());

			$rtn = mysqli_fetch_assoc($results);
			//取得結果を返す
			return $rtn;
		}
	}
 ?>