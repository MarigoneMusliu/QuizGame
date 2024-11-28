<?php
    include "newheader.php";
    include "navbar.php";
?>

<?php
	if(!isset($_SESSION["username"]))
		{
			?>
			<script type="text/javascript">
				window.location="login.php";
			</script>
			
			<?php
		}
?>

<style>
    .quiz-container {
        background-color: #f7f7f7;
        border-radius: 10px;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;    }

    .option-button {
        display: block;
        text-align: left;
        padding: 10px;
        border-radius: 5px;
        background-color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .option-button:hover {
        background-color: #6c757d;
        color: #fff;
        transition: all 0.3s ease;     
    }

    .selected-option {
        background-color: #001a42;
        color: #fff;
    }

    .selected-option:hover {
        background-color: #00045d;
        color: #fff;
    }

</style>

<link rel="stylesheet" href="./countdown.css">

<!-- CountDown -->

<div class="position-fixed w-100 h-100" id="bg"></div>
<div class="demo">
    <div class="demo__colored-blocks">
      <div class="demo__colored-blocks-rotater">
        <div class="demo__colored-block"></div>
        <div class="demo__colored-block"></div>
        <div class="demo__colored-block"></div>
      </div>
      <div class="demo__colored-blocks-inner"></div>
      <div class="demo__text">Gati</div>
    </div>
    <div class="demo__inner">
      <svg class="demo__numbers" viewBox="0 0 100 100">
        <defs>
          <path class="demo__num-path-1" d="M40,28 55,22 55,78"/>
          <path class="demo__num-join-1-2" d="M55,78 55,83 a17,17 0 1,0 34,0 a20,10 0 0,0 -20,-10"/>
          <path class="demo__num-path-2" d="M69,73 l-35,0 l30,-30 a16,16 0 0,0 -22.6,-22.6 l-7,7"/>
          <path class="demo__num-join-2-3" d="M28,69 Q25,44 34.4,27.4"/>
          <path class="demo__num-path-3" d="M30,20 60,20 40,50 a18,15 0 1,1 -12,19"/>
        </defs>
        <path class="demo__numbers-path" 
              d="M-10,20 60,20 40,50 a18,15 0 1,1 -12,19 
                 Q25,44 34.4,27.4
                 l7,-7 a16,16 0 0,1 22.6,22.6 l-30,30 l35,0 L69,73 
                 a20,10 0 0,1 20,10 a17,17 0 0,1 -34,0 L55,83 
                 l0,-61 L40,28" />
      </svg>
    </div>
</div>

<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 83.5vh;">
 
   	<div class="col-lg-12 quiz-container">
  	<div class="audio-container">
    <audio id="myAudio" autoplay loop>
        <source src="audio/audio.mp3" type="audio/mp3">
        Your browser does not support the audio tag.
    </audio>
    <button id="playPauseBtn" onclick="togglePlayPause()">🎵</button>
</div>

<script>
    var audio = document.getElementById("myAudio");
    var playPauseBtn = document.getElementById("playPauseBtn");

    function togglePlayPause() {
        if (audio.paused) {
            audio.play();
            playPauseBtn.innerHTML = "⏸️";
        } else {
            audio.pause();
            playPauseBtn.innerHTML = "⏯️";
        }
    }
</script>

		
			
        <div class="row">
            <div class="col-lg-12" style="display: flex; justify-content: space-between;font-weight: bold">
                <p id="countdowntimer"></p>
                <p><span id="current_que"></span>/<span id="total_que"></span></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" id="load_questions">
            </div>
        </div>

<div class="row" style="margin-top: 30px">
    <div class="col-lg-12 d-flex justify-content-end">
        <!-- Your content goes here -->

        <!-- Button is now on the right side with a custom width -->
        <input type="button" class="btn btn-success btn-next-prev" style="width: 120px;" value="Next" onclick="load_next()">
    </div>
</div>


    </div>
    </div>
	
</div>

<script>
    function optionClicked(clickedElement, questionNo) {
        var optionElement = clickedElement.closest('.option-button');
        if (!optionElement) return;

        var optionsContainer = optionElement.parentNode;
        var options = optionsContainer.getElementsByClassName('option-button');

        // Remove the class from all options
        for (var i = 0; i < options.length; i++) {
            options[i].classList.remove('selected-option');
        }

        // Add the class to the clicked option
        optionElement.classList.add('selected-option');

        var radioButton = optionElement.querySelector('input[type="radio"]');
        if (radioButton) {
            radioButton.checked = true;
            radioclick(radioButton.value, questionNo);
        }
    }

    function load_total_que() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "forajax/load_total_que.php", true);
        xmlhttp.send();
    }

    function radioclick(radiovalue, questionno) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // Handle any response if needed
            }
        };
        xmlhttp.open("GET", "forajax/save_answer_in_session.php?questionno=" + questionno + "&value1=" + radiovalue, true);
        xmlhttp.send();
    }

    var questionno = 1; // Initialize as a number
    load_questions(questionno);

    function load_questions(questionno) {
        document.getElementById("current_que").innerHTML = questionno;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText === "over") {
                    window.location.href = "result.php"; 
                } else {
                    document.getElementById("load_questions").innerHTML = xmlhttp.responseText;
                    load_total_que();
                }
            }
        };
        xmlhttp.open("GET", "forajax/load_questions.php?questionno=" + questionno, true);
        xmlhttp.send();
    }

    function load_previous() {
        questionno = Math.max(1, questionno - 1); 
        load_questions(questionno);
    }

    function load_next() {
        questionno++;
        load_questions(questionno);
    }
    
    document.addEventListener("DOMContentLoaded", function() {
        
        setTimeout(function() {
            document.querySelector('.demo__text').textContent = 'Start';
        }, 2000);

        setTimeout(function() {
            document.querySelector('.demo').style.opacity = 0;
        }, 4500);

        setTimeout(function() {
            document.getElementById('bg').style.opacity = 0;
        }, 4500);

        setTimeout(function() {
            document.querySelector('.demo').style.display = 'none';
        }, 5000);

        setTimeout(function() {
            document.getElementById('bg').style.display = 'none';
        }, 5000);

        setTimeout(function() {
            setInterval(timer, 1000);
        }, 1000);
    });

    function timer() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText == "00:00:01") {
                    window.location = "result.php";
                }
                document.getElementById("countdowntimer").innerHTML = xmlhttp.responseText; 
            }
        };
        xmlhttp.open("GET", "forajax/load_timer.php", true);
        xmlhttp.send(null);
    }

    function showToast(message) {
        var toast = document.createElement("div");
        toast.innerText = message;
        toast.style.position = "fixed";
        toast.style.top = "100px";
        toast.style.right = "10px";
        toast.style.backgroundColor = "#af1212";
        toast.style.color = "white";
        toast.style.padding = "10px";
        toast.style.borderRadius = "5px";
        toast.style.zIndex = "1000";

        document.body.appendChild(toast);

        setTimeout(function() {
            toast.style.display = 'none';
        }, 3000); // Hide the toast after 3 seconds
    }

    window.onload = function() {
        if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
            console.log("Page was reloaded. Redirecting to select_category.php and resetting quiz.");
            window.location.href = "select_exam.php";
            // Here, add any additional code needed to reset the quiz
        }
    };
</script>


<?php
include "footer.php";
?>
