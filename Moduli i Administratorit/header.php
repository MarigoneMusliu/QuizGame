<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administratori</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg+xml" href="./images/q-logo-black.svg">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
    @media (max-width: 575.99px) {
    aside.left-panel .navbar .navbar-header {
        height: auto;
    }}

    .navbar-collapse {
        border: none;
    }
    </style>

</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style='background-color: rgba(0,21,53,1)'>
        <nav class="navbar navbar-expand-sm navbar-default" style='background-color: rgba(0,21,53,1)'>

            <div class="navbar-header py-4 d-flex align-items-center"  style='background-color: rgba(0,21,53,1); justify-content: space-between;'>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class=""><img class="mt-4" src="./images/q-logo-white.svg" alt="Logo" width="50" height="50" test-align="left"></div>
                <h4 class="text-white mt-3">
				    Administrator panel
                </h4>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse pb-3">
                <ul class="nav navbar-nav">
					<li>
                        <a href="exam_category.php"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;</i>Add and edit quizzes</a>
                    </li>
					<li>
                        <a href="add_edit_exam_questions.php"> <i class="fa fa-question"></i>&nbsp;&nbsp;&nbsp;</i>Add and edit questions</a>
                    </li>
					<li>
                        <a href="old-exam-results.php"> <i class="fa fa-bar-chart"></i>&nbsp;&nbsp;&nbsp;</i>Quiz results</a>
                    </li>
                    <li>
                        <a href="coments.php"> <i class="fa fa-comments"></i>&nbsp;&nbsp;&nbsp;</i>Comments </a>
                    </li>
                    <li>
                        <a href="user.php"> <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;</i>Users </a>
                    </li>
                    <li>
                        <a href="logout.php"> <i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;</i>Log Out</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
			<div class="col-sm-7">

         </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                            <!-- <img class="user-avatar rounded-circle" src="images/ava.png" alt="User Avatar"> -->
                            <?php
                                if(isset($_SESSION["admin"]))
                                {
                                    $adminusername = $_SESSION["admin"];
                                    echo 'Hi, ' .$adminusername . '';
                                }
                            ?>
                    </div>

                  

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
