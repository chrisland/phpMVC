<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonTypsController extends AdminController {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {
		
		$data = $this->model->getItems();
		$view->assign('data', $data);
				
	}
	
}
 	
?>