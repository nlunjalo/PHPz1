<?php
if(!isset($_GET['menu'])) {$_GET['menu']=0;}

	# DB Conn
	include ("dbconn.php");

print '
<!DOCTYPE html>
<html>
	<head>
		<meta description="">
		<meta keywords="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
        <meta name="description" content="Programiranje Web Aplikacija">
        <meta name="keywords" content="WEB, zadatak, VVG">
		<meta name="author" content="Nikola Šamec">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/style.css">
		<title>Projektni zadatak Web Aplikacije</title>
		<style>
    
		</style>
	</head>
<body>
	<header>

<div';
if ($_GET['menu'] > 0) { print ' class="banner-subimage"'; } else { print ' class="banner"'; }
print '></div>
    
    <nav>
';

include("nav.php");


print '
    </nav>
    </header>
	<main>

';


if($_GET['menu']==1) {
        include("html/onama.php");
}
else if ($_GET['menu']==2) {
        include("html/kontakt.php");
}
else if ($_GET['menu']==3) {
        include("html/galerija.php");
}
else if ($_GET['menu']==4) {
        include("html/novosti.php");
}
else  include("html/html.php");
print '
	








	    
	</main>
	<footer>
	&copy; Copyright 2018. Nikola Å amec


	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Add font awesome icons -->
	<a href="https://www.linkedin.com/in/nikolsamec/" target="_blank" class="fa fa-facebook"></a>
	<a href="https://twitter.com/nikolasamec" target="_blank" class="fa fa-twitter"></a>
	<a href="https://github.com/nlunjalo" target="_blank" class="fa fa-github"></a>
	</footer>
	</body>
</html>
';
?>