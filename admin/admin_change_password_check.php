<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once "../__database_connection/db_conn.php";

    if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $old_password = validate($_POST['old_password']);
        $new_password = validate($_POST['new_password']);
        $confirm_new_password = validate($_POST['confirm_new_password']);

        $uppercase = preg_match('@[A-Z]@', $new_password);
        $lowercase = preg_match('@[a-z]@', $new_password);

        if (empty($old_password)) {
            header("Location: admin_change_password.php?error=Old Password is required");
            exit();
        } else if (empty($new_password)) {
            header("Location: admin_change_password.php?error=New Password is required");
            exit();
        } else if ($new_password !== $confirm_new_password) {
            header("Location: admin_change_password.php?error=The confirmation password  does not match");
            exit();
        } else if ($old_password == $new_password && $old_password == $confirm_new_password) {
            header("Location: admin_change_password.php?error=The old password cannot be the new password");
            exit();
        } else if (strlen($new_password) < 8) {
            header("Location: admin_change_password.php?error=Password should be at least 8 characters in length&$user_data");
            exit();
        } else if (!$uppercase || !$lowercase) {
            header("Location: admin_change_password.php?error=Password should include at least one upper case letter.&$user_data");
            exit();
        } else {
            // hashing the password
            $old_password = md5($old_password);
            $new_password = md5($new_password);
            $id = $_SESSION['id'];

            $sql = "SELECT password FROM admin_users WHERE id='$id' AND password='$old_password'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) === 1) {

                $sql_2 = "UPDATE admin_users SET password='$new_password' WHERE id='$id'";
                mysqli_query($connect, $sql_2);
                header("Location: admin_change_password.php?success=Your password has been changed successfully");
                exit();
            } else {
                header("Location: admin_change_password.php?error=Incorrect password");
                exit();
            }
        }
    } else {
        header("Location: admin_change_password.php");
        exit();
    }
} else {
    header("Location: admin_change_password.php");
    exit();
}
