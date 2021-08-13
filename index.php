<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.pup.edu.ph/img/ico/favicon.ico" rel="icon" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title> PUPSIS | Login </title>
</head>

<body style="background-image: url(_img/PUP_main_bldg_-_santa_mesa,_manila.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container m-0 p-0">
        <div class="justify-content-center card float-left" style="width: 40%; height: 650px; margin: auto; background-color: rgba(255, 255, 255, .15); backdrop-filter: blur(3px);">
            <div class="text-center">
                <form action="code.php" method="POST" style="max-width: 55%; margin:auto;">
                    <img class="img-circle m-3" alt="PUP LOGO" src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" />
                    <h3 class="box-title text-center">Hi, PUPian!</h3>
                    <section id="introduction">
                        <p>↓ Please click or tap your destination.</p>
                    </section>
                    <!-- <div class="mt-3 mb-4">
                        <button class="btn btn-lg btn-primary btn-block" name="log-in-submit"><a href="index.php">Student</a></button>
                    </div>
                    <div class="mt-3 mb-4">
                        <button class="btn btn-lg btn-danger btn-block" name="log-in-submit"><a href="user_management.php">Admin</a></button>
                    </div> -->
                    <div class="mt-3 mb-4">
                        <a class="btn btn-lg btn-primary btn-block" href="student/main.php" role="button">Student</a>
                    </div>
                    <div class="mt-3 mb-4">
                        <a class="btn btn-lg btn-danger btn-block" href="admin/admin.php" role="button">Admin</a>
                    </div>
                    <div class="card-footer">
                        <div class="text-center font-weight-light m-0 p-0">
                            <p>Copyright © 2069<br>All rights reserved.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>