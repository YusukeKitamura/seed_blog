<?php
	//①GETパラメータ取得
	//explode関数：第２引数の文字列を第１引数で分解し、配列で返す
	$params = explode('/',$_GET['url']);

	//②パラメータの分解
	$resource = $params[0];
	$action = $params[1];
	$id = 0;
	$post = array();

	//idがあった場合はidも取得する
	if (isset($params[2])) {
		$id = $params[2];
	}

	if (isset($_POST) && !empty($_POST)) {
		$post = $_POST;
	}

	//③コントローラの呼び出し
	require('controllers/'.$resource.'_controller.php');
?>
