<?php
	class Blog {
		private $dbconnect = '';
		public function __construct() {
			require('dbconnect.php');
			// DB接続の値を代入
			$this->dbconnect = getDB();
		}

		public function index() {
			$sql = 'SELECT * FROM `blogs` WHERE `delete_flag`=0 ORDER BY `created` DESC';
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

		public function create($post) {
		      $sql = sprintf('INSERT INTO `blogs`(`title`, `body`, `delete_flag`, `created`) VALUES ("%s","%s",0,now())',
		      mysqli_real_escape_string($this->dbconnect, $post['title']),
		      mysqli_real_escape_string($this->dbconnect, $post['body']));
		      var_dump($sql);

		      mysqli_query($this->dbconnect, $sql) or die(mysqli_error());
		      header('Location: /seed_blog/blogs/index/');
		      exit();
		}

		public function edit($id) {
			$sql = sprintf('SELECT * FROM `blogs` WHERE `delete_flag`=0 AND `id`=%d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error());

			$rtn = mysqli_fetch_assoc($results);
			//取得結果を返す
			return $rtn;
		}

		public function update($id, $post) {
			$sql = sprintf('UPDATE `blogs` SET `title`="%s",`body`="%s",`modified`=now() WHERE `id`=%d',
			 	mysqli_real_escape_string($this->dbconnect, $post['title']),
		    	mysqli_real_escape_string($this->dbconnect, $post['body']),
		    	$id);

		    mysqli_query($this->dbconnect, $sql) or die(mysqli_error());
		    header('Location: /seed_blog/blogs/index/');
		    exit();
		}

		public function delete($id) {
			$sql = sprintf('UPDATE `blogs` SET `delete_flag`=1 WHERE `id`=%d', $id);

		    mysqli_query($this->dbconnect, $sql) or die(mysqli_error());
		    header('Location: /seed_blog/blogs/index/');
		    exit();
		}
	}
 ?>