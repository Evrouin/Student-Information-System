<?php
session_start();
require "../__database_connection/db_conn.php";
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
        <?php require_once "../student_navbar.php" ?>
        <div class="container w-100 p-3">
            <div class="card">
                <div class="card-header">
                    <h6>Enrolled Subjects S/Y 2020-2021: </h6>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <table class="table table-bordered tbldsp">
                            <thead>
                                <th style="text-align:center;  width:5%">#</th>
                                <th style="text-align:center;  width:80%">Subject</th>
                                <th style="text-align:center;  width:15%"><button type="submit" name="delete_subjects" class="btn btn-sm btn-primary">Delete</button></th>
                            </thead>
                            <tbody>
                                <?php
                                $first_name = $_SESSION['name'];
                                $last_name = $_SESSION['last_name'];
                                $name = $first_name . " " . $last_name;
                                $username = $_SESSION['user_name'];
                                $query = "SELECT * FROM subjects WHERE student_number='$username' AND full_name='$name'";
                                $query_run = mysqli_query($connect, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $counter = 1;
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $counter++ ?></td>
                                            <td style="text-align: center;"><?= $row['subject_code']; ?></td>
                                            <td style="text-align: center;">
                                                <input type="checkbox" name="delete_subject[]" value="'<?= $row['subject_code']; ?>'">
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="3"> No record found!</td>
                                    </tr>
                                <?php
                                }

                                ?>
                            </tbody>
                        </table>
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
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>