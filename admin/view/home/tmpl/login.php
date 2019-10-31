<?php if ( !defined('CMSADMIN_EXEC') ) { exit; } ?>

<h1>Admin Login</h1>

<?php if ($this->_['error']): ?>
	<p><?php echo $this->_['error']; ?></p>
<?php endif; ?>

<form action="?view=home&task=login" method="post">
	<input type="text" name="name" placeholder="Username" />
	<input type="text" name="password" placeholder="Password" />
	<input type="text" name="returnUrl" value="?view=home" />
	<input type="submit" value="Login" />
</form>