<?php
if ( !defined('CMS_EXEC') ) { exit; }


class CourseController extends Controller {


	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {
		



	
		if ( $view->request['item_id'] == 0 ) {
			// Erstzugriff
			
			$data = $this->model->getFirst( $view->request['lesson_id'] );
			
		} else {
			//wiederkehrend
			$data = $this->model->getItem( $view->request['item_id'] );
		}
		
		$view->assign('item', $data[0] );
		

		
		$next = $this->model->getNextItem($data[0]['lesson_id'], (int)$data[0]['order'] +1);
		$view->assign('next', $next[0] );

		


/*
		echo '<pre>';
		print_r($data);
		echo '</pre>';
*/


		
		$this->model->setActive($data[0]['id'], $data[0]['lesson_id'], $_SESSION['userID'] );
		

		
/*

		$data = $this->model->getItem($view->request['id']);

		$view->assign('title', $data[0]['title']);
*/

	}
	

	
	
}

?>
