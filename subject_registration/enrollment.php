<?php
session_start();

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
        <title>PUP SIS | Enrollment</title>
    </head>

    <body>
        <?php require_once "../student_navbar.php" ?>
        <div class="container p-3">
            <div class="card">
                <div class="card-header">
                    <h6>School Year 2021 Second Semester</h6>
                </div>
                <div class="card-body mb-0">
                    <form action="code.php" method="POST">
                        <table class="table table-bordered tbldsp">
                            <thead>
                                <tr>
                                    <th style="text-align:center;  width:2%"></th>
                                    <th style="text-align:center;  width:2%">#</th>
                                    <th style="text-align:center;  width:10%">Subject Code</th>
                                    <th style="text-align:center;  width:30%">Description</th>
                                    <th style="text-align:center;  width:20%">Faculty Name</th>
                                    <th style="text-align:center;  width:5%">Units</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COMP 20053 - Information Assurance and Security"></td>
                                    <td style="text-align:center">1</td>
                                    <td style="text-align:center">COMP 20053</td>
                                    <td>Information Assurance and Security</td>
                                    <td>LIBUNAO, ALEXIS ACUÑA</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COMP 20153 - Software Engineering 1"></td>
                                    <td style="text-align:center">2</td>
                                    <td style="text-align:center">COMP 20153</td>
                                    <td>Software Engineering 1</td>
                                    <td>ESPINELI, JUANCHO D.</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COMP 20163 - Web Development"></td>
                                    <td style="text-align:center">3</td>
                                    <td style="text-align:center">COMP 20163</td>
                                    <td>Web Development</td>
                                    <td>NOVIDA, MARILOU FERNANDEZ</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COMP 20173 - Data Communications and Networking"></td>
                                    <td style="text-align:center">4</td>
                                    <td style="text-align:center">COMP 20173</td>
                                    <td>Data Communications and Networking</td>
                                    <td>VIOLETA, MARIEL LEO T.</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COSC 30073 - Introduction to Artificial Intelligence"></td>
                                    <td style="text-align:center">5</td>
                                    <td style="text-align:center">COSC 30073</td>
                                    <td>Introduction to Artificial Intelligence</td>
                                    <td>DELA FUENTE, MICHAEL B.</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COSC 40013 - CS Thesis Writing 1"></td>
                                    <td style="text-align:center">6</td>
                                    <td style="text-align:center">COSC 40013</td>
                                    <td>CS Thesis Writing 1</td>
                                    <td>TAN, MARY JANE M.</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                                <tr>
                                    <td style="width:2%"><input type='checkbox' name='subjects[]' value="COSC-E2 - CS Elective 2"></td>
                                    <td style="text-align:center">7</td>
                                    <td style="text-align:center">COSC-E2</td>
                                    <td>CS Elective 2</td>
                                    <td>ESPINELI, JUANCHO D.</td>
                                    <td style="text-align:center">3.0</td>

                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group mt-3 mb-1">
                            <button type="submit" name="submit-checkbox" class="btn btn-md btn-primary btn-block">Enroll</button>
                        </div>
                        <?php
                        if (isset($_SESSION['success'])) {
                            echo "<div class='alert alert-success' role='alert'>";
                            echo "<h6>" . $_SESSION['success'] . "</h6>";
                            echo "</div>";
                            unset($_SESSION['success']);
                        } else if (isset($_SESSION['error'])) {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "<h6>" . $_SESSION['error'] . "</h6>";
                            echo "</div>";
                            unset($_SESSION['error']);
                        }
                        ?>
                    </form>
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