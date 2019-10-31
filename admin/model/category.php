<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class CategoryModel extends AdminModel {

	
	
	public function getItem($id) {  
		
		if (!$id) {
			return false;
		}
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `categories` WHERE `id` = ".(int)$id );

	}  

  
}
 	
?>