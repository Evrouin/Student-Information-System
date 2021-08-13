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
            <form action="admin_change_password_check.php" method="post" style="max-width: 50%;">
                <div class="card">
                    <div class="card-header mb-3">
                        <h5>Change Password </h5>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="alert alert-warning" role="alert"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></p>
                        <?php } ?>

                        <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                        <br>

                        <input type="password" name="new_password" class="form-control" placeholder="New Password">
                        <br>

                        <input type="password" name="confirm_new_password" class="form-control" placeholder="Confirm New Password">
                        <br>

                        <button class="btn btn-md btn-primary btn-block" type="submit">Save New Password</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>