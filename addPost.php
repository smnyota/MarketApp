<?php
    include('include/init.php');
    // echoPosting();
    echoHeader();
    echoMainHeader();
    echoBlackNavBar();
    
    redirectIfNotLoggedIn('sign-in.php?location=addPost');
    if(isset($_POST['postItem'])) {
        $postingTitle = $_POST['postingTitle'];
        $price = $_POST['price'];
        $location = $_POST['location'];
        $zipCode = $_POST['zipCode'];
        $description = $_POST['description'];
        $conditionInput = $_POST['conditionInput'];
        $categoryInput = $_POST['categoryInput'];
        $file = $_FILES['file'];

        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        $splitFileName = explode('.', $fileName); //splits the fileName by period
        $filteredFileExtension = strtolower(end($splitFileName)); //grabs the file extension

        //Currently allowing all file types and sizes
        if($fileError == 0) {

          $fileNameNew = uniqid('', true).".".$filteredFileExtension; //creates unique id for image based on current time in microseconds (eliminates chance of repeated random #)
          $fileDestination = '/Applications/MAMP/htdocs/images/'.$fileNameNew; 
          move_uploaded_file($fileTmpName, $fileDestination); //moves to images file
          $dbFileName = '/'.'images/'.$fileNameNew; //name for file in DB
        } else {
          echo "There was an error uploading your image!";
          header("Location: addPost.php?uploadFailure");
        }

        if (isset($_POST['deliveredInput'])) {
            $deliveryAvailable = 'Yes';
        } else {
            $deliveryAvailable = 'No';
        }
     
        $sellerId = $_SESSION['userId'];
        $uploadSuccess = insertProduct($postingTitle, $price, $description, $sellerId, $location, $zipCode, $categoryInput, $deliveryAvailable, $conditionInput, $dbFileName);
        debugOutput($uploadSuccess);
        if($uploadSuccess == NULL) {
          header("Location: viewproduct.php?categoryId=$categoryInput");
          exit();
        } else {
          header("Location: addPost.php?error=UploadFailure");
        }
    }
?>

<body>

<div>
  <form action="" method = 'POST' enctype="multipart/form-data"> 
      <div class = 'flexContainer'>
        <div class = 'row1Container'>
            <div class = 'row1'>
                <div class="label">Posting Title</div>
                <input type="text" class = 'field' name = 'postingTitle' placeholder = 'ex: MiniFridge' required><br/>
            </div>
            <div class = 'row1'>
                <div class="label">Price</div>
                $<input type="number" class = 'field' name = 'price' placeholder = '' required><br/>
            </div>
            <div class = 'row1'>
                <div class="label">Location</div>
                <input type="text" class = 'field' name = 'location' placeholder = 'ex: Umrath Dorm' required><br/>
            </div>
            <div class = 'row1'>
                <div class="label">ZipCode</div>
                <input type="text" class = 'field' name = 'zipCode' placeholder = '' required><br/>
            </div>
        </div>
        <div class = 'row2Container'>
            <div class = 'row2'>
                <div class="label">Description</div>
                <textarea name="description" rows="10" cols="80"></textarea>
            </div>
        </div>
        <div class = 'row3Container'>
            <fieldset class=''>
                <legend>Posting Details</legend>
                    <div class = 'row3ContainerInnerFieldSet'>
                        <div class = 'row3'>
                            <div class = 'column1'>
                              <label for="conditionInput">Condition</label><br/>
                                      <select name="conditionInput">
                                          <option value="-" hidden>Choose Condition</option> 
                                          <option value ="Brand New">Brand New</option>
                                          <option value="Like New">Like New</option>
                                          <option value="Good">Good</option>
                                          <option value="Fair">Fair</option>
                                          <option value="Salvage">Salvage</option>
                                      </select>
                            </div>
                        </div>
                        <div class = 'row3'>
                            <div class = 'column2'>
                              <label for="categoryInput">Category</label><br/>
                                  <select name="categoryInput" id="">
                                      <option value="-" hidden>Choose Category</option> 
                                      <option value="1">Appliances</option>
                                      <option value="2">Books, movies, & Music</option>
                                      <option value="3">Clothing, Shoes, & Accessories</option>
                                      <option value="4">Electronics</option>
                                      <option value="5">Health & Beauty</option>
                                      <option value="6">Miscellaneous</option>
                                      <option value="7">Pet Supplies</option>
                                  </select>
                            </div>
                        </div>
                        <div class = 'row3'>
                            <div class = 'column3'>
                                <input type="checkbox" id="" name="deliveredInput" value="">
                                <label for="">Delivery Available</label><br>
                                <input type="checkbox" id="" name="contactOkInput" value="">
                                <label for="">Ok for others to contact you about other products or services posted</label><br>
                                <!--File Type-->
                                <input type="file" name = 'file'>Upload Image 
                            </div>
                        </div>
                    </div>
            </fieldset>
        </div>
        <input type="submit" class = 'submitButton' name = 'postItem' value = 'Submit'>
      </div>
    </form>
  </body>
</html>

    




