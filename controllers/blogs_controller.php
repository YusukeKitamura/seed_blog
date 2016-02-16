<?php

	require('models/blog.php');

	$controller = new BlogsController();
	//アクションによって呼び出すメソッドを変える
	//$actionはroutes.phpで定義されているもの
	switch ($action) {
		case 'index':
			$controller->index();
			break;
		default:
			break;
	}

	//$controller->index();

	class BlogsController {
		private $action = '';
		private $resource = '';
		private $viewOptions = '';

		public function index() {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->index();

			foreach ($this->viewOptions as $viewOption) {
				echo $viewOption['id'];
				echo $viewOption['title'];
				echo $viewOption['created'];
			}
			$this->action = 'index';

			//ビューを呼び出す
			require('views/layout/application.php');
		}
	}

 ?>