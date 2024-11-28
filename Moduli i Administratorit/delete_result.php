<?php
include "connection.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Përdorni deklaratën e përgatitur për të shmangur SQL Injection
    $stmt = mysqli_prepare($link, "DELETE FROM exam_results  WHERE id = ?");
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

    // Nëse përdoruesi është i sigurt që dëshiron të fshijë, kryej kërkesën AJAX
    echo '<script type="text/javascript">
        var answer = confirm("Are you sure you want to delete this user result?");
        if (answer) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                
                    
                       {
                            alert("Result deleted successfully!");
                            window.location = "old-exam-results.php";
                        }
                    
              
            };
            xhr.open("GET", "delete_result.php?id=' . $id . '", true);
            xhr.send();
        } else {
            
        }
    </script>';
} else {
    // Nëse nuk ka parametrin 'id', shfaq një mesazh për të treguar se nuk ka çfarë të fshihet
    echo "There is no quiz result to delete!";
}
?>              