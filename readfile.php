<?php  require_once 'classes/upload.class.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>READFILE PHP FUNCTION</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<br><br><br>
  				 <h1>READFILE PHP FUNCTION</h1>

  			</div>
  		</div>
  		<div class="row">
  	  		<div class="col-md-12">
 <?php 
try {

if( isset($_POST['readFileContent'])){

$fileName = $_POST['fileName'];
$upload = new Upload();
$upload -> readFileContent( $fileName );



}// main isset


} catch ( PDOException $e ){
	echo $e -> getMessage();
}



  ?> 




<form action="" method="POST">
	
<div class="form-group">

	<select name="fileName" class="form-control" id="">
		
<?php

try {

$upload = new Upload();
foreach ( $upload -> getAllFilesAndDirectories() as $fileDirectory ){
?>

<option value="<?php echo $fileDirectory; ?>"><?php echo $fileDirectory ; ?></option>

<?php

}// end foreach


} catch ( PDOException $e ){
	echo $e -> getMessage();
}



?>


	</select>
</div>
<div class="form-group">
	

	<button name="readFileContent" class="btn btn-primary">Read File Content</button>

</div>

</form>



  			</div>		
  		</div>

  	</div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>