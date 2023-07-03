<?php 

class Upload {


public function getFileSize( $fileName ){

echo 'File <strong>' . $fileName . '</strong> have ' . filesize($fileName ) . ' bytes';;

}// getFileSize



public function  readFileContent( $fileName ){


readfile( $fileName);


}// readFileContent


public function  checkIsFileWritableOrNot( $fileName ){


if( is_writable($fileName)){
	echo ' File <strong> ' . $fileName. ' </strong> is writable';
} else {
		echo ' File <strong> ' . $fileName. ' </strong> is not  writable';

}



}//  checkIsFileWritableOrNot( $fileName )


public function changeFileDirectoryName( $oldName , $newName ){


if( !rename ( $oldName , $newName )){
header('Refresh:4;URL=rename.php');
echo 'File / Directory name can not be changed';


} else {

header('Refresh:10;URL=rename.php');
echo 'File / Directory :  ' . $oldName . ' is changed to ' . $newName     ;

}


}// changeFileDirectoryName



public function getAllFilesAndDirectories(){

$directory = './'; // this is current directory where is scandir.php file exists

$files = scandir( $directory , SCANDIR_SORT_DESCENDING );

return $files;

}// getAllFilesAndDirectories




public function deleteDirectory($directoryName){


	rmdir($directoryName);
echo 'Directory <h4> ' . $directoryName . '</h4> is deleted.';
header('Refresh:4;URL=rmdir.php');
}// deleteDirectory



public function  unlinkFile( $fileName ){


unlink( $fileName);
echo 'File <h5> ' . $fileName . ' </h5> is unlinked ( deleted). ';
header('Refresh:4;URL=unlink.php');

}// unlinkFile

public function scanDirectory(){

$directory = './'; // this is current directory where is scandir.php file exists

$files = scandir( $directory , SCANDIR_SORT_DESCENDING );
echo '<pre>';

var_dump($files );

echo '</pre>';
}// scanDirectory


public function checkIfFileExists( $fileName){

if( file_exists($fileName)){
	echo 'The file <h5>' . $fileName . ' </h5> exists.';
} else {
	echo 'The file <h5>' . $fileName . ' </h5> do not exists.';
}

}// checkIfFileExists



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

