<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class UsersModel extends AdminModel {


	
    public function getItems() {  
		
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `users` ORDER BY id ");

    }  
    

  
}
 	
?>