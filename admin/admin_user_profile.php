<?php
session_start();
require_once "../__database_connection/db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.pup.edu.ph/img/ico/favicon.ico" rel="icon" type="image/x-icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>PUP SIS | Subjects</title>
    </head>

    <body>
        <?php require_once "../admin_navbar.php" ?>
        <div class="container w-100 p-3">
            <div class="card" style="max-width: 50%;">
                <div class="card-header mb-2">
                    <h5>Student Profile </h5>
                </div>
                <div class="card-body p-4 mt-0">
                    <table class='table tbldsp'>
                        <tbody>
                            <?php

                            // $con =  mysqli_connect("localhost", "root", "", "webdev");
                            $query = "SELECT * FROM admin_users WHERE user_name = '" . $_SESSION['user_name'] . "' AND name = '" . $_SESSION['name'] . "'";

                            if ($result = mysqli_query($connect, $query)) {

                                $row = mysqli_fetch_assoc($result);
                            ?>

                                <tr>
                                    <td><strong>Admin Username</strong></td>
                                    <td> <?= $row['user_name']; ?> </td>
                                </tr>
                                <tr>
                                    <td><strong>Admin Name</strong></td>
                                    <td> <?= $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td> <?= $row['email']; ?> </td>
                                </tr>
                            <?php
                                mysqli_close($connect);
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="options">
                        <a class="btn btn-success" href="admin_change_password.php">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>