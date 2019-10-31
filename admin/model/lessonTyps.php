<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonTypsModel extends AdminModel {


	
    public function getItems() {  
		
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `lesson_typ` ORDER BY id ");

    }  
    

  
}
 	
?>