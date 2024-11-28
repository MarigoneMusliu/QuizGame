<?php
include "connection.php"; 
$toastMessage = null;


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'], $_POST['name'], $_POST['message'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $message = mysqli_real_escape_string($link, $_POST['message']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

            if (mysqli_stmt_execute($stmt)) {
                $toastMessage = "Your comment was successfully registered. Thank you!";
            } else {
                $toastMessage = "The comment was not registered. Please try again.";
            }
            mysqli_stmt_close($stmt);
        }
    } else {
        $toastMessage = "Incorrect email format.";
    }
    mysqli_close($link);
}

include "newheader.php";
include "navbar.php";
?>


<div class="s1 d-flex justify-content-center align-items-center" id="s1" data-aos="fade-right" data-aos-duration="3000">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="3000">
                <div class="s1-left p-3">
                    <h1>Quiz Game</h1>
                    <p style="color: white; font-size: 20px; text-align: left; padding: 15px; border-radius: 10px;">
					Welcome to the Ultimate Quiz Challenge! 🎉
Test your coding skills across Python, JavaScript, C++, and more! 💻
Challenge yourself, select a category, and prove you’re the ultimate code master! 🏆</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  
}
.cta {
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    color: white;
    background: rgba(0,32,87,1);
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC638;
    color: #fff
}

.cta span:nth-child(1) {
    padding-left: 20px;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 25px;
}

  span {
    transform: skewX(15deg) 
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 20px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

path.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #FBC638;
    }
    100% {
        fill: white;
    }
}
</style>

<div class="s2 mb-0 pt-5 pb-5" id="s2">
    <div class="container-fluid">
        <p class="lead text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Join this exciting journey and unlock a whole new world of fun, learning, and knowledge testing with our app!
            <br>
            Information about the application:
        </p>
        <div class="row justify-content-center">
            
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center">
                <p id="counter" class="counter mb-0">999</p>
                    <p class="mb-0" style="font-size: 18px">Registered users</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center">
                    <p id="quizCounter" class="counter mb-0">00</p>
                    <p class="mb-0" style="font-size: 18px">Quizzes</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <?php
                    $redirectUrl = isset($_SESSION["username"]) ? "select_exam.php" : "login.php";
                ?>

                <!-- <a href="<?php echo $redirectUrl; ?>">
                    <button class="align-items-center fw-semibold px-5 py-3 exam-category"
                        style="border-radius:15px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 2px 16px rgba(0, 0, 0, 0.1); background-color: transparent; color: #8b5c91; font-family: Georgia, serif, sans-serif; letter-spacing: 0.5px; text-transform: uppercase;">
                        Testo veten
                    </button>
                </a> -->
                <!-- designed by me... enjoy! -->
                <div class="wrapper">
                <a class="cta" href="<?php echo $redirectUrl; ?>">
                    <span>TEST&nbsp;YOURSELF</span>
                    <span>
                    <svg width="60px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                        </g>
                    </svg>
                    </span> 
                </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="" id="s3" style="">
    <div class="container pt-3 pb-3 text-white">
        <div class="row">
            <div class="col-md-6 my-auto" data-aos="fade-right" data-aos-duration="1500">
                <h2 class="featurette-heading"><span class="text-white">Dive into the adventure of our quiz!</span></h2>
                <p class="lead" style="color: #898989">Each correct answer brings you one step closer to uncovering the treasure of knowledge that awaits!</p>
            </div>
            <div class="col-md-6 py-5" data-aos="fade-left" data-aos-duration="1500">
                <img class="py-5" src="./img/quiz-ilustration.svg" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></svg>
            </div>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-10">
                <h1 class="text-center mt-5" style="color: #001a42;" data-aos="fade-up" data-aos-duration="1500">Questions about the "Quiz Game" app</h1>
                <div class="accordion mt-5" id="accordionExample"  data-aos="fade-up" data-aos-duration="1500">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong>What types of quizzes does the "Quiz Game" app include?</strong>
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        The "Quiz Game" app offers a wide range of quizzes, including 8 categories with 10 questions each. These quizzes are dedicated to programming languages such as PHP, HTML, CSS, JavaScript, MySQL, Python, and more.
Users have the opportunity to test their programming knowledge through engaging challenges and relevant questions focused on coding and web application development.


                        </div>
                        </div>
                    </div>
                    <br>
                   
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>How does this app impact the development of players' knowledge and skills?</strong>
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The "Quiz Game" app helps enhance players' knowledge and skills in programming by offering challenges and specialized questions in programming languages. Users quickly improve their speed and understanding of coding concepts, creating a tailored experience for their development.
                            In this way, the app not only provides entertainment but also contributes to the growth of players' competencies and self-confidence in the world of technology and programming.
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>How can users contribute to the development of the app?</strong>
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           Users can contribute to the development of the app by sharing suggestions and feedback in the comments section below. This allows for continuous collaboration between developers and the community to improve the user experience based on their needs and preferences.
                        </div>
                        
                        </div>
                        
                    </div>
                  
                </div>
                
            </div>
        </div>
        <br>
        <br>
    </div>
