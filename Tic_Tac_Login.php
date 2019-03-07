<?php
		session_start();
		$username = "user";
		$password = "password";
		$player1="Player 1";
		$player2="Player 2";
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
			header("Location: board.php");
		}
		if(isset($_POST['username']) && isset($_POST['password'])) {
			if($_POST['username'] == $username && $_POST['password'] == $password) {
				if(empty($_POST['player1']) == False) {
					
					$_SESSION['player1']=$_POST['player1'];
				}
				else {
					$_SESSION['player1'] = $player1;
				}
				if(empty($_POST['player2']) == False) {
					
					$_SESSION['player2']=$_POST['player2'];
				}
				else {
					$_SESSION['player2'] = $player2;
				}
				$_SESSION['logged_in'] == true;
				header("Location: board.php");
			}
		}
	?>
<!DOCTYPE html>
<html lang ="en">
	
	<head>
		<title> Tic-Tac-Toe Login</title>
		<link rel ="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="login_body">
			<h1 class="rainbow">Tic-Tac-Toe</h1>
		<form method="post" action="Tic_Tac_Login.php">
			<span>Username:</span><input type="text" name="username" placeholder="Username" required autofocus> <br/>
			<span>Password: </span><input type ="password"  name = "password" placeholder = "Password" required> <br/>
			<span>PlayerOne:</span><input type="text" name="player1" placeholder="Player"> <br/>
			<span>PlayerTwo:</span><input type="text" name="player2" placeholder="Player">
			<br/>
            <button type = "submit" name = "login">Login</button>
			</div>
		</form>
	</body>
	
</html>