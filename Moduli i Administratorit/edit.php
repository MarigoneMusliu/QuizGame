
<?php
include "header.php";
include "connection.php";

$id=$_GET["id"];
$res=mysqli_query($link,"select * from exam_category where id=$id");

while($row=mysqli_fetch_array($res)) {

	$exam_category=$row["category"];
	$pershkrimi=$row["pershkrimi"];
	$exam_time=$row["exam_time_in_minutes"];
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
                        <h1>Change Quiz</h1>
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
						<form name="formal" action="" method="post" enctype="multipart/form-data">
						
                           
                            <div class="card-body">
                              
                                

                            </div>
                        </div>

                    </div>
                    
					     <div class="col-lg-6">
                        <div class="card">
                        <div class="table-responsive">
            <table class="table table-bordered">
                            
                            <div class="card-header"><strong>Change quiz category</strong>
							</div>
                            
							
							
							<div class="card-body card-block">
                                <div class="form-group">
                                    <label for="newQuizImage" class=" form-control-label">Upload new image (optional)</label>
                                    <input type="file" name="newquizimage" class="form-control">
                                </div>

                              <div class="form-group">
                                <label for="company" class=" form-control-label">New quiz category</label>
								<input type="text" name="examname" placeholder="New quiz category" class="form-control" value="<?php echo $exam_category; ?>">
							  </div>

                              <div class="form-group">
                                <label for="company" class=" form-control-label">New description</label>
								<input type="text" name="examdescription" placeholder="New description" class="form-control" value="<?php echo $pershkrimi; ?>">
							  </div>
                                
								<div class="form-group"><label for="vat" class=" form-control-label">
								      Quiz time in minutes</label><input type="text" 
									  placeholder="Quiz time in minutes" class="form-control" name="examtime"
								      value="<?php echo $exam_time; ?>"></div>
                                  
								      <div class="form-group">
								        <input type="submit" name="submit1" value="Update the quiz" class="btn btn-success">
								  
								       </div>       
                                 </div>
                             </div>
                   </div>
							
                    </div>
                                       <?php
if(isset($_POST["submit1"])) {
    // Update other fields first
    mysqli_query($link, "update exam_category set category='$_POST[examname]', pershkrimi='$_POST[examdescription]', exam_time_in_minutes='$_POST[examtime]' where id=$id") or die(mysqli_error($link));

    // Check if a new image was uploaded
    if(isset($_FILES["newquizimage"]) && $_FILES["newquizimage"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["newquizimage"]["name"]);
        $uploadOk = 1;

        // Add file type and size validations here as needed

        // Upload the new image
        if($uploadOk == 1 && move_uploaded_file($_FILES["newquizimage"]["tmp_name"], $target_file)) {
            // Delete the old image file from the server
            $oldImagePath = mysqli_query($link, "SELECT image_path FROM exam_category WHERE id=$id");
            if($row = mysqli_fetch_assoc($oldImagePath)) {
                if(file_exists($row['image_path'])) {
                    unlink($row['image_path']);
                }
            }

            // Update the database with the new image path
            mysqli_query($link, "update exam_category set image_path='$target_file' where id=$id") or die(mysqli_error($link));
        }
    }

    ?>
    <script type="text/javascript">
        window.location.href="exam_category.php";
    </script>
    <?php
}

?> 

                                        </div>
										</form>
                                 </div>
							</div> 
							
						</div>
					</div>
					
				</div><!-- .content -->
		

		
<?php
include "footer.php";
?>     