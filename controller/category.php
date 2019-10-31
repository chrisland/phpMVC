<?php
if ( !defined('CMS_EXEC') ) { exit; }


class CategoryController extends Controller {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {
		
		$data = $this->model->getItem($view->request['id']);

		$view->assign('data', $data);
		
	}
}
 	
?>