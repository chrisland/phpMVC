<?php if ( !defined('CMS_EXEC') ) { exit; } ?>
<?php
/*
	echo '<pre>';
print_r($this);
echo '</pre>';
*/
	?>
<section class="articles">
<?php if ( isset($this->_['data'])): ?>

	<?php foreach($this->_['data'] as $item): ?>
	
		<div class="item">
			<h2><?php echo $item['title']; ?></h2>
			<a href="?view=category&id=<?php echo $item['id']; ?>">mehr lesen....</a>
		</div>
		
	<?php endforeach; ?>
	
<?php else: ?>

	No Entry!
	
<? endif; ?>
</section>