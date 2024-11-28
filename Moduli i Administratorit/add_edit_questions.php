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



$id = $_GET['id'];
$exam_category = '';
$res = mysqli_query($link, "SELECT * FROM exam_category WHERE id=$id");
while ($row = mysqli_fetch_array($res)) 
{
	$exam_category = $row["category"];
}
      
?>
<style>
.btn-success{
    background: rgba(0,21,53,1);
    border-radius: 10px;
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
                <h1>Add quiz questions<?php echo "<font color='red'>".$exam_category. "</font>";?></h1>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
			<form name="form1" action="" method="post">
                <div class="card">
                    <div class="card-body">
                        
						<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Add New Questions</strong>
							</div>
                            
							
							
							<div class="card-body card-block">
                              <div class="form-group"><label for="company" 
								class=" form-control-label">Add Question</label>
								<input type="text" 
								name="question" 
								placeholder="Add Question" 
								class="form-control">
							  </div>
							  
                               <div class="form-group"><label for="company" 
								class=" form-control-label">Add option 1</label>
								<input type="text" 
								name="opt1" 
								placeholder="Option1" 
								class="form-control">
							  </div>
							  
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add option 2 </label>
								<input type="text" 
								name="opt2" 
								placeholder="Option2" 
								class="form-control">
							  </div>
							  
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add option 3</label>
								<input type="text" 
								name="opt3" 
								placeholder="Option3" 
								class="form-control">
							  </div>
							  
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add option 5</label>
								<input type="text" 
								name="opt4" 
								placeholder="Option4" 
								class="form-control">
							  </div>
							  
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add the correct answer</label>
								<input type="text" 
								name="answer" 
								placeholder="Add Question" 
								class="form-control">
							  </div>
							  
                                  
								      <div class="form-group">
								        <input type="submit" name="submit1" value="Add Question" class="btn btn-success">
								  
								       </div>       
                                 </div>
                             </div>
                   </div>
						
						
						
                    </div>
                </div></form>
				
            </div>
			<div class="col-lg-12">
    <form name="form1" action="" method="post">
	<div class="col-lg-12">
    <form name="form1" action="" method="post">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Question</th>
                            <th scope="col">Option 1</th>
                            <th scope="col">Option 2</th>
                            <th scope="col">Option 3</th>
                            <th scope="col">Option 4</th>
                            <th scope="col">Change</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $res = mysqli_query($link, "SELECT * FROM questions WHERE category='$exam_category' ORDER BY question_no ASC");
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $row["question_no"] . "</td>";
                            echo "<td>" . $row["question"] . "</td>";

                            // Display text-based options
                            echo "<td>" . $row['opt1'] . "</td>";
                            echo "<td>" . $row['opt2'] . "</td>";
                            echo "<td>" . $row['opt3'] . "</td>";
                            echo "<td>" . $row['opt4'] . "</td>";

                            // Provide Edit link for each question
                            echo "<td>";
                            if (strpos($row['opt4'], 'opt_images/') !== false) {
                                echo "<a href='edit_option_images.php?id={$row["id"]}&id1={$id}' class='btn btn-outline-secondary'>Change</a>";
                            } else {
                                echo "<a href='edit_option.php?id={$row["id"]}&id1={$id}' class='btn btn-outline-secondary'>Change</a>";
                            }
                            echo "</td>";

                            // Provide Delete link for each question with modal confirmation
                            echo "<td>";
                            echo "<button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#deleteModal{$row["id"]}'>Delete</button>";
                            echo "</td>";

                            echo "</tr>";

                            // Modal for confirmation
                            echo "<div class='modal fade' id='deleteModal{$row["id"]}' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel' aria-hidden='true'>";
                            echo "<div class='modal-dialog' role='document'>";
                            echo "<div class='modal-content'>";
                            echo "<div class='modal-header'>";
                            echo "<h5 class='modal-title' id='deleteModalLabel'>Confirm Delete</h5>";
                            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                            echo "<span aria-hidden='true'>&times;</span>";
                            echo "</button>";
                            echo "</div>";
                            echo "<div class='modal-body'>";
                            echo "Do you want to delete this question";
                            echo "</div>";
                            echo "<div class='modal-footer'>";
                            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>DISCARD</button>";
                            echo "<a href='delete_option.php?id={$row["id"]}&id1={$id}' class='btn btn-danger'>Delete</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
						 
						 
						 
						 
						 </table>
        </div>
		</div>
		</div>
		</div>
    </div><!-- .animated -->
</div><!-- .content -->
<?php
if (isset($_POST["submit1"])) {
    $loop = 0;
    $count = 0;

    $res = mysqli_query($link, "SELECT * FROM questions WHERE category = '$exam_category' ORDER BY id ASC") or die(mysqli_error($link));
    
    $count = mysqli_num_rows($res);

    if ($count == 0) 
	{
		
	}
	else{
        while ($row = mysqli_fetch_array($res)) 
		{
            $loop = $loop + 1;
            mysqli_query($link, "UPDATE questions SET question_no='$loop' WHERE id=$row[id]");
        }
    }

    $loop = $loop + 1;
    mysqli_query($link, "INSERT INTO questions VALUES (NULL, '$loop', '$_POST[question]', '$_POST[opt1]', '$_POST[opt2]', '$_POST[opt3]', '$_POST[opt4]', '$_POST[answer]', '$exam_category')") or die(mysqli_error($link));
?>

<script type="text/javascript">
alert("Question added successfully!");
window.location.href=window.location.href;
</script>

<?php

}
?>

       
<?php
include "footer.php";
?>
