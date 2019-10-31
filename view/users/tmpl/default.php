<?php if ( !defined('CMS_EXEC') ) { exit; } ?>

<h1>Login</h1>

<?php if ($this->_['error']): ?>
	<p><?php echo $this->_['error']; ?></p>
<?php endif; ?>

<form action="?view=users&task=login" method="post">
	<input type="text" name="name" placeholder="Username" />
	<input type="text" name="password" placeholder="Password" />
	<input type="text" name="returnUrl" value="?view=dashboard" />
	<input type="submit" value="Login" />
</form>