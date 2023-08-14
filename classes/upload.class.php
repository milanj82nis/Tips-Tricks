<?php 

class Upload {

public function readFileASArray( $fileName ){


$array = file($fileName);

foreach ( $array as $array_num => $line ){

echo 'Line #<strong>' . $array_num . '</strong> : ' . htmlspecialchars( $line ). ' <br>';
}// foreach




}// readFileAsArray


public function  copyToFile( $copyFromFile , $copyToFile ){


if( !copy($copyFromFile , $copyToFile )){
	echo 'Error while copy file <strong>' .$copyFromFile . '</strong> to file <strong> ' . $copyToFile  . '</strong>.';
} else {
	echo 'File <strong> ' . $copyFromFile. ' </strong> is copied to file <strong>' . $copyToFile. '</strong>';
}




}// copyToFile




public function  getRealFilePath( $fileName ){


echo 'File <strong>' . $fileName . '</strong> is located in : <strong> '. realpath($fileName ) . '</strong>';


}// getRealFilePath


public function  getFileContentAsString( $fileName ){

$fileConent = file_get_contents($fileName);
echo $fileConent;



}// getFileContentAsString

public function  insertNewContentInFile( $fileName , $newContent ){

if( file_put_contents( $fileName , $newContent )){

echo 'In file <strong>' . $fileName . ' </strong> is inserted new content using file_put_contents php function. ';
header('Refresh:10;URL=file_put_contents.php');

} else {
echo 'In file <strong>' . $fileName . ' </strong> is not inserted new content using file_put_contents php function. ';
header('Refresh:10;URL=file_put_contents.php');


}


}//  insertNewContentInFile( $fileName , $newContent )



public function checkIsFileReadableOrNot($fileName ){

if( is_readable($fileName)){
	echo 'File <strong> ' . $fileName . ' </strong> is readable.' ;
} else {
		echo 'File <strong> ' . $fileName . ' </strong> is not readable.' ;

}

}// checkIsFileReadableOrNot


public function  checkIsFileOrNot( $fileName ){


if( is_file($fileName )){

	echo  '<strong>' . $fileName . '</strong> is file';
} else {
		echo  '<strong>' . $fileName . '</strong> is not file';

}


}// checkIsFileOrNot




public function checkIsFileExecutable($fileName){


if( is_executable($fileName )){
	echo 'File <strong> ' . $fileName . ' </strong> is executable.';
} else {
		echo 'File <strong> ' . $fileName . ' </strong> is not executable.';

}



}// checkIsFileExecutable



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

