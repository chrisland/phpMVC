<?php
if ( !defined('CMS_EXEC') ) { exit; }


class CategoriesModel extends Model {


	
    public function getItems() {  
		
		
		$db = Factory::getDb();
		
		return $db->query("SELECT * FROM `categories` WHERE state = 0 ORDER BY title ");

    }  
    

  
}
 	
?>