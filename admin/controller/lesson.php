<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonController extends AdminController {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {

		$data = $this->model->getItem($view->request['id']);
		if ($data[0]) {
			$view->assign('data', $data[0]);
		}
		
		$view->assign('categories', $this->model->getCategories() );
		
				
	}
	
	public function save($view) {
		
		$data = array(
			"id" => trim($view->request['id']),
			"state" => trim($view->request['state']),
			"title" => trim($view->request['title']),
			"cat_id" => trim($view->request['cat_id'])
		);
		
		$id = $this->model->save('lessons', $data);
		
		header('Location: '.URL.'?view=lesson&layout=form&id='.$id);
		
		return true;

	}
	
}
 	
?>