<?php 

class Upload {

public function  checkDirectory($name){



$check = is_dir( $name );
if( !$check ){
	echo '<span>Directory <h4>' . $name . '</h4> do not exists in folder tips-tricks  </span>';
} else {
		echo '<span>Directory  <h4>' . $name . '</h4>  exists in folder tips-tricks </span>';

}




}// checkDirectory

public function makeDirectory($name ){

	
mkdir( './' . $name , 0700 , true);

echo 'Directory <h4>' . $name .'</h4> is created using mkdir php command';




}// makeDirectory




}// Upload

