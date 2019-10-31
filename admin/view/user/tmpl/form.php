<?php if ( !defined('CMSADMIN_EXEC') ) { exit; } ?>
<?php


/*
echo '<pre>';
print_r($this);
echo '</pre>';
*/


	?>
<h1>User</h1>
<section class="edit">
	
<form action="?view=user&task=save" method="post">
	
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
			<label>Name</label>
			<input name="name" value="<?php echo $this->_['data']['name']; ?>" />
		</li>
		<li>
			<label>Role</label>
			<select name="role">
				<option value="" <?php if(!$this->_['data']['role']): ?>selected="selected"<?php endif; ?>>User</option>
				<option value="admin" <?php if($this->_['data']['role'] == "admin"): ?>selected="selected"<?php endif; ?>>Admin</option>
			</select>
		</li>
	</ul>

</form>

</section>