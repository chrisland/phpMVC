<?php if ( !defined('CMSADMIN_EXEC') ) { exit; } ?>
<?php


/*

echo '<pre>';
print_r($this);
echo '</pre>';
*/



	?>
<h1>Lesson</h1>
<section class="edit">
	
<form action="?view=lesson&task=save" method="post">
	
	<input type="submit" value="Save" />
	
	<ul>
		<li>
			<label>ID</label>
			<input name="id" class="readonly" readonly="true" value="<?php echo $this->_['data']['id']; ?>" />
		</li>
		<li>
			<label>State</label>
			<select name="state">
				<option value="0" <?php if($this->_['data']['state'] == 0): ?>selected="selected"<?php endif; ?>>Publish</option>
				<option value="1" <?php if($this->_['data']['state'] == 1): ?>selected="selected"<?php endif; ?>>Unpublish</option>
			</select>
		</li>
		<li>
			<label>Title</label>
			<input name="title" value="<?php echo $this->_['data']['title']; ?>" />
		</li>
		<li>
			<label>Category</label>
			<select name="cat_id">
				<?php foreach($this->_['categories'] as $item) : ?>
					<?php
						$s = '';
						if ($this->_['data']['cat_id'] == $item['id'] ) {
							$s = 'selected="selected"';
						}
					?>
					<option value="<?php echo $item['id']; ?>" <?php echo $s; ?>><?php echo $item['title']; ?></option>
				<?php endforeach; ?>
			</select>
		</li>
		
	</ul>

</form>

</section>