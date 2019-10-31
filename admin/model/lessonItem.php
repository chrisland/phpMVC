<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonItemModel extends AdminModel {

	
	
	public function getItem($id) {  
		
		if (!$id) {
			return false;
		}
	
		
		$db = Factory::getDb();
		
		
		return $db->query("SELECT * FROM `lesson_item` WHERE `id` = ".(int)$id );

	
	}  
	
	public function getLessons() {  
		
		$db = Factory::getDb();
		
		return $db->query("SELECT id, title FROM `lessons` WHERE state = 0 ORDER BY title");
	
	}  
	
	public function getLessonTyp() {  
		
		$db = Factory::getDb();
		
		return $db->query("SELECT id, title FROM `lesson_typ` WHERE state = 0 ORDER BY title");
	
	}  
    

  
}
 	
?>