<?php require_once 'classes/upload.class.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>IS_DIR PHP FUNCTION</title>
  </head>
  <body>
  	<div class="container">
  		<br><br><br><br><br>
    <h1>IS_DIR PHP FUNCTION</h1>


<div class="row">
	<div class="col-md-12">
		
<?php

try {
	if( isset($_POST['checkDirectory'])){


		$name = $_POST['name'];
		$upload = new Upload();
		$upload -> checkDirectory($name);
	}



} catch ( PDOException $e ){
	echo $e -> getMessage();
}


?>
		<form action="" method="POST" enctype="multipart/form-data">
			
			<div class="form-group">
				
				<input type="text" name="name" class="form-control">

			</div>
			<div class="form-group">
				

				<button name="checkDirectory" class="btn btn-primary" >Check if directory exists</button>

			</div>


		</form>
	</div>
</div>
<br><br>

  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>