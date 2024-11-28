<?php
include "connection.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Prepare the deletion SQL statement
    $stmt = mysqli_prepare($link, "DELETE FROM registration WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        // If deletion was successful, respond with success
        echo '<script type="text/javascript">
            var answer = confirm("Are you sure you want to delete this user?");
            if (answer) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if (xhr.responseText == "success") {
                            alert("User deleted successfully!");
                            window.location = "user.php"; // Redirect to the users page
                        } else {
                            alert("Error deleting user.");
                        }
                    }
                };
                xhr.open("GET", "delete.php?id=' . $id . '", true);
                xhr.send();
            } else {
                alert("Deletion canceled.");
            }
        </script>';
    } else {
        echo "Error deleting user";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "No ID provided";
}
?>
