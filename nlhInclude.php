<?php
	function login(){
		$login = $_SESSION["login"];
		$password = $_SESSION["password"];
		$conn = new mysqli('cs.okstate.edu', 'nhoover', $password, 'nhoover');

		if ($conn->connect_error) { ?>
			<form action="admin.php" method="post">
				Login <input type="text" name="login">
				Password <input type="text" name="password">
				<input type="submit" value="Submit">"
			</form>
		<?php }else{
			echo "Logged in as: " . $_SESSION["login"];
			echo "<a href='admin.php'>Admin Page</a>";
		}
	}
?>