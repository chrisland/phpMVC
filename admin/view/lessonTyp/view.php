<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonTypView extends AdminView {
	
	public function __construct($viewFolder, $request) {
		parent::__construct($viewFolder, $request);
	}
	
	
	public function display() {

		// Do something...
		
		return $this->loadTemplate();
	
	}
	

}
 	
?>