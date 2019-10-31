<?php
if ( !defined('CMS_EXEC') ) { exit; }


class LessonView extends View {

	public function __construct($viewFolder, $request) {
		parent::__construct($viewFolder, $request);
	}
	

	
	public function display() {

		// Do something...
		
		$this->addJS('view/lesson/tmpl/script.js');

		return $this->loadTemplate();

	}
	
	

}

?>
