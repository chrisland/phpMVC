<?php if ( !defined('CMS_EXEC') ) { exit; } ?>

<h1>Dashboard</h1>
<section class="articles">
<?php if ( $this->_['data'] ): ?>

	<?php foreach($this->_['data'] as $item): ?>

		<div class="item">
			<h2><?php echo $item['lessonTitle']; ?></h2>
			
			<?php if ($item['active_item'] == 0): ?>
				<a href="?view=course&lesson_id=<?php echo $item['lesson_id']; ?>">Starten</a>
			
			<?php else: ?>
				<a href="?view=course&item_id=<?php echo $item['active_item']; ?>">Weiter...</a>
			<?endif; ?>
			
		</div>

	<?php endforeach; ?>

<?php else: ?>

	No Entry!

<? endif; ?>
</section>
