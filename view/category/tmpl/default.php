<?php if ( !defined('CMS_EXEC') ) { exit; } ?>

<?php if ( $this->_['data'] ): ?>

		<?php foreach($this->_['data'] as $item): ?>
		
			<div class="item">
				<h2><?php echo $item['title']; ?></h2>
				<a href="?view=lesson&id=<?php echo $item['id']; ?>">mehr...</a>
			</div>
			
		<?php endforeach; ?>
	
<?php else: ?>

	No Entry!
	
<? endif; ?>