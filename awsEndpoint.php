<?php
require 's3/vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

require __DIR__ . '/vendor/autoload.php';

//This will be null in local environments
$PlanetScaleDatabaseUrl = getenv("PLANETSCALE_DATABASE_URL");

$IAM_KEY = '';
$IAM_SECRET = '';

if ($PlanetScaleDatabaseUrl) {
	$IAM_KEY = getenv('IAM_KEY');
	$IAM_SECRET = getenv('IAM_SECRET');
} else {
	//local host
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
	$dotenv->load();
	$IAM_KEY = $_SERVER['IAM_KEY'];
	$IAM_SECRET = $_SERVER['IAM_SECRET'];
}

function movetoAWS($uploadedFile) {

	$PlanetScaleDatabaseUrl = getenv("PLANETSCALE_DATABASE_URL");
	$IAM_KEY = '';
	$IAM_SECRET = '';

	if ($PlanetScaleDatabaseUrl) {
		$IAM_KEY = getenv('IAM_KEY');
		$IAM_SECRET = getenv('IAM_SECRET');
	} else {
		//local host
		$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
		$dotenv->load();
		$IAM_KEY = $_SERVER['IAM_KEY'];
		$IAM_SECRET = $_SERVER['IAM_SECRET'];
	}

$bucketName = 'washulist';

try {
	$s3 = S3Client::factory(
		array(
			'credentials' => array(
				'key' => $IAM_KEY,
				'secret' => $IAM_SECRET
			),
			'version' => 'latest',
			'region'  => 'us-east-2'
		)
	);
} catch (Exception $e) {
	
	die("Error: " . $e->getMessage());
}

$keyName = 'photos/'. basename($uploadedFile["file"]['name']); 	//sets the name in S3 aws
$pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;

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

return $keyName;


}

?>


