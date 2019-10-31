<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class UserModel extends AdminModel {

	
	
	public function getItem($id) {  
		
		if (!$id) {
			return false;
		}
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `users` WHERE `id` = ".(int)$id );

	}  

  
}
 	
?>