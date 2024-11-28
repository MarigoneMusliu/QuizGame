<?php
    include "newheader.php";
    include "navbar.php";
    include "connection.php";

    if(!isset($_SESSION["username"])) {
        ?>
        <script type="text/javascript">
            window.location="login.php";
        </script>
        <?php
    }
?>

<div class="old-results">
    <div class="container">
        <div class="row" style="margin: 0px; padding:15px; margin-bottom: 40px;">
            <div class="col-lg-12" style="min-height: 500px; background-color: white; border-radius: 10px;">
                <center>
                    <h1>Results</h1>
                </center>
                <?php
                $count = 0;
                $res = mysqli_query($link, "SELECT * FROM exam_results WHERE username='$_SESSION[username]' ORDER BY id DESC");
                $count = mysqli_num_rows($res);

                if ($count == 0) {
                    ?>
                    <center>
                        <h1>No results found</h1>
                    </center>
                    <?php
                } else {
                    // Wrapper added here
                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-bordered'>";

                    echo "<tr style='background-color: rgba(0,21,53,1); color:white'>";
                    echo "<th>"; echo "User"; echo "</th>";
                    echo "<th>"; echo "Quiz Type"; echo "</th>";
                    echo "<th>"; echo "All Questions"; echo "</th>";
                    echo "<th>"; echo "Correct answers"; echo "</th>";
                    echo "<th>"; echo "Wrong answers"; echo "</th>";
                    echo "<th>"; echo "Data"; echo "</th>";
                    echo "</tr>";

                    while ($row = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>"; echo $row["username"]; echo "</td>";
                        echo "<td>"; echo $row["exam_type"]; echo "</td>";
                        echo "<td>"; echo $row["total_question"]; echo "</td>";
                        echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                        echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                        echo "<td>"; echo $row["exam_time"]; echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>"; // Closing the table-responsive div
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
