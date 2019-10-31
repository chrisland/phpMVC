<?php
if ( !defined('CMSADMIN_EXEC') ) { exit; }


class CategoriesModel extends AdminModel {


	
    public function getItems() {  
		
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `categories` ORDER BY id ");

    }  
    

  
}
 	
?>