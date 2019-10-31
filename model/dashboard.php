<?php
if ( !defined('CMS_EXEC') ) { exit; }


class DashboardModel extends Model {



    public function getItems($user_id) {


		$db = Factory::getDb();
		
		$q = "SELECT a.active_item, b.title AS lessonTitle, a.lesson_id FROM `users_lessons` AS a ";
		$q .= "LEFT JOIN `lessons` AS b ON b.id = a.lesson_id ";
		$q .= "WHERE a.user_id = ".(int)$user_id;
		
		return $db->query($q);

    }



}

?>
