<?php if ( !defined('CMS_EXEC') ) { exit; } ?>



<?php if ( $this->_['title'] ): ?>

	<h1><?php echo $this->_['title']; ?></h1>
	
	<div id="buchen_open">Buchen</div>
	
	<div id="buchen_wrap" class="hidden">
		<a href="?view=lesson&task=buchen&id=<?php echo $this->request['id']; ?>">Buchen</a>
		<div id="buchen_close">Abbrechen</div>
	</div>
	
<?php else: ?>

	No Entry!
	
<? endif; ?>

