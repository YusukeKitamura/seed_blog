<?php

	require('models/blog.php');

	$controller = new BlogsController();
	//アクションによって呼び出すメソッドを変える
	//$actionはroutes.phpで定義されているもの
	switch ($action) {
		case 'index':
			$controller->index();
			break;
		case 'show':
			$controller->show();
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
			include('views/layout/application.php');
		}

		public function show() {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->show();

			foreach ($this->viewOptions as $viewOption) {
				echo $viewOption['id'];
				echo $viewOption['title'];
				echo $viewOption['created'];
			}
			$this->action = 'show';

			//ビューを呼び出す
			include('views/layout/application.php');
		}
	}

 ?>