<?php
if ( !defined('CMS_EXEC') ) { exit; }


class CourseModel extends Model {


	public function getItem($item_id) {

		if (!$item_id) {
			return false;
		}


		$db = Factory::getDb();


		return $db->query("SELECT * FROM `lesson_item` WHERE `id` = ".(int)$item_id );


	}
	
	
	public function getFirst($lesson_id) {

		if (!$lesson_id) {
			return false;
		}
		
		$db = Factory::getDb();


		return $db->query("SELECT * FROM `lesson_item` WHERE `order` = 1 AND `lesson_id` =".(int)$lesson_id );


	}
	
	
	public function getNextItem($lesson_id, $order) {
		
		if (!$lesson_id) {
			return false;
		}
		if (!$order) {
			return false;
		}


		$db = Factory::getDb();

		return $db->query("SELECT id FROM `lesson_item` WHERE `order` = ".(int)$order." AND `lesson_id` = ".(int)$lesson_id );



	}
	
	
	public function setActive($item_id, $lesson_id, $user_id) {
		
		if (!$item_id) {
			return false;
		}
		if (!$lesson_id) {
			return false;
		}
		if (!$user_id) {
			return false;
		}
		
		$db = Factory::getDb();
		$db->query("UPDATE users_lessons SET `active_item` = ".(int)$item_id." WHERE `user_id` = ".(int)$user_id." AND `lesson_id` = ".(int)$lesson_id );
		
		return true;
		
	}

}

?>
