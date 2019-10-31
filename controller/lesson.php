<?php
if ( !defined('CMS_EXEC') ) { exit; }


class LessonController extends Controller {


	public function __construct($request) {
		parent::__construct($request);
	}

	public function show($view) {

		$data = $this->model->getItem($view->request['id']);

		$view->assign('title', $data[0]['title']);

	}
	
	
	public function buchen($view) {
		
		
		if(!$_SESSION['userID']) {
			header('Location: '.URL.'?view=users');	
			return false;
		}
		
		$db = Factory::getDb();
		$data = $db->query("SELECT active_item FROM `users_lessons` WHERE `lesson_id` = ".(int)$view->request['id']." AND user_id = ".(int)$_SESSION['userID'] );
		
		
		if ($data) {
			header('Location: '.URL.'?view=dashboard');		
		} else {
			$db->query("INSERT INTO `users_lessons` (`user_id`, `lesson_id`, `active_item`) VALUES ('".$_SESSION['userID']."', '".$view->request['id']."', 0)");
			
			$view->setTemplate('thanks');
			
		}
		
		 
	}
	
	
}

?>
