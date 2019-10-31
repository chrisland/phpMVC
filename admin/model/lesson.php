<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonModel extends AdminModel {

	
	
	public function getItem($id) {  
		
		if (!$id) {
			return false;
		}
	
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `lessons` WHERE `id` = ".(int)$id );

	}  
	
	
	public function getCategories() {  
		
		$db = Factory::getDb();
		
		return $db->query("SELECT id, title FROM `categories` WHERE state = 0 ORDER BY title");
	
	}  
    

  
}
 	
?>