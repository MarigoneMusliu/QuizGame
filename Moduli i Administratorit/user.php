
<?php
session_start();
include "header.php";
include "connection.php";

if (!isset($_SESSION["admin"])) {
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php
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

</style>

<?php
$result = null; // Initialize $result to null
$count = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $term = mysqli_real_escape_string($link, $_POST["term"]);

    $sql = "SELECT * FROM registration WHERE username LIKE '%$term%' ORDER BY id DESC";

    $result = mysqli_query($link, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
    } else {
        // Handle error if query fails
        echo "Error: " . mysqli_error($link);
    }
}
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Registered users</h1>
            </div>
        </div>
    </div>
</div>

<form action="user.php" method="post" style="margin-left: 20px">
    <table>
        <tbody>
        <tr>
            <td>Write Username:<input type="text" name="term" class="form-control mb-2" placeholder="Username"></td>
        </tr>
            <td><input type="submit" value="Search" class="btn btn-secondary"></td>
        </tr>
        </tbody>
    </table>
</form>

<!-- Rest of your code -->

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="table-responsive">
    <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">User&nbsp;name</th>
                                <th scope="col">Password</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            // Check if $result is not null before attempting to fetch data
                            if ($result) {
                                $count = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $count++;
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count; ?> </th>
                                        <td><?php echo $row["firstname"]; ?> </td>
                                        <td><?php echo $row["lastname"]; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td><?php echo $row["password"]; ?></td>
                                        <td><a href="delete_user.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-danger">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>