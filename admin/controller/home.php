<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class HomeController extends AdminController {

	
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

		
		$result = $db->query("SELECT `id` FROM `users` WHERE `role` = 'admin' AND `name` = '".$name."' AND `pass` = '".$password."' ");
		
		
		if ($result && $result[0] && $result[0]['id']) {
			$_SESSION['adminID'] = $result[0]['id'];
		} else {
			$view->assign('error', 'Wrong Data...');
			return false;
		}
		
		
		if ($view->request['returnUrl']) {
			header('Location: '.URL.$view->request['returnUrl']);
		}
		
		return false;
	}
	
	public function logout($view) {
		
		$_SESSION['adminID'] = false;
		
		if ($view->request['returnUrl']) {
			header('Location: '.URL.$view->request['returnUrl']);
		} else {
			header('Location: '.URL);
		}
		
		return false;
	}
	
}
 	
?>