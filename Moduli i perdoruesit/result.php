<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Kjo është etiketa e re për skriptën e Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Referencat e tjera të stilit ose skripteve mund të vazhdojnë këtu -->
    <!-- ... -->
</head>

<?php
    include "newheader.php";
    include "navbar.php";
    include "connection.php";
?>

<?php
    if(!isset($_SESSION["username"])) {
?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
<?php
    }
?>

<style>
    .results {
        border-radius: 20px;
        background-color: #fff;
        color: #000;
    }

    table {
        border: 0;
        width: 100%;
    }

    table td {
        width: 50%;
        padding: 1rem;
        font-size: 25px;
        font-family: 'Times New Roman', serif;
    }

    .centered-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        font-family: "Sofia", sans-serif;
        font-size: 35px;
        text-shadow: 3px 3px 3px #ababab;
    }

    .fas {
        font-size: 20px; /* Rregullojeni sipas dëshirës */
        margin-left: 5px; /* Rregullojeni sipas dëshirës */
    }

    .text-success {
        color: #00ff00; /* Ngjyra e gjelbër për tekstin e suksesshëm */
    }

    .text-danger {
        color: #ff0000; /* Ngjyra e kuqe për tekstin e gabuar */
    }
    .circle-chart__circle {
  animation: circle-chart-fill 2s reverse; /* 1 */ 
  transform: rotate(-90deg); /* 2, 3 */
  transform-origin: center; /* 4 */
}

.circle-chart__circle--negative {
  transform: rotate(-90deg) scale(1,-1); /* 1, 2, 3 */
}

.circle-chart__info {
  animation: circle-chart-appear 2s forwards;
  opacity: 0;
  transform: translateY(0.3em);
}

@keyframes circle-chart-fill {
  to { stroke-dasharray: 0 100; }
}

