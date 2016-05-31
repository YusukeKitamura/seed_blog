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
			$controller->show($id);
			break;
		case 'add':
			$controller->add();
			break;
		case 'create':
			$controller->create();
			break;
		case 'edit':
			$controller->edit($id);
			break;
		case 'update':
			$controller->update($id);
			break;
		case 'delete':
			$controller->delete($id);
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

			$this->action = 'index';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function show($id) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->show($id);

			$this->action = 'show';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function add() {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->add();

			$this->action = 'add';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function create() {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->create();

			$this->action = 'create';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function edit($id) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->edit($id);

			$this->action = 'edit';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function update($id) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->update($id);

			$this->action = 'update';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function delete($id) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->delete($id);

			$this->action = 'delete';

			//ビューを呼び出す
			include('views/layout/application.php');
		}
	}

 ?>