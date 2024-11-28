<?php 
include "connection.php";
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Regjistrohu tani</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg+xml" href="./img/q-logo-black.svg">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <link rel="stylesheet" href="css1/stars.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<style>
    .error-pagewrap{ 
        background-color: rgba(0,26,66,1);
    }

    .hpanel .panel-body {
        border-radius: 20px;
    }

    .btn-quiz {
        border-radius: 10px;
        border: none;
        background: rgba(0,21,53,1) !important;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .btn-quiz:hover {
        background: rgba(0,32,87,1) !important;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .btn-quiz:active {
        outline: 0 !important;
    }

    .content-error a {
        background: transparent;
    }

    .btn-register {
        margin-top: 1rem !important;
        padding: 0 !important;
        color: blue !important;
        font-size: normal !important;
        font-weight: normal !important;
    }
</style>

<div class="stars">
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
</div>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center m-b-md">
                            <a href="index.php"><img src="./img/q-logo-black.svg" alt="Logo" width="50" height="50"></a>
                        </div>
				            <h3 style = "text-align:center;">Register</h3>
                        <form action="#" name="formal" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="Name" title="Please enter your name!" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Surname</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Surname" title="Please enter your surname!" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" placeholder="Username" title="Please enter the username!" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12" style="position: relative;">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="********" class="form-control" pattern=".{8,}" title="Password-i duhet te permbaj se paku 8 karaktere" required style="padding-right: 30px;">
                                
                                <button id="togglePassword" type="button" style="position: absolute; right: 20px; top: 45px; transform: translateY(-50%); border: none; background: none; cursor: pointer;">
                                    <!-- SVG for eye icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#001535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                        <line x1="1" y1="1" x2="23" y2="23"/>
                                    </svg>
                                </button>
                            
                            </div>
                               
                              </div>
                             <div class="text-center">
                                

                            </div>

                            
                            <button type="submit" name="register" class="btn btn-success btn-block btn-quiz">Register</button>
                            <p style="text-align: center;">You already have an account! <a class="btn-register" href="login.php">Log In</a></p>

							
							<div class="alert alert-success" id="success" style="margin-top: 10px; display:none">
                                <strong>This user has registered successfully!</strong> 
                            </div> 
                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display:none">
                                <strong>This user already exists!</strong> 
                            </div> 
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

    <script>
        document.getElementById('firstname').oninvalid = function(event) {
            event.target.setCustomValidity('Please enter your name!');
        };
        document.getElementById('firstname').oninput = function(event) {
            event.target.setCustomValidity('');
        };

        document.getElementById('lastname').oninvalid = function(event) {
            event.target.setCustomValidity('Please enter your last name!');
        };
        document.getElementById('lastname').oninput = function(event) {
            event.target.setCustomValidity('');
        };

        document.getElementById('username').oninvalid = function(event) {
            event.target.setCustomValidity('Please enter the username!');
        };
        document.getElementById('username').oninput = function(event) {
            event.target.setCustomValidity('');
        };

        document.getElementById('password').oninvalid = function(event) {
            event.target.setCustomValidity('Please enter the user's password which contains at least 8 characters!');
        };
        document.getElementById('password').oninput = function(event) {
            event.target.setCustomValidity('');
        };

        document.getElementById('togglePassword').addEventListener("click" , function (e) {
            e.preventDefault();

            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                this.innerHTML = type === 'password' ? 
                `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#001535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                    <line x1="1" y1="1" x2="23" y2="23"/>
                </svg>` : 
                `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#001535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>`;
        });
    </script>


<?php
if(isset($_POST["register"])) 
{
	$count=0;
	$res=mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
	$count=mysqli_num_rows($res);
	
	if($count>0)
	{
		?>
		<script type="text/javascript">
		   document.getElementById("success").style.display="none";
		   document.getElementById("failure").style.display="block";
		</script>
		<?php
	} else {
		mysqli_query($link,"insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')") or die(mysqli_error($link));
?>
		<script type="text/javascript">
		   document.getElementById("success").style.display="block";
           setTimeout(function () {
            window.location.href = "login.php";
        }, 2000);
		   document.getElementById("failure").style.display="none";
		</script>


		<?php
    }
}
?>
	
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>