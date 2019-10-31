<?php
if ( !defined('CMS_EXEC') ) { exit; }


class CategoryModel extends Model {


	public function getItem($id) {  
		
		if (!$id) {
			return false;
		}
	
		
		$db = Factory::getDb();
		
		
		return $db->query("SELECT * FROM `lessons` WHERE `cat_id` = ".(int)$id." AND state = 0" );

	
	}  
  
}
 	
?>