<?php
include "connection.php";

// Function to get the total number of quizzes
function getTotalQuizCount($link) {
    $sql = "SELECT COUNT(*) as total FROM exam_category";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Get the total number of quizzes
$totalQuizzes = getTotalQuizCount($link);

// Return the total quizzes count as the response
echo $totalQuizzes;

mysqli_close($link);
?>
