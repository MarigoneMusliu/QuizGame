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



$question = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";

$id = isset($_GET["id"]) ? $_GET["id"] : '';
$id1 = isset($_GET["id1"]) ? $_GET["id1"] : '';

if ($id != '') {
    $stmt = $link->prepare("SELECT * FROM questions WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $question = $row["question"];
        $opt1 = $row["opt1"];
        $opt2 = $row["opt2"];
        $opt3 = $row["opt3"];
        $opt4 = $row["opt4"];
        $answer = $row["answer"];
    }

    $stmt->close();
}
?>


    
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Question</h1>
                    </div>
                </div>
            </div>
           
              
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                       
                           <form name="form1" action="" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">
                              
							  
							  
                               <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Update Question</strong>
							</div>
                            
							
							
							<div class="card-body card-block">
                              <div class="form-group"><label for="company" 
								class=" form-control-label">Add Question</label>
								<input type="text" 
								name="question" 
								placeholder="Add Question" 
								class="form-control"
								value="<?php echo $question; ?>">
							  </div>
                                
								<div class="form-group"><label for="company" 
								class=" form-control-label">Add Option 1</label>
								<input type="text" 
								name="opt1" 
								placeholder="Option 1" 
								class="form-control"
								value="<?php echo $opt1; ?>">
							  </div>
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add Option 2</label>
								<input type="text" 
								name="opt2" 
								placeholder="Option 2" 
								class="form-control"
								value="<?php echo $opt2; ?>">
							  </div>
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add Option 3</label>
								<input type="text" 
								name="opt3" 
								placeholder="Option 3" 
								class="form-control"
								value="<?php echo $opt3; ?>">
							  </div>
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add Option 4</label>
								<input type="text" 
								name="opt4" 
								placeholder="Option 4" 
								class="form-control"
								value="<?php echo $opt4; ?>">
							  </div>
							  <div class="form-group"><label for="company" 
								class=" form-control-label">Add Question</label>
								<input type="text" 
								name="answer" 
								placeholder="Add Question" 
								class="form-control"
								value="<?php echo $answer; ?>">
							  </div>
                                  
								      <div class="form-group">
								        <input type="submit" name="submit1" value="Change Question" class="btn btn-success">
								  
								       </div>       
                                 </div>
                             </div>
                   </div>  
                                

                            </div>
                        </div></form>

                    </div>
                    <!--/.col-->

                                        

                                                

                                          
                                            </div>
                                        </div><!-- .animated -->
        
		</div><!-- .content -->
		


<?php
if (isset($_POST["submit1"])) {
    $stmt = $link->prepare("UPDATE questions SET question=?, opt1=?, opt2=?, opt3=?, opt4=?, answer=? WHERE id = ?");
    $stmt->bind_param("ssssssi", $_POST['question'], $_POST['opt1'], $_POST['opt2'], $_POST['opt3'], $_POST['opt4'], $_POST['answer'], $id);
    $stmt->execute();
    $stmt->close();

    ?>
    <script type="text/javascript">
        window.location = "add_edit_questions.php?id=<?php echo $id1; ?>";
    </script>
    <?php
}
?>

<?php include "footer.php"; ?>
	