<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<title>Nathaniel Hoover's Homepage</title>
	<link rel="stylesheet" href="styles.css">
</head>
	
<header>
	<?php
		include 'nlhInclude.php';
		login();
	?>
</header>

<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="projects.php">Projects</a></li>
		<li><a href="about.php">About</a></li>
	</ul>
</nav>

<body>
	<section>
		<p>
			Testing 1
		</p>

		<p>
			Testing 2
		</p>
	</section>

	<aside>
		<p>
			Testing aside
		</p>
	</aside>
</body>

<footer>
	Nathaniel Hoover 2015
</footer>
</html>