<?php
if ( !defined('CMS_EXEC') ) { exit; }


class CategoriesController extends Controller {

	
	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {
		
		$data = $this->model->getItems();
		$view->assign('data', $data);
				
	}
	
}
 	
?>