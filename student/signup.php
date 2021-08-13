<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.pup.edu.ph/img/ico/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title> PUPSIS | Signup </title>
</head>

<body style="background-image: url(../_img/PUP.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container">
        <div class="justify-content-center mt-4 mb-4 card" style="background-color: rgba(255, 255, 255, .15); backdrop-filter: blur(2px);">
            <div class="text-center mt-4 mb-4">
                <form action="signup-check.php" method="post" style="max-width: 30%; margin:auto;">
                    <a href="signup.php"><img class=" img-circle" alt="PUP LOGO" src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" /></a>
                    <h3 class="box-title text-center"><strong>PUP-SIS</strong> Student Module</h3>
                    <section id="introduction">
                        <p>Sign up to start your session</p>
                    </section>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="alert alert-warning" role="alert"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['uname'])) { ?>
                        <input type="text" name="uname" class="form-control" placeholder="Student Number" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php } else { ?>
                        <input type="text" name="uname" class="form-control" placeholder="Student Number"><br>
                    <?php } ?>

                    <?php if (isset($_GET['name'])) { ?>
                        <input type="text" name="name" class="form-control" placeholder="First Name" value="<?php echo $_GET['name']; ?>"><br>
                    <?php } else { ?>
                        <input type="text" name="name" class="form-control" placeholder="First Name"><br>
                    <?php } ?>

                    <?php if (isset($_GET['last_name'])) { ?>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo $_GET['name']; ?>"><br>
                    <?php } else { ?>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name"><br>
                    <?php } ?>

                    <?php if (isset($_GET['section'])) { ?>
                        <select name="section" class="form-control">
                            <option value="" disabled selected>Section</option>
                            <option value="BSCS 3-1">BSCS 3-1</option>
                            <option value="BSCS 3-2">BSCS 3-2</option>
                            <option value="BSCS 3-3">BSCS 3-3</option>
                            <option value="BSCS 3-4">BSCS 3-4</option>
                            <option value="BSCS 3-1N">BSCS 3-1N</option>
                            <option value="BSCS 3-P">BSCS 3-P</option>
                        </select><br>
                    <?php } else { ?>
                        <select name="section" class="form-control">
                            <option value="" disabled selected>Section</option>
                            <option value="BSCS 3-1">BSCS 3-1</option>
                            <option value="BSCS 3-2">BSCS 3-2</option>
                            <option value="BSCS 3-3">BSCS 3-3</option>
                            <option value="BSCS 3-4">BSCS 3-4</option>
                            <option value="BSCS 3-1N">BSCS 3-1N</option>
                            <option value="BSCS 3-P">BSCS 3-P</option>
                        </select><br>
                    <?php } ?>

                    <?php if (isset($_GET['email'])) { ?>
                        <input type="email" name="email" class="form-control" placeholder="username@iskolarngbayan.pup.edu.ph" value="<?php echo $_GET['uname']; ?>"><br>
                    <?php } else { ?>
                        <input type="email" name="email" class="form-control" placeholder="username@iskolarngbayan.pup.edu.ph"><br>
                    <?php } ?>

                    <input type="password" name="password" class="form-control" placeholder="Password"><br>

                    <input type="password" name="re_password" class="form-control" placeholder="Retype Password"><br>

                    <div>
                        <button class="btn btn-lg btn-primary btn-block" name="submit">Sign Up</button>
                    </div>
                    <a href="main.php" class="ca">Already have an account?</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>