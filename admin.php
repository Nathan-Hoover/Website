<?php 
	session_start();
	if(isset($_POST['Logout'])){
		session_destroy();
		header("Refresh:0");
	}
	if( isset($_POST['login']) && isset($_POST['password'])){
		$_SESSION["login"] = $_POST["login"];
		$_SESSION["password"] = $_POST["password"];
	}
	include 'nlhInclude.php'; 
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<header>
	<?php
		login();
	?>
</header>

<nav>
	<?php
		navBar();
	?>
</nav>

<body>
	
	<section>
		<p>
			Create a Article
		</p>
	</section>

	<aside>
		<p>
			Edit an Article
		</p>
	</aside>

</body>

<footer>
	<?php
		footerBar();
	?>
</footer>

</html>