<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class UserView extends AdminView {
	
	public function __construct($viewFolder, $request) {
		parent::__construct($viewFolder, $request);
	}
	
	
	public function display() {

		// Do something...
		
		return $this->loadTemplate();
	
	}
	

}
 	
?>