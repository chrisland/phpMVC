<a href="../index.php" class="" target="_blank">Frontend</a>
<a href="index.php" class="">Backend</a>
<?php if ($_SESSION['adminID']): ?>
	<a href="?view=home&task=logout">Logout</a>
	<a href="?view=users" class="">Users</a>
	<a href="?view=categories" class="">Categories</a>
	<a href="?view=lessons" class="">Lessons</a>
	<a href="?view=lessonItems" class="">Lessons Items</a>
	<a href="?view=lessonTyps" class="">Lessons Typs</a>
<?php endif; ?>