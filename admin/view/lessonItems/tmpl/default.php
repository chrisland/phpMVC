<?php if ( !defined('CMSADMIN_EXEC') ) { exit; } ?>
<?php

/*
echo '<pre>';
print_r($this);
echo '</pre>';
*/

	?>
<h1>Lesson Items</h1>
<a href="?view=lessonItem&layout=form">New</a>
<section class="list">
<?php if ( $this->_['data'] ): ?>
	
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<td></td>
				<td>ID</td>
				<td>State</td>
				<td>Title</td>
				<td>Lesson</td>
				<td>Typ</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->_['data'] as $item): ?>
				<tr>
					<td><a href="?view=lessonItem&layout=form&id=<?php echo $item['id']; ?>">[edit]</a></td>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo $item['state']; ?></td>
					<td><?php echo $item['title']; ?></td>
					<td><?php echo $item['lessonTitle']; ?></td>
					<td><?php echo $item['typTitle']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>

	No Entry!
	
<? endif; ?>
</section>