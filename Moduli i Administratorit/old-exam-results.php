<?php
session_start();

include "header.php";
include "connection.php";

if(!isset($_SESSION["admin"])) {
    ?> 
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}

$result = null; // Inicializojmë $result me vlerën null
$count = 0;

// Merrni kategoritë nga baza e të dhënave
$query_categories = "SELECT DISTINCT exam_type FROM exam_results";
$result_categories = mysqli_query($link, $query_categories);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $term = mysqli_real_escape_string($link, $_POST["term"]);
    $category = mysqli_real_escape_string($link, $_POST["category"]);

    $sql = "SELECT * FROM exam_results WHERE username LIKE '%$term%'";

    if (!empty($category)) {
        $sql .= " AND exam_type = '$category'";
    }

    $sql .= " ORDER BY id DESC";

    $result = mysqli_query($link, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
    } else {
        // Handle error if query fails
        echo "Error: " . mysqli_error($link);
    }
}
?>

<style>
    .btn-success{
        background: rgba(0,21,53,1);
        margin-left: 5px;
        padding: 3px;
    }
    .btn-success:hover {
        background: rgba(0,32,87,1) !important;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }
</style>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>All quiz results</h1>
            </div>
        </div>
    </div>
</div>

<form action="old-exam-results.php" method="post" style="margin-left: 20px">
    <table>
        <tbody>
            <tr>
                <td>Enter user:<input type="text" name="term" class="form-control mb-3" placeholder="Username"></td>
            </tr>
            <tr>
                <td>
                    <label for="category">Select category:</label>
                    <select id="category" name="category" class="form-control">
                        <?php
                        // Mbush dropdown-in me kategoritë nga baza e të dhënave
                        while ($row_category = mysqli_fetch_assoc($result_categories)) {
                            $selected = ($row_category['exam_type'] == $category) ? 'selected' : '';
                            echo "<option value='{$row_category['exam_type']}' $selected>{$row_category['exam_type']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Search" class="btn btn-secondary"></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <center>
                                <h1>Results</h1>
                            </center>
                            <?php
                            if ($result) { // Kontrolla për të parandaluar gabimin e mundshëm
                                echo "<form action='delete-result.php' method='post'>";
echo "<table class='table table-bordered'>";
echo "<tr style='background-color: rgba(0,21,53,1); color:white'>";
echo "<th>"; echo "User"; echo "</th>";
echo "<th>"; echo "Quiz Type"; echo "</th>";
echo "<th>"; echo "Total Questions"; echo "</th>";
echo "<th>"; echo "Correct Answers"; echo "</th>";
echo "<th>"; echo "Wrong Answers"; echo "</th>";
echo "<th>"; echo "Quiz Date"; echo "</th>";
echo "<th>"; echo "Delete"; echo "</th>";
echo "</tr>";


                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["username"]; echo "</td>";
                                    echo "<td>"; echo $row["exam_type"]; echo "</td>";
                                    echo "<td>"; echo $row["total_question"]; echo "</td>";
                                    echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                                    echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                                    echo "<td>"; echo $row["exam_time"]; echo "</td>";
                                    echo "<td><a href='delete_result.php?id={$row["id"]}' class='btn btn-outline-danger'>Delete</a></td>";
                                    echo "</tr>";
                                }

                                echo "</table>";
                                echo "</form>";
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<?php
include "footer.php";
?>