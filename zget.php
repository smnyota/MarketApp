<?php
include('include/init.php');
  echoHeader();
  echoMainHeader();
  echoDynamicBlackHeader();
//   echo "hello world";
//   $BUCKET_NAME = 'washulist';
//   $IAM_KEY = 'AKIAS5XAT5JHWPKBOFYX';
//   $IAM_SECRET = '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';

//   require 's3/vendor/autoload.php';
//   use Aws\S3\S3Client;
//   use Aws\S3\Exception\S3Exception;

//   // Get the access code
//   $accessCode = $_GET['c'];
// //   $accessCode = strtoupper($accessCode);
// //   $accessCode = trim($accessCode);
// //   $accessCode = addslashes($accessCode);
// //   $accessCode = htmlspecialchars($accessCode);

// // Verify valid access code
//  //Not verifying valid access code
//  $file = getS3File($accessCode);
//  $keyPath = $file['s3FilePath'];
 

//   // Get file
//   try {
//     $s3 = S3Client::factory(
//       array(
//         'credentials' => array(
//           'key' => $IAM_KEY,
//           'secret' => $IAM_SECRET
//         ),
//         'version' => 'latest',
//         'region'  => 'us-east-2'
//       )
//     );

//     //
//     $result = $s3->getObject(array(
//       'Bucket' => $BUCKET_NAME,
//       'Key'    => $keyPath
//     ));
//     //
   
//     header("Content-Type: $mimeType");    
//     // Display it in the browser
//     header("Content-Type: {$result['ContentType']}");
//     header('Content-Disposition: filename="' . basename($keyPath) . '"');
//     // echo $result['Body'];

//   } catch (Exception $e) {
//     die("Error: " . $e->getMessage());

//   }
   
    $source = getS3File(1234)['s3FilePath'];
   
    echo sprintf('<img class="bd-placeholder-img card-img-top" width="100" height="225" src="https://washulist.s3.amazonaws.com/%s" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100" height="100" fill="#55595c"/><text x="50" y="50" fill="#eceeef" dy=".3em">Thumbnail</text>/>', $source);

      
    // printf('<img src="https://washulist.s3.amazonaws.com/%s"/>', $source);
    // echo sprintf('<img src="https://washulist.s3.amazonaws.com/%s"/>', $source);



  ?>

    
  <!-- <img src="https://washulist.s3.amazonaws.com/test_example/apple.png" alt="plz work"> -->