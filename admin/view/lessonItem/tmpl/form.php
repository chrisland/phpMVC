<?php if ( !defined('CMSADMIN_EXEC') ) { exit; } ?>
<?php


/*

echo '<pre>';
print_r( urldecode( $this->_['data']['content'] ));
echo '</pre>';
*/



	?>
<h1>Lesson Item</h1>
<section class="edit">
	
<form action="?view=lessonItem&task=save" method="post">
	
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
			<label>Order</label>
			<input name="order" value="<?php echo $this->_['data']['order']; ?>" />
		</li>
		<li>
			<label>Title</label>
			<input name="title" value="<?php echo $this->_['data']['title']; ?>" />
		</li>
		<li>
			<label>Lesson</label>
			<select name="lesson_id">
				<?php foreach($this->_['lessons'] as $item) : ?>
					<?php
						$s = '';
						if ($this->_['data']['lesson_id'] == $item['id'] ) {
							$s = 'selected="selected"';
						}
					?>
					<option value="<?php echo $item['id']; ?>" <?php echo $s; ?>><?php echo $item['title']; ?></option>
				<?php endforeach; ?>
			</select>
		</li>
		<li>
			<label>Typ</label>
			<select name="typ_id">
				<?php foreach($this->_['lesson_typ'] as $item) : ?>
					<?php
						$s = '';
						if ($this->_['data']['typ_id'] == $item['id'] ) {
							$s = 'selected="selected"';
						}
					?>
					<option value="<?php echo $item['id']; ?>" <?php echo $s; ?>><?php echo $item['title']; ?></option>
				<?php endforeach; ?>
			</select>
		</li>
		<li>
			<label>Content</label>
			<textarea name="content"><?php echo urldecode( $this->_['data']['content'] ); ?></textarea>
		</li>
	</ul>

</form>

</section>