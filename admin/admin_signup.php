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
          <div class="justify-content-center mt-4 mb-4 card" style="margin: auto; max-width: 80%; background-color: rgba(255, 255, 255, .15); backdrop-filter: blur(2px);">
               <div class="text-center mt-4 mb-4">
                    <form action="admin_signup-check.php" method="post" style="max-width: 30%; margin:auto;">
                         <a href="admin_signup.php"><img class=" img-circle" alt="PUP LOGO" src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" /></a>
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

                         <?php if (isset($_GET['name'])) { ?>
                              <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?php echo $_GET['name']; ?>"><br>
                         <?php } else { ?>
                              <input type="text" name="name" class="form-control" placeholder="Full Name"><br>
                         <?php } ?>

                         <?php if (isset($_GET['uname'])) { ?>
                              <input type="text" name="uname" class="form-control" placeholder="Admin Username" value="<?php echo $_GET['uname']; ?>"><br>
                         <?php } else { ?>
                              <input type="text" name="uname" class="form-control" placeholder="Admin Username"><br>
                         <?php } ?>

                         <?php if (isset($_GET['email'])) { ?>
                              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_GET['uname']; ?>"><br>
                         <?php } else { ?>
                              <input type="email" name="email" class="form-control" placeholder="Email"><br>
                         <?php } ?>

                         <input type="password" name="password" class="form-control" placeholder="Password"><br>

                         <input type="password" name="re_password" class="form-control" placeholder="Retype Password"><br>

                         <div>
                              <button class="btn btn-lg btn-primary btn-block" name="submit">Sign Up</button>
                         </div>
                         <a href="admin.php" class="ca">Already have an account?</a>
                    </form>
               </div>
          </div>
     </div>
</body>

</html>