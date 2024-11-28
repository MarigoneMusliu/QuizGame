<?php
session_start();
include "header.php";
include "connection.php";


if(!isset($_SESSION["admin"]))
{
?> 

<script type="text/javascript">
window.location="index.php";
</script>
<?php
}
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
         <div class="page-header float-left">
            <div class="page-title">
                <h1>User comments</h1>
            </div>
        </div>
    </div>                  
</div>
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
        <th scope="col">Email</th>
        <th scope="col">Comment</th>
        <th scope="col">Delete</th>
		</tr>
    </thead>
<tbody>
	<?php
	$count=0;
	$res=mysqli_query($link, "select * from feedback");
	while($row=mysqli_fetch_array($res))
	{
	$count=$count+1;
	?>
	<tr>
        <th scope="row"><?php echo $count; ?> </th>
        <td><?php echo $row["name"]; ?> </td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["message"]; ?></td>
        <td><a href="delete_coment.php?id=<?php echo $row["id"]; ?>"class="btn btn-outline-danger">Delete</a></td>
	</tr>
    <?php
	}
    ?>
    </tbody>
    </table>  

    <?php
include "footer.php";
?>