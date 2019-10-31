<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonItemController extends AdminController {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {

		$data = $this->model->getItem($view->request['id']);
		if ($data[0]) {
			$view->assign('data', $data[0]);
		}
		
		$view->assign('lessons', $this->model->getLessons() );
		$view->assign('lesson_typ', $this->model->getLessonTyp() );
				
	}
	
	public function save($view) {
		
		$data = array(
			"id" => trim($view->request['id']),
			"state" => trim($view->request['state']),
			"title" => trim($view->request['title']),
			"typ_id" => trim($view->request['typ_id']),
			"lesson_id" => trim($view->request['lesson_id']),
			"order" => trim($view->request['order']),
			"content" => urlencode(trim($view->request['content']))
		);
		
		$id = $this->model->save('lesson_item', $data);
		
		header('Location: '.URL.'?view=lessonItem&layout=form&id='.$id);
		
		return true;

	}
	
}
 	
?>