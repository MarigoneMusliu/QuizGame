<style>
    .menu-links {
    position: relative;
    overflow: hidden; /* Ensures the border doesn't extend outside the link area */
}

    .menu-links::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color: white; /* Border color */
    transition: width 0.5s ease; /* Adjust duration and easing function as needed */
}

.menu-links:hover::after {
    width: 100%;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light header" id="navbar">
        <div class="container">
            <a href="index.php"><img src="./img/q-logo-white.svg" alt="Logo" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-md-0 mt-3" id="navbarSupportedContent">
                <?php
                    if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        echo '
                            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-white menu-links" href="select_exam.php">Choose a quiz!</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white menu-links" href="old_exam_results.php">Results</a>
                                </li>
                            </ul>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    '. $username .'
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="btn dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </div>
                        ';
                    } else {
                        echo '
                            <div class="ms-auto">
                                <a class="btn btn-login" href="login.php">Log in</a>&nbsp;&nbsp;
                                <a class="btn btn-register" href="register.php">Register</a>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </nav>