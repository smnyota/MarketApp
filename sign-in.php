
<?php
    include('include/init.php');
    $alert=[];
    if (array_key_exists("location",$_REQUEST))
        {
          $nextLocation = $_REQUEST['location'];

        }
    if(isset($_POST['login'])) {
        $_SESSION =[]; 
        $email = strtolower($_POST['email']); 
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
        $userFromDatabase = getUserFromEmail($email);
        if ($userFromDatabase) {
            //email exists in database
            if (password_verify($password, $userFromDatabase['hashedPassword'])) {
                //inputted password matches hashed password from database
                $_SESSION['userId'] = $userFromDatabase['userId']; //sets the Session variable
                //login successful
                //redirect back to the home page
                if($nextLocation == "addPost") {
                  header("Location: addPost.php");
                } else {
                  header("Location: index.php");
                }
                die();

            } else {
              //Incorrect password
                $alert['invalid']= "Incorrect Email or Password!";
                //prompt user to retype their password!
            }
        } else {
          //Incorrect email address
          $alert['invalid']= "Incorrect Email or Password!";
        }
    }
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WashUList Sign-In</title>
    <link href="/examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sign-in.css" rel="stylesheet">

<body>
  <section class="vh-100" style="background-color: #007bff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="/images/try.jpeg"
                  alt="login form" class="img-fluid" style="" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form action="" method="post">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <!-- <span class="h1 fw-bold mb-0">WashUList</span> -->
                      <img src="/practice/random.png" alt="">
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Please Log into Your Account</h5>

                    <div class="form-outline mb-4">
                      <input type="email" name ="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div>
                      <?php
                        if (array_key_exists("invalid",$alert))
                        {
                        echo $alert['invalid'];
                        }
                      ?>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" name="login" type="submit">Login</button>
                    </div>

                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                        style="color: #393f81;">Register here</a></p>
                    <!--Coming Soon-->
                    <a href="#" class="small text-muted">Terms of use.</a>
                    <a href="#" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>