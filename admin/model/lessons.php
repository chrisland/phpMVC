<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class LessonsModel extends AdminModel {


	
    public function getItems() {  
		
		
		$db = Factory::getDb();
		
		$q = "SELECT a.*, b.title as catTitle FROM `lessons` AS a ";
		$q .= "LEFT JOIN `categories` AS b ON b.id = a.cat_id ";
		$q .= "ORDER BY id";
		
		
		return $db->query($q);

    }  
    

  
}
 	
?>