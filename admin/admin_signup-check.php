<?php
session_start();
require_once "../__database_connection/db_conn.php";

if (
	isset($_POST['uname']) && isset($_POST['password'])
	&& isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['email'])
) {

	//para iwas sa mysql injection
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);

	$user_data = 'uname=' . $uname . '&name=' . $name;

	// Given password
	$password = $pass;

	//Validate Name
	$fullname = preg_match("/^[a-zA-Z-.' ]*$/", $name);

	// Validate password strength
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);

	$username_pattern = '/' . '^ADMIN-[a-zA-Z0-9_.-]*$/' . '';
	$valid_username = preg_match($username_pattern, $uname);

	if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
		header("Location: admin_signup.php?error=Invalid email format&$user_data");
		exit();
	}
	if (empty($uname)) {
		header("Location: admin_signup.php?error=Username Required&$user_data");
		exit();
	} else if (!$valid_username) {
		header("Location: admin_signup.php?error=Username Format: ADMIN-[username]&$user_data");
		exit();
	} else if (empty($pass)) {
		header("Location: admin_signup.php?error=Password Required&$user_data");
		exit();
	} else if (empty($re_pass)) {
		header("Location: admin_signup.php?error=Retype Password&$user_data");
		exit();
	} else if (empty($name)) {
		header("Location: admin_signup.php?error=Name Required&$user_data");
		exit();
	} else if (!$fullname) {
		header("Location: admin_signup.php?error=Invalid Name&$user_data");
		exit();
	} else if (strlen($name) < 6) {
		header("Location: admin_signup.php?error=Invalid Name&$user_data");
		exit();
	} else if (strlen($pass) < 8) {
		header("Location: admin_signup.php?error=Password should be at least 8 characters in length&$user_data");
		exit();
	} else if (!$uppercase || !$lowercase) {
		header("Location: admin_signup.php?error=Password should include at least one upper case letter.&$user_data");
		exit();
	} else if ($pass !== $re_pass) {
		header("Location: admin_signup.php?error=The confirmation password  does not match&$user_data");
		exit();
	} else {

		// hashing the password
		$pass = md5($pass);

		$sql = "SELECT * FROM admin_users WHERE user_name='$uname' ";
		$result = mysqli_query($connect, $sql);

		$sql3 = "SELECT * FROM admin_users WHERE email='$email' ";
		$result3 = mysqli_query($connect, $sql3);

		if (mysqli_num_rows($result) > 0) {
			header("Location: admin_signup.php?error=Username Already Exists&$user_data");
			exit();
		} else if (mysqli_num_rows($result3) > 0) {
			header("Location: admin_signup.php?error=Email Already Exists&$user_data");
			exit();
		} else {
			$sql2 = "INSERT INTO admin_users(user_name, password, name, email) VALUES('$uname', '$pass', '$name', '$email')";
			$result2 = mysqli_query($connect, $sql2);
			if ($result2) {
				header("Location: admin.php?success=Account Created Successfully");
				exit();
			} else {
				header("Location: admin_signup.php?error=Unknown Error Occurred&$user_data");
				exit();
			}
		}
		mysqli_close($connect);
	}
} else {
	header("Location: admin_signup.php");
	exit();
}
