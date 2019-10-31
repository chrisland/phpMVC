<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonItemsModel extends AdminModel {


	
    public function getItems() {  
		
		
		$db = Factory::getDb();
		
		
		$q = "SELECT a.*, b.title as lessonTitle, c.title as typTitle FROM `lesson_item` AS a ";
		$q .= "LEFT JOIN `lessons` AS b ON b.id = a.lesson_id ";
		$q .= "LEFT JOIN `lesson_typ` AS c ON c.id = a.typ_id ";
		$q .= "ORDER BY id";
		
		
		return $db->query($q);

    }  
    

  
}
 	
?>