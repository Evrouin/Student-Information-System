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

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin.php?error=Username Required");
		exit();
	} else if (empty($pass)) {
		header("Location: admin.php?error=Password Required");
		exit();
	} else {

		// pag hash ng password
		$pass = md5($pass);


		$sql = "SELECT * FROM admin_users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $uname && $row['password'] === $pass) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: home.php");
				exit();
			} else {
				header("Location: admin.php?error=Invalid Username/Password");
				exit();
			}
		} else {
			header("Location: admin.php?error=Invalid Username/Password");
			exit();
		}
		mysqli_close($connect);
	}
} else {
	header("Location: admin.php");
	exit();
}
