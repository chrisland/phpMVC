<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class CategoryView extends AdminView {
	
	public function __construct($viewFolder, $request) {
		parent::__construct($viewFolder, $request);
	}
	
	
	public function display() {

		// Do something...
		
		return $this->loadTemplate();
	
	}
	

}
 	
?>