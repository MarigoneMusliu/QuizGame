<?php
session_start();
include "connection.php";
?>
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
    <title>Admin Login</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.11/jquery.validate.unobtrusive.min.js"></script>




</head>

<body class="bg-dark">

<style>
    .no-js {
        background-color: rgba(0,26,66,1);
        margin-top: 3rem !important;
    }

    .sufee-login{
        background-color: rgba(0,26,66,1);
        
    }
    
    .login-form{
        border-radius: 20px;
        

    }
    /* .login-content{
        background: transparent;
        
    }  */
    .btn-quiz {
        border-radius: 10px;
        border: none;
        background: rgba(0,21,53,1) !important;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        padding: 10px !important;
    
    }

    .btn-quiz:hover {
        background: rgba(0,32,87,1) !important;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .btn-quiz:active {
        outline: 0 !important;
    }
  
</style>    



    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">        
               <div class="login-form">
                    <div class="text-center m-b-md">
                        <a><img src="./images/q-logo-black.svg" alt="Logo" width="50" height="50"></a>
                    </div>
                    <h3 style = "text-align:center; padding:20px">Admin LogIn</h3>
                    
                    <form name="formal" action="" method="post">
                        <div class="form-group col-lg-12">
                            <label>Username</label>
                            <input id="username" type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Password</label>
                            <input id="password" type="password" name="password" class="form-control" placeholder="******" required>
                            <button id="togglePassword" type="button" style="position: absolute; right: 20px; top: 48px; transform: translateY(-50%); border: none; background: none; cursor: pointer;">                                    <!-- SVG for eye icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#001535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                    <line x1="1" y1="1" x2="23" y2="23"/>
                                </svg>
                            </button>
                        </div>
                        <div class="btn">
                            <button type="submit" name="submit1" class="btn btn-success btn-block btn-quiz">LogIn</button>
                        </div>
                              
                        <div class="alert alert-danger" id="error_msg" style="margin-top: 10px; display: none;">
                            <strong>Incorrect Name or Password</strong> 
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('username').oninvalid = function(event) {
            event.target.setCustomValidity('Please Enter the administration name');
        };
        document.getElementById('username').oninput = function(event) {
            event.target.setCustomValidity('');
        };

        document.getElementById('password').oninvalid = function(event) {
            event.target.setCustomValidity('Please enter the administrator password!');
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


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
<?php
if (isset($_POST["submit1"])) {
    $count = 0;

    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $res = mysqli_query($link, "select * from admin_login where username='$username' && password='$password'");
    $count = mysqli_num_rows($res);

    if ($count == 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("error_msg").style.display = "block";
        </script>
        <?php
    } else {
		$_SESSION["admin"]=$username;
        ?>
        <script type="text/javascript">
            window.location = "exam_category.php";
        </script>
        <?php
    }
}
?>
