<?php
    include('include/init.php');

    if(isset($_POST['postItem'])) {
        // var_dump($_POST);
        $postingTitle = $_POST['postingTitle'];
        $price = $_POST['price'];
        $location = $_POST['location'];
        $zipCode = $_POST['zipCode'];
        $description = $_POST['description'];
        $emailInput = $_POST['emailInput'];
        $conditionInput = $_POST['conditionInput'];
        $phoneNumberInput = $_POST['phoneNumberInput'];
        $categoryInput = $_POST['categoryInput'];
        $imageFile = $_POST['fileToUpload']; //Currently there is no image file support atm (S3 In the Future?)
        //should probably just use the ternary operator here
        if (isset($_POST['deliveredInput'])) {
            $deliveryAvailable = 'Yes';
        } else {
            $deliveryAvailable = 'No';
        }
        $verifiedUser = verifyUser($emailInput, $phoneNumberInput); 
        if ($verifiedUser) {
        $sellerId = $verifiedUser['userId'];
        insertProduct($postingTitle, $price, $description, $sellerId, $location, $zipCode, $categoryInput, $deliveryAvailable, $conditionInput);
        } else {
            echo 'Please Login Before Trying to Post an Item!'; 
            //This case should (almost) never occur... atm I plan on having users registering or logging in before making a post.
        }
    }

?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">

        </head>
        <body>
            <div>
                <form action="" method = 'post' enctype="multipart/form-data"> <!-- Comment out if needed -->
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
                                                <div class="label">Email Address</div>
                                                <input type="text" class = 'field' name = 'emailInput' placeholder = 'johndoe@gmail.com' required><br/>
                                                <label for="conditionInput">Condition</label><br/>
                                                        <select name="conditionInput">
                                                            <option value="-">-</option> <!-- I'm not too sure how to prevent a user from selecting this-->
                                                            <option value ="Brand New">Brand New</option>
                                                            <option value="Like New">Like New</option>
                                                            <option value="Good">Good</option>
                                                            <option value="Fiar">Fair</option>
                                                            <option value="Salvage">Salvage</option>
                                                        </select>
                                            </div>
                                        </div>

                                        <div class = 'row3'>
                                            <div class = 'column2'>
                                                <div class="label">Phone Number</div>
                                                <input type="text" class = 'field' name = 'phoneNumberInput' placeholder = '123-456-7890' required><br/>
                                                <label for="categoryInput">Category</label><br/>
                                                    <select name="categoryInput" id="">
                                                        <option value="-" selected>-</option>
                                                        <option value="Appliances">Appliances</option>
                                                        <option value="Bookes, movies, & Music">Bookes, movies, & Music</option>
                                                        <option value="Clothing, Shoes, & Accessories">Clothing, Shoes, & Accessories</option>
                                                        <option value="Electronics">Electronics</option>
                                                        <option value="Health & Beauty">Health & Beauty</option>
                                                        <option value="Miscellaneous">Miscellaneous</option>
                                                        <option value="Pet Supplies">Pet Supplies</option>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class = 'row3'>
                                            <div class = 'column3'>
                                                <input type="checkbox" id="" name="deliveredInput" value="">
                                                <label for="">Delivery Available</label><br>
                                                <input type="checkbox" id="" name="contactOkInput" value="">
                                                <label for="">Ok for others to contact you about other products or services posted</label><br>
                                                <!-- Image Uploading: No real functionality atm -->
                                                <input type="file" name = 'fileToUpload' required>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>
                        <input type="submit" class = 'submitButton' name = 'postItem' value = 'Submit'>
                    </div>
                </form>
            </div>
        </body>
    </html>





