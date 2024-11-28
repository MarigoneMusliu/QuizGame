<?php
include "connection.php";

// Function to get the total number of registered users
function getTotalUsersCount($link) {
    $sql = "SELECT COUNT(*) as total FROM registration";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Get the total number of registered users
$totalUsers = getTotalUsersCount($link);

// Return the total users count as the response
echo $totalUsers;

mysqli_close($link);
?>
