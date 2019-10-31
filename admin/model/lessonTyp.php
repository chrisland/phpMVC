<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonTypModel extends AdminModel {

	
	
	public function getItem($id) {  
		
		if (!$id) {
			return false;
		}
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `lesson_typ` WHERE `id` = ".(int)$id );

	}  

  
}
 	
?>