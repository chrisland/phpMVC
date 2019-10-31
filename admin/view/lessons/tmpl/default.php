<?php if ( !defined('CMSADMIN_EXEC') ) { exit; } ?>
<?php

/*
echo '<pre>';
print_r($this);
echo '</pre>';
*/

	?>
<h1>Lessons</h1>
<a href="?view=lesson&layout=form">New</a>
<section class="list">
<?php if ( $this->_['data'] ): ?>
	
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<td></td>
				<td>ID</td>
				<td>State</td>
				<td>Category</td>
				<td>Title</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->_['data'] as $item): ?>
				<tr>
					<td><a href="?view=lesson&layout=form&id=<?php echo $item['id']; ?>">[edit]</a></td>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo $item['state']; ?></td>
					<td><?php echo $item['catTitle']; ?></td>
					<td><?php echo $item['title']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>

	No Entry!
	
<? endif; ?>
</section>