<?php
session_start();
require_once "function.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>PUP Admin | Student List </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <?php require_once "../admin_navbar.php" ?>
        <div class="container w-100 p-3">
            <div class="card">
                <div class="card-header w-100">
                    <h6>School Year 2021 Second Semester</h6>
                </div>
                <div class="card-body">
                    <div class="accordion p-3" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                    COMP 20053 - Information Assurance and Security
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <table class="table table-bordered tbldsp">
                                        <thead>
                                            <th style="text-align:center;  width:5%">#</th>
                                            <th style="text-align:center;  width:50%">Subject</th>
                                            <th style="text-align:center;  width:30%">Student Name</th>
                                            <th style="text-align:center;  width:60%">Section</th>
                                        </thead>
                                        </tbody>
                                        <?php
                                        $subject_code = "COMP 20053 - Information Assurance and Security";
                                        displayStudentSubjectTable($subject_code);
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    COMP 20153 - Software Engineering 1
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <table class="table table-bordered tbldsp">
                                        <thead>
                                            <th style="text-align:center;  width:5%">#</th>
                                            <th style="text-align:center;  width:50%">Subject</th>
                                            <th style="text-align:center;  width:30%">Student Name</th>
                                            <th style="text-align:center;  width:60%">Section</th>
                                        </thead>
                                        <?php
                                        $subject_code = "COMP 20153 - Software Engineering 1";
                                        displayStudentSubjectTable($subject_code);
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    COMP 20163 - Web Development
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <table class="table table-bordered tbldsp">
                                        <thead>
                                            <th style="text-align:center;  width:5%">#</th>
                                            <th style="text-align:center;  width:50%">Subject</th>
                                            <th style="text-align:center;  width:30%">Student Name</th>
                                            <th style="text-align:center;  width:60%">Section</th>
                                        </thead>
                                        </tbody>
                                        <?php
                                        $subject_code = "COMP 20163 - Web Development";
                                        displayStudentSubjectTable($subject_code);
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"" aria-expanded=" false" aria-controls="panelsStayOpen-collapseFour"">
                                    COMP 20173 - Data Communications and Networking
                                </button>
                            </h2>
                            <div id=" panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour"">
                                <div class=" accordion-body">
                                    <table class="table table-bordered tbldsp">
                                        <thead>
                                            <th style="text-align:center;  width:5%">#</th>
                                            <th style="text-align:center;  width:50%">Subject</th>
                                            <th style="text-align:center;  width:30%">Student Name</th>
                                            <th style="text-align:center;  width:60%">Section</th>
                                        </thead>
                                        </tbody>
                                        <?php
                                        $subject_code = "COMP 20173 - Data Communications and Networking";
                                        displayStudentSubjectTable($subject_code);
                                        ?>
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            COSC 30073 - Introduction to Artificial Intelligence
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <table class="table table-bordered tbldsp">
                                <thead>
                                    <th style="text-align:center;  width:5%">#</th>
                                    <th style="text-align:center;  width:50%">Subject</th>
                                    <th style="text-align:center;  width:30%">Student Name</th>
                                    <th style="text-align:center;  width:60%">Section</th>
                                </thead>
                                </tbody>
                                <?php
                                $subject_code = "COSC 30073 - Introduction to Artificial Intelligence";
                                displayStudentSubjectTable($subject_code);
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                            COSC 40013 - CS Thesis Writing 1
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            <table class="table table-bordered tbldsp">
                                <thead>
                                    <th style="text-align:center;  width:5%">#</th>
                                    <th style="text-align:center;  width:50%">Subject</th>
                                    <th style="text-align:center;  width:30%">Student Name</th>
                                    <th style="text-align:center;  width:60%">Section</th>
                                </thead>
                                </tbody>
                                <?php
                                $subject_code = "COSC 40013 - CS Thesis Writing 1";
                                displayStudentSubjectTable($subject_code);
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                            COSC-E2 - CS Elective 2
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body">
                            <table class="table table-bordered tbldsp">
                                <thead>
                                    <th style="text-align:center;  width:5%">#</th>
                                    <th style="text-align:center;  width:50%">Subject</th>
                                    <th style="text-align:center;  width:30%">Student Name</th>
                                    <th style="text-align:center;  width:60%">Section</th>
                                </thead>
                                </tbody>
                                <?php
                                $subject_code = "COSC-E2 - CS Elective 2";
                                displayStudentSubjectTable($subject_code);
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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