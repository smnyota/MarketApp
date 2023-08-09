<?php

require 's3/vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

//testing environemntal variables
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();
//test over

function movetoAWS($uploadedFile) {
	// AWS Info
$bucketName = 'washulist';
// Connect to AWS
try {
	$s3 = S3Client::factory(
		array(
			'credentials' => array(
				'key' => $_SERVER['IAM_KEY'],
				'secret' => $_SERVER['IAM_SECRET']
			),
			'version' => 'latest',
			'region'  => 'us-east-2'
		)
	);
} catch (Exception $e) {
	// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
	// return a json object.
	die("Error: " . $e->getMessage());
}


// For this, I would generate a unqiue random string for the key name. But you can do whatever.

$keyName = 'photos/'. basename($uploadedFile["file"]['name']); 	//sets the name in S3 aws
$pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;

// Add it to S3
try {
	// Uploaded:
	$file = $uploadedFile["file"]['tmp_name'];

	$s3->putObject(
		array(
			'Bucket'=>$bucketName,
			'Key' =>  $keyName,
			'SourceFile' => $file,
			'StorageClass' => 'REDUCED_REDUNDANCY'
		)
	);

} catch (S3Exception $e) {
	die('Error:' . $e->getMessage());
} catch (Exception $e) {
	die('Error:' . $e->getMessage());
}

// $accessCode = "123"; //randomize this
// $accessCode = uniqid();
return $keyName;


}

?>


