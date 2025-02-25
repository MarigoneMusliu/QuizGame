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

    .card-quiz {
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 15px;
        border-color: transparent;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        overflow: hidden;
    }

    .card-quiz img{
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-description {
        width: 90%;
        border-radius: 15px;
        overflow: hidden;
        margin-top: -20px;
        background: #fff;
        min-height: 16vh;
    }

    .card-description p{
        color: #616b87;
    }

    .exam-category {
        border-radius: 15px;
        color: white;
        font-size: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 600;
        padding: 20px; 
		margin-right: 5px; 
		margin-left: -5px;
        border-color: transparent;
        border-radius:15px; 
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        width: 80%;
        transition: 0.5s;
        background-image: linear-gradient(to right, #314755 0%, #001a42 51%, #314755 100%);
        background-size: 200% auto;
    } 

     .exam-category:hover {
        background-position: right center;
        color: #fff;
        text-decoration: none;
    }

    .wrapper {
  /*This part is important for centering*/
  display: grid;
  place-items: center;
}

.typing-demo {
  width: 46ch;
  animation: typing 2s steps(46), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: monospace;
  font-size: 2em;
  text-transform: uppercase;
}

@keyframes typing {
  from {
    width: 0
  }
}
    
@keyframes blink {
  50% {
    border-color: transparent
  }
}
</style>

    
	<div class="select-exam" style="background-color: #e1e1e1; box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.5);">

    <div class="container pt-5">
        <div class="row">
        <div class="mb-5 wrapper" style="color: black; font-family: 'Arial', sans-serif; font-size: 15px; font-weight: bold;">
        <div class="typing-demo d-md-block d-none">Test your knowledge by selecting a quiz!</div>

        <div class="d-md-none d-block">
                <div class="typing-demo">Test</div>
                <div class="typing-demo">your knowledge</div>
                <div class="typing-demo">by selecting </div>
                <div class="typing-demo">one quiz</div>
            </div>
        </div>
                <?php
                    $res = mysqli_query($link, "select * from exam_category");
                    while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1500">
                            <div class="card card-quiz">
                                <img src="../Moduli i Administratorit/<?php echo $row["image_path"]?>" alt="Quiz Category Image" />
                                <div class="text-center mb-3 card-description">
                                    <h2 class="mt-3 mb-3"><?php echo $row["category"]; ?></h2>
                                    <p class="mb-0"><?php echo $row["pershkrimi"]; ?></p>
                                </div>
                                <button class="text-center mb-3 exam-category " onclick="set_exam_type_session('<?php echo $row["category"]; ?>')">
                                    Start the quiz!
                                </button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
        </div>
    </div>

<style>
    @-webkit-keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-250px * 7));
    }
    }
    @keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-250px * 7));
    }
    }
    .slider {
    background: white;
    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
    height: 100px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 100%;
    }
    .slider::before, .slider::after {
    background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
    content: "";
    height: 100px;
    position: absolute;
    width: 200px;
    z-index: 2;
    }
    .slider::after {
    right: 0;
    top: 0;
    transform: rotateZ(180deg);
    }
    .slider::before {
    left: 0;
    top: 0;
    }
    .slider .slide-track {
    -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
    display: flex;
    width: calc(250px * 14);
    }
    .slider .slide {
    height: 100px;
    width: 250px;
    }
</style>

<div class="" style="min-height: 10vh"></div>
<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="https://cdn.worldvectorlogo.com/logos/c-1.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://www.cdnlogo.com/logos/c/27/c.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://logolook.net/wp-content/uploads/2022/11/Java-Logo.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://www.svgrepo.com/show/452088/php.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="data:image/png;base64,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" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://miro.medium.com/v2/resize:fit:512/1*W3ZHer9j6Cxzh78m0jLLdw.png" height="100" width="150" alt="" />
		</div>
		<div class="slide">
			<img src="https://www.vectorlogo.zone/logos/w3_html5/w3_html5-ar21.png" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="https://cdn.worldvectorlogo.com/logos/c-1.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://www.cdnlogo.com/logos/c/27/c.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://logolook.net/wp-content/uploads/2022/11/Java-Logo.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://www.svgrepo.com/show/452088/php.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="data:image/png;base64,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" height="100" width="250" alt="" />
		</div>
	</div>
</div>

</div>
<script type="text/javascript">
    function set_exam_type_session(exam_category) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET", "forajax/set_exam_type_session.php?exam_category=" + exam_category, true);
        xmlhttp.send(null);
    }
</script>

<?php
include "footer.php";
?>
