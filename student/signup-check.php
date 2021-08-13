<?php
session_start();
require_once "../__database_connection/db_conn.php";

if (
	isset($_POST['uname'])
	&& isset($_POST['password'])
	&& isset($_POST['name'])
	&& isset($_POST['last_name'])
	&& isset($_POST['re_password'])
	&& isset($_POST['email'])
	&& isset($_POST['section'])
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
	$last_name = validate($_POST['last_name']);
	$email = validate($_POST['email']);

	$section = validate($_POST['section']);

	$user_data = 'uname=' . $uname . '&name=' . $name;

	// Given password
	$password = $pass;

	//Validate Name
	$fullname = $name . " " . $last_name;
	$valid_fullname = preg_match("/^[a-zA-Z-.' ]*$/", $fullname);

	// Validate password strength
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);

	//Validate Webmail Domain (cinopy ko from the regex for @gmail.com)
	$valid_email_domain = preg_match('|^[A-Z0-9._%+-]+@iskolarngbayan.pup.edu\.ph$|i', $email);
	//Validate Student Number ({year}-{number}={manila branch initial}-{0})
	$username_pattern = '/' . '^\d{4}-\d{5}-MN-0$/' . '';
	$valid_username = preg_match($username_pattern, $uname);


	if (empty($uname)) {
		header("Location: signup.php?error=Student Number Required&$user_data");
		exit();
	} else if (!$valid_username) {
		header("Location: signup.php?error=Invalid Student Number&$user_data");
		exit();
	} else if (empty($name)) {
		header("Location: signup.php?error=First Name Required&$user_data");
		exit();
	} else if (empty($last_name)) {
		header("Location: signup.php?error=Last Name Required&$user_data");
		exit();
	} else if (strlen($name) < 3) {
		header("Location: signup.php?error=Invalid Name&$user_data");
		exit();
	} else if (strlen($last_name) < 3) {
		header("Location: signup.php?error=Invalid Name&$user_data");
		exit();
	} else if (!$valid_fullname) {
		header("Location: signup.php?error=Invalid Name&$user_data");
		exit();
	} else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
		header("Location: signup.php?error=Invalid Email Format&$user_data");
		exit();
	} else if (!$valid_email_domain) {
		header("Location: signup.php?error=Invalid Email Address&$user_data");
		exit();
	} else if (empty($pass)) {
		header("Location: signup.php?error=Password Required&$user_data");
		exit();
	} else if (empty($re_pass)) {
		header("Location: signup.php?error=Retype Password&$user_data");
		exit();
	} else if (strlen($pass) < 8) {
		header("Location: signup.php?error=Password must be at least 8 characters&$user_data");
		exit();
	} else if (!$uppercase || !$lowercase) {
		header("Location: signup.php?error=Password must have at least 1 UPPERCASE character&$user_data");
		exit();
	} else if ($pass !== $re_pass) {
		header("Location: signup.php?error=Invalid Confirmation Password&$user_data");
		exit();
	} else {

		// hashing the password
		$pass = md5($pass);

		$sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($connect, $sql);

		$sql3 = "SELECT * FROM users WHERE email='$email' ";
		$result3 = mysqli_query($connect, $sql3);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Student Number Already Exists&$user_data");
			exit();
		} else if (mysqli_num_rows($result3) > 0) {
			header("Location: signup.php?error=Email Already Exists&$user_data");
			exit();
		} else {
			$sql2 = "INSERT INTO users(user_name, password, name, last_name, email, section) VALUES('$uname', '$pass', '$name', '$last_name', '$email', '$section')";
			$result2 = mysqli_query($connect, $sql2);
			if ($result2) {
				header("Location: login.php?success=Account Created Successfully");
				exit();
			} else {
				header("Location: signup.php?error=Unknown Error Occurred&$user_data");
				exit();
			}
		}
		mysqli_close($connect);
	}
} else {
	header("Location: signup.php");
	exit();
}