@keyframes circle-chart-appear {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

<body>
    <div class="">
        <div class="container">
            <div class="row mt-5" style="margin: 0px; padding:0px; margin-bottom: 50px; display: flex; justify-content: center; align-items: center">
                <div class="col-lg-6 results p-5">
                    <div class='centered-container'>
                        <h1>Result</h1>
                    </div>
                    <?php
    $correct = 0;
    $wrong = 0;
    $quizName = ""; // Variable to store the quiz name

    // Fetch the quiz name from the exam_category table
    $examCategoryQuery = mysqli_query($link, "SELECT category FROM exam_category WHERE category='$_SESSION[exam_category]'");
    if ($row = mysqli_fetch_array($examCategoryQuery)) {
        $quizName = $row["category"];
    }

    if (isset($_SESSION["answer"])) {
        for ($i = 1; $i <= sizeof($_SESSION["answer"]); $i++) {
            $answer = "";
            $res = mysqli_query($link, "SELECT * FROM questions WHERE category='$_SESSION[exam_category]' AND question_no=$i");
            while ($row = mysqli_fetch_array($res)) {
                $answer = $row["answer"];
            }
            if (isset($_SESSION["answer"][$i])) {
                if ($answer == $_SESSION["answer"][$i]) {
                    $correct = $correct + 1;
                } else {
                    $wrong = $wrong + 1;
                }
            } else {
                $wrong = $wrong + 1;
            }
        }
    }

    $count = 0;
    $res = mysqli_query($link, "SELECT * FROM questions WHERE category='$_SESSION[exam_category]'");
    if ($res) {
        $count = mysqli_num_rows($res);
        $wrong = $count - $correct;
    }

    // Calculate the percentage
    $percentage = 0;
    if ($count > 0) {
        $percentage = ($correct / $count) * 100;
    }

    echo "<table border='1'>";
    echo "<tr><td>Quiz&nbsp;e&nbsp;category</td><td style='text-align: right;'>$quizName</td></tr>";
    echo "<tr><td>Total&nbsp;questions</td><td style='text-align: right;'>$count</i></td></tr>";
    echo "<tr><td>Correct&nbsp;e&nbsp;answers</td><td class='text-success' style='text-align: right;'>$correct <i class='fas fa-check text-success'></td></tr>";
    echo "<tr><td>Wrong&nbsp;e&nbsp;Answers</td><td class='text-danger' style='text-align: right;'>$wrong <i class='fas fa-times text-danger'></td></tr>";
    // Display the quiz name
    echo "</table>";
    echo '  <div class="d-flex justify-content-center mt-5">
                <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#aaddff" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <circle class="circle-chart__circle" stroke="#336699" stroke-width="2" stroke-dasharray="'.round($percentage, 2).',100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <g class="circle-chart__info">
                        <text class="circle-chart__percent" x="16.91549431" y="15.5" alignment-baseline="central" text-anchor="middle" font-size="8" fill="#000">'.round($percentage, 2).'%</text>
                        <text class="circle-chart__subline" x="16.91549431" y="20.5" alignment-baseline="central" text-anchor="middle" font-size="3" fill="#000">correct</text>
                    </g>
                </svg>
            </div>
            <div class="d-flex justify-content-end mt-5">
                <a href="#questions-answers">View answers</a>
            </div>';

            echo '<style>';
            echo '  .quiz-questions::-webkit-scrollbar { width: 10px;}';
            echo '  .quiz-questions::-webkit-scrollbar-track { background: #f1f1f1; margin: 50px; }'; 
            echo '  .quiz-questions::-webkit-scrollbar-thumb { background: #888; border-radius: 10px; }'; 
            echo '  .quiz-questions::-webkit-scrollbar-thumb:hover { background: #555; }'; 
            echo '</style>';

            echo '</div></div></div></div>';
            echo '<div class="container mt-5 mb-5">';
    echo '<div class="quiz-questions results col-lg-8 mx-auto p-5" id="questions-answers" style="margin-top: 100px; margin-bottom: 50px; max-height: 1000px; overflow-y: auto; border-radius: 10px;">';
            for ($i = 1; $i <= $count; $i++) {
                $questionRes = mysqli_query($link, "SELECT * FROM questions WHERE category='$_SESSION[exam_category]' AND question_no=$i");
                if ($questionRow = mysqli_fetch_array($questionRes)) {
                    $question = $questionRow['question'];
                    $correctAnswer = $questionRow['answer'];
                    $userAnswer = isset($_SESSION["answer"][$i]) ? $_SESSION["answer"][$i] : null;
        
                    echo "<p class='fw-bold'>Pyetja $i: $question</p>";
                    echo "<div class='mb-5'>";
                    // Check if the user's answer is correct
                    if ($userAnswer === $correctAnswer) {
                        echo "<p class='form-control alert alert-success'>Your answer: <span class='correct fw-bold'>$userAnswer (Correct</span></p>";
                    } else {
                        echo "<p class='form-control alert alert-danger'>Your answer: <span class='wrong fw-bold'>$userAnswer (Wrong)</span></p>";
                    }
                    echo "<p class='form-control alert alert-secondary'>Your answer: <span class='fw-bold'>$correctAnswer</snap></p>";
                    echo "</div>";
                }
            }
            echo '</div>';
            echo '</div>';
?>

    

    <?php
        if (isset($_SESSION["exam_start"])) {
            $date = date("Y-m-d");
            mysqli_query($link, "INSERT INTO exam_results (id, username, exam_type, total_question, correct_answer, wrong_answer, exam_time) VALUES (NULL, '$_SESSION[username]', '$_SESSION[exam_category]', '$count', '$correct', '$wrong', '$date')") or die(mysqli_error($link));
        }

        if (isset($_SESSION["exam_start"])) {
            unset($_SESSION["exam_start"]);
            unset($_SESSION["end_time"]);
        }
        include "footer.php";
    ?>
</body>
</html>
