<?php
session_start();
require_once "../__database_connection/db_conn.php";

if (isset($_POST['submit-checkbox'])) {

    $subjects = $_POST['subjects'];
    $first_name = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $name = $first_name . " " . $last_name;
    $username = $_SESSION['user_name'];
    $section = $_SESSION['section'];

    try {
        foreach ($subjects as $sub) {
            $query = "INSERT INTO subjects (subject_code, student_number, full_name, section) VALUES ('$sub', '$username', '$name', '$section')";
            $query_run = mysqli_query($connect, $query);
        }

        if ($query_run) {
            $_SESSION['success'] = "You are now enrolled to this subjects!";
            header("Location: subjects.php");
        } else {
            $_SESSION['error'] = "Error Occured!";
            header("Location: enrollment.php");
        }
    } catch (Exception $e) {
        $_SESSION['error'] = "Unknown Error Occured";
        header("Location: enrollment.php");
    }
}

if (isset($_POST['delete_subjects'])) {
    $all_id = $_POST['delete_subject'];
    $extract_id = implode(',', $all_id);

    $name = $_SESSION['name'];
    $username = $_SESSION['user_name'];
    $query = "DELETE FROM subjects WHERE student_number = ('$username') AND subject_code IN ($extract_id)";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['success'] = "Subjects Deleted";
        header("Location: subjects.php");
    } else {
        $_SESSION['error'] = "Error Occured";
        header("Location: subjects.php");
    }
}
