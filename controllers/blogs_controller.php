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
			$controller->create($post);
			break;
		case 'edit':
			$controller->edit($id);
			break;
		case 'update':
			$controller->update($id, $post);
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
			$this->action = 'add';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function create($post) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->create($post);

			$this->action = 'index';

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

		public function update($id, $post) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->update($id, $post);

			$this->action = 'index';

			//ビューを呼び出す
			include('views/layout/application.php');
		}

		public function delete($id) {
			//ここでモデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->delete($id);

			$this->action = 'index';

			//ビューを呼び出す
			include('views/layout/application.php');
		}
	}

 ?>