<?php
include('include/init.php');
echoUserHeader();
if(isset($_POST['login'])) {
    $_SESSION =[];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = strtolower($_POST['email']); 
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  

    if (getUserFromEmail($email)) {
        echo '<script>alert("Email Already Exists in Database!")</script>';
    } else {
        //Successfuly inserts user into MySQL table and sends them to the home page
        insertUser($email, $phoneNumber, $firstName, $lastName, $hashedPassword); 
        header("Location: index.php");
        die();
    }
}
?>
  
    <section class="vh-100 bg-image" style="background-color: #007bff;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100"> <!--Could make this 95...both 100 and 95 look fine-->
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                    <form action="" method="post">

                         <div class="form-outline mb-4">
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="firstName" placeholder="John" required/>
                        <label class="form-label" for="form3Example1cg">First Name</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="lastName" placeholder="Doe" required/>
                        <label class="form-label" for="form3Example1cg">Last Name</label>
                        </div>
                        <!-- Not sure if it is convention to use regex in html form -->
                        <div class="form-outline mb-4">
                        <input type="tel" id="form3Example3cg" class="form-control form-control-lg" name="phoneNumber" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        <label class="form-label" for="form3Example3cg">Phone Number</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="johndoe@gmail.com" name="email" required/>
                        <label class="form-label" for="form3Example3cg">Your Email</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" required/>
                        <label class="form-label" for="form3Example4cg">Password</label>
                        </div>
            
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="login">Register</button>
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="sign-in.php"
                            class="fw-bold text-body"><u>Login here</u></a></p>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>