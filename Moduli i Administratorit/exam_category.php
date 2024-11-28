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
<style>
  .btn-success {
    background: rgba(0, 21, 53, 1);
    border-radius: 10px;
  }

  .btn-success:hover {
    background: rgba(0, 32, 87, 1) !important;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
  }

  .btn-danger {
    background: #ff0000;
    border-radius: 10px;
  }

  .btn-danger:hover {
    background: #e60000 !important;
  }
  
</style>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Quiz</h1>
                    </div>
                </div>
            </div>
           
              
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
						<form name="formal" action="" method="post" enctype="multipart/form-data">
                        </div>

                    </div>
					     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Add a quiz category</strong></div>
                            
							<!-- <div class="form-group">
                                <label for="quizImage" class=" form-control-label">Image</label>
                                <input type="file" name="quizimage" class="form-control">
                            </div> -->
							
							<div class="card-body card-block">

                                <div class="form-group"><label for="quizImage" class=" form-control-label">Picture</label>
                                <input type="file" name="quizimage" class="form-control">
                                </div>

                                <div class="form-group"><label for="company" class=" form-control-label">New category</label>
								    <input type="text" name="examname" placeholder="New category" class="form-control">
								</div>

                                <div class="form-group"><label for="company" class=" form-control-label">Description</label>
								    <input type="text" name="examdescription" placeholder="Add new category description" class="form-control">
								</div>
                                
								<div class="form-group"><label for="vat" class=" form-control-label">Quiz time in minutes</label>
								<input type="text" placeholder="Quiz time in minutes" class="form-control" name="examtime"></div>
                                  
								  <div class="form-group">
								  
                                    <input type="submit" name="submit1" value="Add" class="btn btn-success">
								  
								  </div>       
                                                </div>
                                            </div>
                    <!--/.col-->

                                                

                                          
                                            </div>
											 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quiz categories</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Quiz Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Quiz Time</th>
                                            <th scope="col">Pictures</th>
                                            <th scope="col">Change</th>
											<th scope="col">Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    $count = 0;
    $res = mysqli_query($link, "select * from exam_category");
    while ($row = mysqli_fetch_array($res)) {
        $count = $count + 1;
    ?>
        <tr>
            <th scope="row"><?php echo $count; ?></th>
            <td><?php echo $row["category"]; ?></td>
            <td><?php echo $row["pershkrimi"]; ?></td>
            <td><?php echo $row["exam_time_in_minutes"]; ?></td>

            <!-- Add a new table cell for the image -->
            <td>
                <?php if($row["image_path"] != ''): ?>
                    <img src="<?php echo $row["image_path"]; ?>" alt="Quiz Image" style="width:100px; height:auto;">
                <?php else: ?>
                    No pictures
                <?php endif; ?>
            </td>

            <td><a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-info">Change</a></td>
            <td><a href="delete_coment.php?id=<?php echo $row["id"]; ?>"class="btn btn-outline-danger">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["submit1"])) {
    $target_dir = "uploads/";
    $filename = basename($_FILES["quizimage"]["name"]);
    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // Generate a unique file name to prevent overwriting
    $newFileName = uniqid() . '.' . $imageFileType;
    $target_file = $target_dir . $newFileName;

    $uploadOk = 1;

    // Check if image file is an actual image or fake image
    if(isset($_FILES["quizimage"])) {
        $check = getimagesize($_FILES["quizimage"]["tmp_name"]);
        if($check !== false) {
            // File is an image
            $uploadOk = 1;
        } else {
            // File is not an image
            $uploadOk = 0;
        }
    }

    // Try to upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["quizimage"]["tmp_name"], $target_file)) {
            // File has been uploaded
            $imagePath = $target_file; // This path should be saved in your database
        } else {
            // File upload failed
            $uploadOk = 0;
        }
    }

    // Insert into database
    if($uploadOk == 1) {
        mysqli_query($link, "insert into exam_category (category, pershkrimi, exam_time_in_minutes, image_path) values ('$_POST[examname]', '$_POST[examdescription]', '$_POST[examtime]', '$imagePath')") or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
        alert("Quiz successfully added!");
        window.location.href=window.location.href;
        </script>
        <?php
    } else {
        // error message
    }
}
?>


                                        </div>
										</form>
                                 </div>
							</div> 
							
						</div>
					</div>
					
				</div>


		
<?php
include "footer.php";
?>     