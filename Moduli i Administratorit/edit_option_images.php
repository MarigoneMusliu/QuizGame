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


$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";
 
$id=$_GET["id"];
$id1=$_GET["id1"];

$res=mysqli_query($link,"select * from questions where id=$id");
while ($row=mysqli_fetch_array($res))
	
	{
	
		$question=$row["question"];
		$opt1=$row["opt1"];
		$opt2=$row["opt2"];
		$opt3=$row["opt3"];
		$opt4=$row["opt4"];
		$answer=$row["answer"];
	}

?>     
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Questions Whith Images</h1>
                    </div>
                </div>
            </div>
           
              
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
    <div class="card">
<form name="form1" action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><strong>Add New Questions with images</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class="form-control-label">Add Question</label>
                                <input type="text" name="fquestion" placeholder="Add Question" class="form-control" value="<?php echo $question; ?>">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $opt1; ?>" height="50" width="50"> <br>
                                <label for="company" class="form-control-label">Add Option1</label>
                                <input type="file" name="fopt1" class="form-control" style="padding-bottom:45px">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $opt2; ?>" height="50" width="50"> <br>
                                <label for="company" class="form-control-label">Add Option2</label>
                                <input type="file" name="fopt2" class="form-control" style="padding-bottom:45px">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $opt3; ?>" height="50" width="50"> <br>
                                <label for="company" class="form-control-label">Add Option3</label>
                                <input type="file" name="fopt3" class="form-control" style="padding-bottom:45px">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $opt4; ?>" height="50" width="50"> <br>
                                <label for="company" class="form-control-label">Add Option4</label>
                                <input type="file" name="fopt4" class="form-control" style="padding-bottom:45px">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo $answer; ?>" height="50" width="50"> <br>
                                <label for="company" class="form-control-label">Add Answer</label>
                                <input type="file" name="fanswer" class="form-control" style="padding-bottom:45px">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit2" value="Update Questions" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php 
if(isset($_POST["submit2"]))
{
	$opt1=$_FILES["fopt1"]["name"];
	$opt2=$_FILES["fopt2"]["name"];
	$opt3=$_FILES["fopt3"]["name"];
	$opt4=$_FILES["fopt4"]["name"];
	$answer=$_FILES["fanswer"]["name"];
	$tm = md5(time());

	if($opt1!="")
	{
		$dat1 = __DIR__ . DIRECTORY_SEPARATOR . "opt_images" . DIRECTORY_SEPARATOR . $opt1;
		$dat_db1 = "opt_images" . DIRECTORY_SEPARATOR . $opt1;
		move_uploaded_file($_FILES["fopt1"]["tmp_name"], $dat1);
	
		mysqli_query($link, "update questions set question='$_POST[fquestion]', opt1='$dat_db1' where id=$id") or die(mysqli_error($link));
	}
	
	
		if($opt2!="")
	{
		$dat2 = __DIR__ . DIRECTORY_SEPARATOR . "opt_images" . DIRECTORY_SEPARATOR . $opt2;
		$dat_db2 = "opt_images" . DIRECTORY_SEPARATOR . $opt2;
		move_uploaded_file($_FILES["fopt2"]["tmp_name"], $dat2);
	
		mysqli_query($link, "update questions set question='$_POST[fquestion]', opt2='$dat_db2' where id=$id") or die(mysqli_error($link));
	}
	
		if($opt3!="")
	{
		$dat3 = __DIR__ . DIRECTORY_SEPARATOR . "opt_images" . DIRECTORY_SEPARATOR . $opt3;
		$dat_db3 = "opt_images" . DIRECTORY_SEPARATOR . $opt3;
		move_uploaded_file($_FILES["fopt3"]["tmp_name"], $dat3);
	
		mysqli_query($link, "update questions set question='$_POST[fquestion]', opt3='$dat_db3' where id=$id") or die(mysqli_error($link));
	}
	
	
	
		if($opt4!="")
	{
		$dat4 = __DIR__ . DIRECTORY_SEPARATOR . "opt_images" . DIRECTORY_SEPARATOR . $opt4;
		$dat_db4 = "opt_images" . DIRECTORY_SEPARATOR . $opt4;
		move_uploaded_file($_FILES["fopt4"]["tmp_name"], $dat4);
	
		mysqli_query($link, "update questions set question='$_POST[fquestion]', opt4='$dat_db4' where id=$id") or die(mysqli_error($link));
	} 

	if($answer!="")
	{
		$dat5 = __DIR__ . DIRECTORY_SEPARATOR . "opt_images" . DIRECTORY_SEPARATOR . $answer;
		$dat_db5 = "opt_images" . DIRECTORY_SEPARATOR . $answer;
		move_uploaded_file($_FILES["fanswer"]["tmp_name"], $answer);
	
		mysqli_query($link, "update questions set question='$_POST[fquestion]', answer='$dat_db5' where id=$id") or die(mysqli_error($link));
	}
	mysqli_query($link, "update questions set question='$_POST[fquestion]' where id=$id") or die(mysqli_error($link));

}
?>

<script type="text/javascript">
			window.location="add_edit_questions.php?id=<?php echo $id1 ?>";
			</script>


<?php
include "footer.php";
?>     