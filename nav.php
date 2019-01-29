<?php
print '
<!DOCTYPE html>
<html>
		<link rel="stylesheet" href="css/style.css">
<body>
<header>
<ul>
<nav>
	<li><a href="index.php?menu=0">Pocetak</a></li>
	<li><a href="index.php?menu=1">O nama</a></li>
	<li><a href="index.php?menu=2">Kontakt</a></li>
	<li><a href="index.php?menu=3">Galerija</a></li>
    <li><a href="index.php?menu=4">Novosti</a></li>';
if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
print '
	<li><a href="index.php?menu=5">Registracija</a></li>
	<li><a href="index.php?menu=6">SignIn</a></li>';
}
else if ($_SESSION['user']['valid'] == 'true') {
print '
	<li><a href="index.php?menu=7">Admin</a></li>
	<li><a href="signout.php">Sign Out</a></li>';
}
print '
    
</nav>
</ul>
</header>
</body>
</html>
';
?>