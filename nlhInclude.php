<?php
	function login(){
		
		if(isset($_SESSION["login"]) && isset($_SESSION["password"])){
			$login = $_SESSION["login"];
			$password = $_SESSION["password"];
			$conn = new mysqli('cs.okstate.edu', 'nhoover', $password, 'nhoover');
			if ($conn->connect_error) { ?>
				<form action="admin.php" method="post">
					Login <input type="text" name="login">
					Password <input type="text" name="password">
					<input type="submit" value="Submit">
				</form>
				<?php
			}else{
			echo "<form action='admin.php' method='post'>Logged in as: " . $_SESSION["login"] . 
				"  <input type='submit' name='Logout' value='Logout'></form>";
			}
		 }else{
		 	?>
			<form action="admin.php" method="post">
				Login <input type="text" name="login">
				Password <input type="text" name="password">
				<input type="submit" value="Submit">
			</form>
			<?php
		 }
	}

	function navBar(){
		?>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="projects.php">Projects</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
		<?php
	}

	function footerBar(){
		?>
		<a href="admin.php">Nathaniel Hoover 2015</a>
		<?php
	}
?>