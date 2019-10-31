<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonTypController extends AdminController {

	
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
			"title" => trim($view->request['title'])
		);
		
		$id = $this->model->save('lesson_typ', $data);
		
		header('Location: '.URL.'?view=lessonTyp&layout=form&id='.$id);
		
		return true;

	}
	
}
 	
?>