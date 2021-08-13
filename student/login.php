<?php
session_start();
require_once "../__database_connection/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function showPrompt()
	{
		echo "<div class='alert alert-success'>" . $_SESSION['prompt'] . "</div>";
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: main.php?error=Username Required");
		exit();
	} else if (empty($pass)) {
		header("Location: main.php?error=Password Required");
		exit();
	} else {

		// pag hash ng password
		$pass = md5($pass);


		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $uname && $row['password'] === $pass) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['last_name'] = $row['last_name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['section'] = $row['section'];
				header("Location: ../subject_registration/home.php");
				exit();
			} else {
				header("Location: main.php?error=Invalid Student Number/Password");
				exit();
			}
		} else {
			header("Location: main.php?error=Invalid Student Number/Password");
			exit();
		}
		mysqli_close($connect);
	}
} else {
	header("Location: main.php");
	exit();
}