</div>




<div class="scroll-to-top" id="scrollToTopBtn">
    <a href="#navbar"><img src="./img/arrow-up.svg" alt="" width="100%"></a>
</div>
<div class="mt-5">
    <div class="px-4 py-5 text-center text-white">
        <img data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="d-block mx-auto mb-4" src="./img/subscription-icon.svg" alt="" width="130" height="100">
        <h1 class="display-5 fw-bold" data-aos="fade-right" data-aos-duration="1500">Comment about us</h1>
        <div class="col-lg-6 mx-auto mb-5">
            <p class="lead mb-4" data-aos="fade-right" data-aos-duration="1500">Please share with us your feelings, comments, and suggestions. Is there something you particularly enjoyed? Every comment and review from you is a source of inspiration and improvement for us. <br> 🌐✨ Thank you, <br>
The Quiz Game Team.
            </p>
            <div>
            <form class="" method="post"> 
                <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required data-aos="fade-up" data-aos-duration="1500">
                <input type="email" name="email" class="form-control mb-3" placeholder="Email" required data-aos="fade-up" data-aos-duration="2000">
                <textarea name="message" class="form-control mb-3" placeholder="Your Comment" required data-aos="fade-up" data-aos-duration="2500"></textarea>
                <button type="submit" class="btn btn-primary btn-lg px-4 gap-3" data-aos="fade-up" data-aos-duration="3000">Comment</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="position-fixed p-3" style="z-index: 11; top: 20px; right: 20px;">
    <div id="subscriptionToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Comments</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <!-- Placeholder for message -->
        </div>
    </div>
</div>



<script type='text/javascript'>
window.onload = function() {
    <?php if (!is_null($toastMessage)): ?>
        var toastEl = document.getElementById('subscriptionToast');
        var toastBody = toastEl.querySelector('.toast-body');
        toastBody.textContent = "<?php echo $toastMessage; ?>"; // Set the message
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    <?php endif; ?>
};
</script>

<script>
document.addEventListener('scroll', function() {
    var s3 = document.getElementById('s3');
    var s3Top = s3.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;
    var scrollToTopBtn = document.getElementById('scrollToTopBtn');

    if (s3Top < windowHeight) {
        setTimeout(() => { scrollToTopBtn.style.opacity = 1; }, 10); // Fade in
    } else {
        scrollToTopBtn.style.opacity = 0; // Fade out
    }
});
</script>

<!-- Add this script to your HTML -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Initialize the counter with 999
    var counterElement = document.getElementById("counter");
    counterElement.innerText = "999";

    // Fetch the current total users count from the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var targetNumber = parseInt(xhr.responseText, 10);
            animateCounter(targetNumber);
        }
    };

    xhr.open("GET", "getTotalUsersCount.php", true);
    xhr.send();

    function animateCounter(targetNumber) {
        var currentNumber = 999;
        var animationDuration = 2000;
        var animationInterval = 10;
        var increment = (currentNumber - targetNumber) / (animationDuration / animationInterval);

        var counterInterval = setInterval(function() {
            currentNumber -= increment;
            counterElement.innerText = padNumber(Math.round(currentNumber));

            if (currentNumber <= targetNumber) {
                clearInterval(counterInterval);
            }
        }, animationInterval);
    }

    // Function to pad a number with leading zeros
    function padNumber(number) {
        return number.toString().padStart(2, '0');
    }
});
</script>

<!-- Update this script in your HTML -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Initialize the quiz counter with 999
    var quizCounterElement = document.getElementById("quizCounter");
    quizCounterElement.innerText = "999";

    // Fetch the current total quizzes count from the server using AJAX
    var quizXhr = new XMLHttpRequest();
    quizXhr.onreadystatechange = function() {
        if (quizXhr.readyState == 4 && quizXhr.status == 200) {
            var targetQuizNumber = parseInt(quizXhr.responseText, 10);
            animateQuizCounter(targetQuizNumber);
        }
    };

    quizXhr.open("GET", "getTotalQuizCount.php", true);
    quizXhr.send();

    function animateQuizCounter(targetQuizNumber) {
        var currentQuizNumber = 999;
        var quizAnimationDuration = 2000;
        var quizAnimationInterval = 10;
        var quizIncrement = (currentQuizNumber - targetQuizNumber) / (quizAnimationDuration / quizAnimationInterval);

        var quizCounterInterval = setInterval(function() {
            currentQuizNumber -= quizIncrement;
            quizCounterElement.innerText = padNumber(Math.round(currentQuizNumber));

            if (currentQuizNumber <= targetQuizNumber) {
                clearInterval(quizCounterInterval);
            }
        }, quizAnimationInterval);
    }

    // Function to pad a number with leading zeros
    function padNumber(number) {
        return number.toString().padStart(2, '0');
    }
});
</script>






<?php
    include "footer.php";
?> 
