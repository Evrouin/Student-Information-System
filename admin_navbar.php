<nav class="navbar bg-danger bg-gradient navbar-dark navbar-expand-lg">
    <div class="container">
        <a href="user_management.php" class="navbar-brand fs-3">
            <img src="../_img/pup_logo.png" alt="" width=45 height="auto" class="d-inline-block align-text-middle"> Polytechnic University of the PUP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto mb-0 mb-lg-0 fw-bold fs-6">
                <li class="nav-item">
                    <a class="nav-link" href="../admin/admin_user_profile.php"><?php echo $_SESSION['user_name']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/user_management.php">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/student_subjects.php">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>