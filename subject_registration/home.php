<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.pup.edu.ph/img/ico/favicon.ico" rel="icon" type="image/x-icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>PUP SIS | Home</title>
    </head>

    <body>
        <?php require_once "../student_navbar.php" ?>
        <div class="container p-3">
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12 text-xs mt-2">
                            <?php echo $_SESSION['last_name']; ?>,&nbsp;<?php echo $_SESSION['name']; ?> (<?php echo $_SESSION['user_name']; ?>)
                        </div>
                    </div>
                </div>
                <div class="card p-3" style="text-align: justify;">
                    <div class="card-header">
                        <h2 class="text-center">Polytechnic University of the Philippines</h2>
                    </div>
                    <div class="card pt-2">
                        <div class="card-header pt-2">
                            <h4><b>Vision</b></h4>
                        </div>
                        <div class="card-body">
                            <p class="fa-2x mb-3" style="text-align: center;">PUP: The National Polytechnic University</p>
                            <p style="text-align: center">PUP: Pambansang Politeknikong Unibersidad</p>
                        </div>
                        <div class="card-header pt-2">
                            <h4><b>Mission</b></h4>
                        </div>
                        <div class="card-body w-75 p-5">
                            Ensuring inclusive and equitable quality education and promoting lifelong learning opportunities through a re-engineered polytechnic university by committing to:
                            <ul>
                                <li>provide democratized access to educational opportunities for the holistic development of individuals with global perspective</li>
                                <li>offer industry-oriented curricula that produce highly-skilled professionals with managerial and technical capabilities and a strong sense of public service for nation building</li>
                                <li>embed a culture of research and innovation</li>
                                <li>continuously develop faculty and employees with the highest level of professionalism</li>
                                <li>engage public and private institutions and other stakeholders for the attainment of social development goal</li>
                                <li>establish a strong presence and impact in the international academic community </li>
                            </ul>
                        </div>
                        <div class="card-header pt-2">
                            <h4><b>The PUP Philosophy (Pilosopiya ng PUP)</b></h4>
                        </div>
                        <div class="card-body w-75 p-5">
                            <b>As a state university, the Polytechnic University of the Philippines believes that:</b><br>
                            <ul>
                                <li>Education is an instrument for the development of the citizenry and for the enhancement of nation building; and</li>
                                <li>That meaningful growth and transformation of the country are best achieved in an atmosphere of brotherhood, peace, freedom, justice and nationalist-oriented education imbued with the spirit of humanist internationalism.</li>
                            </ul>
                        </div>
                        <div class="card-header pt-2">
                            <h4><b>Ten Pillars</b></h4>
                        </div>
                        <div class="card-body w-75 p-5" style="text-align: justify;">
                            <table class="table table-sm table-bordered p-5" style="width: 100%">
                                <tr>
                                    <td>Pillar 1:&nbsp;</td>
                                    <td>Dynamic, Transformational, and Responsible Leadership</td>
                                </tr>
                                <tr>
                                    <td>Pillar 2:</td>
                                    <td>Responsive and Innovative Curricula and Instruction</td>
                                </tr>
                                <tr>
                                    <td>Pillar 3:&nbsp;</td>
                                    <td>Enabling and Productive Learning Environment</td>
                                </tr>
                                <tr>
                                    <td>Pillar 4:&nbsp;</td>
                                    <td>Holistic Student Development and Engagement</td>
                                </tr>
                                <tr>
                                    <td>Pillar 5:&nbsp;</td>
                                    <td>Empowered Faculty Members and Employees</td>
                                </tr>
                                <tr>
                                    <td>Pillar 6:</td>
                                    <td>Vigorous Research Production and Utilization</td>
                                </tr>
                                <tr>
                                    <td>Pillar 7:&nbsp;</td>
                                    <td>Global Academic Standards and Excellence</td>
                                </tr>
                                <tr>
                                    <td>Pillar 8:</td>
                                    <td>Synergistic, Productive, Strategic Networks and Partnerships</td>
                                </tr>
                                <tr>
                                    <td>Pillar 9:</td>
                                    <td>Active and Sustained Stakeholders’ Engagement</td>
                                </tr>
                                <tr>
                                    <td>Pillar 10:</td>
                                    <td>Sustainable Social Development Programs and Projects</td>
                                </tr>
                            </table>
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