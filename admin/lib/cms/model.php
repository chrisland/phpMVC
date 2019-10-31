<?php
include('../lib/cms/model.php');

class AdminModel extends Model {
	
	public function save($table, $data) {
		
		if (!$table || !$data) {
			return false;
		}
		$db = Factory::getDb();
		
		if ( $data['id'] ) {
			$id = $data['id'];
			unset($data['id']);
			$c = '';
			foreach($data as $k => $v) {
				if ($c != '') {
					$c .= ', ';
				}
				$c .= '`'.$k.'`="'.$v.'"';
			}
			$q = "UPDATE ".$table." SET ".$c." WHERE id=".(int)$id;
			//echo $q;
			$db->query($q);
			return $id;
			
		} else {
			
			$c = '';
			foreach($data as $k => $v) {
				if ($c != '') {
					$c .= ', ';
				}
				$c .= '"'.$v.'"';
			}
			
			$q = "INSERT INTO ".$table." (`".implode(array_keys($data),'`, `')."`) VALUES (".$c.")";
			$db->query($q);
			return $db->insertID();
		}
		return false;
		
		
		
	}

}
?>