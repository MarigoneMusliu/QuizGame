<?php
include "connection.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Përdorni deklaratën e përgatitur për të shmangur SQL Injection
    $stmt = mysqli_prepare($link, "DELETE FROM feedback  WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        // Fshirja është kryer me sukses
        echo "success";
    } else {
        // Gabim gjatë ekzekutimit të kërkesës SQL
        echo "error";
    }

    // Mbyll deklaratën e përgatitur
    mysqli_stmt_close($stmt);

    echo '<script type="text/javascript">
        var answer = confirm("Are you sure you want to delete this quiz comment?");
        if (answer) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                
                    
                       {
                            alert("Comment deleted successfully!");
                            window.location = "coments.php";
                        }
                    
              
            };
            xhr.open("GET", "delete.php?id=' . $id . '", true);
            xhr.send();
        } else {
            
        }
    </script>';
} else {
    // Nëse nuk ka parametrin 'id', shfaq një mesazh për të treguar se nuk ka çfarë të fshihet
    echo "There are no quiz comments to delete!";
}
?>              