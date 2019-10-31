<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class UserController extends AdminController {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {

		$data = $this->model->getItem($view->request['id']);
		if ($data[0]) {
			$view->assign('data', $data[0]);
		}
				
	}
	
	public function save($view) {
		
		$data = array(
			"id" => trim($view->request['id']),
			"state" => trim($view->request['state']),
			"name" => trim($view->request['name']),
			"role" => trim($view->request['role'])
		);
		
		$id = $this->model->save('users', $data);
		
		header('Location: '.URL.'?view=user&layout=form&id='.$id);
		
		return true;

	}
	
}
 	
?>