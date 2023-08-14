<?php require_once 'classes/upload.class.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>copy() php function!</title>
  </head>
  <body>

<div class="container">
	
<div class="row">
	<div class="col-md-12">
		<br><br>
		    <h1>copy() php function</h1>

	</div>
</div>
<div class="col-md-6">
	<br><br>
<?php

try {

if( isset($_POST['copyFile'])){

$copyFromFile = $_POST['copyFromFile'];
$copyToFile = $_POST['copyToFile'];
$upload = new Upload();
$upload -> copyToFile( $copyFromFile , $copyToFile );

}// main isset


} catch ( PDOException $e ){
	echo $e -> getMessage();
}



?>
<form action="" method="POST">
	<div class="form-group">
		<label for="">Copy from file: </label>
		<select name="copyFromFile" class="form-control" id="">
			
<?php
try {


$upload = new Upload();
foreach ( $upload -> getAllFilesAndDirectories() as $fileName ){
?>
<option value="<?php echo $fileName ; ?>"><?php echo $fileName ; ?></option>

<?php

}// foreach

} catch ( PDOException $e ){
	echo $e -> getMessage();
}



?>

		</select>
	</div>
	<div class="form-group">
		<label for="">Copy to file: </label>
		<select name="copyToFile" class="form-control" id="">
			
<?php
try {


$upload = new Upload();
foreach ( $upload -> getAllFilesAndDirectories() as $fileName ){
?>
<option value="<?php echo $fileName ; ?>"><?php echo $fileName ; ?></option>

<?php

}// foreach

} catch ( PDOException $e ){
	echo $e -> getMessage();
}



?>

		</select>
	</div>
<div class="form-group">
	<button type="submit" name="copyFile" class="btn btn-primary">Copy to file</button>
</div>

</form>




</div>


</div><!-- container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>