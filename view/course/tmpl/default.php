<?php if ( !defined('CMS_EXEC') ) { exit; } ?>

<?php

/*
echo '<pre>';
print_r($this);
echo '</pre>';
	
*/

?>

<h1>COURSE</h1>

<?php if ( $this->_['item'] ): ?>

	<?php echo $this->_['item']['title']; ?>
	
	<?php
		$content = json_decode(urldecode($this->_['item']['content']));
		
		switch ($this->_['item']['typ_id']) {
			
			case 1:
				include('_video.php');
				break;
				
			case 2:
				include('_text.php');
				break;
				
		}	
	?>
	
<?php else: ?>

	No Entry!
	
<? endif; ?>

<?php if($this->_['next']): ?>
	<a href="?view=course&item_id=<?php echo $this->_['next']['id']; ?>">Next</a>
<?php else: ?>
	<a href="?view=dashboard">Finish</a>
<?php endif; ?>