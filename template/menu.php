  	<a href="index.php" class="title">eLearning</a>
  	<a href="?view=categories">Categories</a>
  	<a href="?view=lessons">Lessons</a>

	<?php if ($_SESSION['userID']): ?>
		<a href="?view=dashboard">Dashboard</a>
		<a href="?view=users&task=logout">Logout</a>
	<? else: ?>
		<a href="?view=users&layout=register">Register</a>
		<a href="?view=users">Login</a>
	<?php endif; ?>
	<a href="admin/index.php" class="title">Backend</a>
	