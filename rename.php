<?php require_once 'classes/upload.class.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>RENAME PHP FUNCTION</title>
  </head>
  <body>
  	<div class="container">
  		 <br><br>
  		    

<div class="row">
	<div class="col-md-12">
		<h1>RENAME PHP FUNCTION</h1>
	</div>
</div><!-- row -->
<div class="row">
	<div class="col md-12">
		
<?php 
try {

if( isset($_POST['changeFileDirectoryName'])){

$oldName = $_POST['oldName'];
$newName = $_POST['newName'];

$upload = new Upload();
$upload -> changeFileDirectoryName( $oldName , $newName );
}// main isset





} catch ( PDOException $e ){
	echo $e -> getMessage();
}



?>



<form action="" method="POST">
	<div class="form-group">
		
		<select name="oldName" id="" class="form-control">
		
		<?php 
		try {


			$upload = new Upload();
			foreach ( $upload -> getAllFilesAndDirectories() as $name ){

				?>

				<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
				<?php
			}// foreach

		} catch ( PDOException $e ){
			echo $e -> getMessage();
		}



		 ?>
	</select>
	</div><!-- form-group	-->
	<div class="form-group">
		<input type="text" name="newName" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" name="changeFileDirectoryName" class="btn btn-primary" >Change name</button>
	</div>


</form>


	</div>
</div>





 <br><br>
  	</div><!-- container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>