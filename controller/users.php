<?php
if ( !defined('CMS_EXEC') ) { exit; }


class UsersController extends Controller {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {
		

		
	}
	
	public function login($view) {
	
		
		$name = trim($view->request['name']);
		$password = md5(trim($view->request['password']));
		
		if (!$name || !$password) {
			$view->assign('error', 'Missing Data...');
			return false;
		}

		
		$db = Factory::getDb();

		
		$result = $db->query("SELECT `id` FROM `users` WHERE `name` = '".$name."' AND `pass` = '".$password."' ");
		

		
		if ($result && $result[0] && $result[0]['id']) {
			$_SESSION['userID'] = $result[0]['id'];
		} else {
			$view->assign('error', 'Missing User...');
			return false;
		}
		
		
		if ($view->request['returnUrl']) {
			header('Location: '.URL.$view->request['returnUrl']);
		}
		
		return false;
	}
	
	public function logout($view) {
		
		$_SESSION['userID'] = false;
		
		if ($view->request['returnUrl']) {
			header('Location: '.URL.$view->request['returnUrl']);
		} else {
			header('Location: '.URL);
		}
		
		return false;
	}
	
	public function register($view) {
		

		$name = trim($view->request['name']);
		$password = md5(trim($view->request['password']));
		$password2 = md5(trim($view->request['password2']));
		
		if ($password != $password2) {
			$view->assign('error', 'Password are not the same!');
			return false;
		}
		
		if (!$name || !$password) {
			$view->assign('error', 'Missing Data...');
			return false;
		}
		
		
		$db = Factory::getDb();

		
		$db->query("INSERT INTO `users` (`name`, `pass`) VALUES ('".$name."', '".$password."')");
		
		if ($view->request['returnUrl']) {
			header('Location: '.URL.$view->request['returnUrl']);
		}
		
		return false;
	}
	
	
}
 	
?>