<?php
session_start();
include "../connection.php";

// Make sure $queno is set and is a number.
$queno = isset($_GET["questionno"]) ? intval($_GET["questionno"]) : 1;

// Check if the answer is set in the session
$ans = isset($_SESSION["answer"][$queno]) ? $_SESSION["answer"][$queno] : "";

// Fetch question details from the database
$query = "SELECT * FROM questions WHERE category = '{$_SESSION['exam_category']}' AND question_no = {$queno}";
$res = mysqli_query($link, $query);

// Error handling for database query
if (!$res) {
    die("Error in SQL query: " . mysqli_error($link));
}

// Check if the query returned any rows
if (mysqli_num_rows($res) == 0) {
    echo "over";
    exit;
}

// Fetch the question
$row = mysqli_fetch_assoc($res);

// Extracting question details
$question_no = $row["question_no"];
$question = $row["question"];
$options = [$row["opt1"], $row["opt2"], $row["opt3"], $row["opt4"]];

?>

<br>
<div class="current-question text-center">
    <h4 class="mb-5"><?php echo $question_no . ". " . $question; ?></h4>
</div>

<style>
    /* CSS styles */
    .option-button {
        /* styles for option buttons */
    }
</style>

<div class="options-container row justify-content-evenly">
    <?php foreach ($options as $option) { ?>
        <div class="option-button col-lg-5 col-md-12 col-sm-12 mb-3" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" onclick="optionClicked(this, '<?php echo $question_no; ?>')">
            <input type="radio" name="r1_<?php echo $question_no; ?>" id="r1_<?php echo $question_no; ?>_option<?php echo $index; ?>"
                value="<?php echo $option; ?>" style="display: none;">
            <label for="r1_<?php echo $question_no; ?>_option<?php echo $index; ?>" style="cursor: pointer;">
                <?php echo $option; ?>
            </label>
        </div>
    <?php } ?>
</div>
