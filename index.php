<?php
include('include/init.php');
echoHeader("Shangwe's website");
?>
    <br>
    <br>
    <br>
    <h1>Welcome to My Blog!</h1>
    <h2 class = "cHead">Feel Free to Check out my thoughts on recent tech, news, my dogs, and more! </h2>
    <br>
    <br>
    <br>
<!-- <h3>Use the Search Bar to search for specific Posts!</h3> -->

    <div class = "mainContent">

        <div class = "card">
            <img src="images/m1.jpeg" alt="AI">
            <div class = "text1"> 
            <a href="view_posts.php?postId=1"> Java vs Python: Which langauge to learn in 2023?</a>       
            </div>
        </div>

        <div class = "card">
            <img src="images/gpt.jpeg" alt="AI">
            <div class = "text1">
                <a href="view_posts.php?postId=2"> Implications of ChatGPT</a>       
            </div>
        </div>

        <div class = "card">
            <img src="images/mac.jpeg" alt="AI">
            <div class = "text1">
                <a href="view_posts.php?postId=3"> macOS Ventura Deep Dive: Is it Worth It?</a>       
            </div>
        </div>

        <div class = "card">
            <img src="images/1ad.jpeg" alt="AI">
            <div class = "text1">
                The Enigmatic Resurgence: Unveiling Arduino's Veiled Potential
            </div>
        </div>
        
        <div class = "card">
            <img src="images/jp.jpeg" alt="AI">
            <div class = "text1">
                Java vs Python: Which langauge to learn in 2023?
            </div>
        </div>

        <div class = "card">
            <img src="images/programming.jpeg" alt="AI">
            <div class = "text1">
                Top Programming Languages Right Now!
            </div>
        </div>


        <div class = "card">
            <img src="images/s1.png" alt="AI">
            <div class = "text1">
                The Enigmatic Resurgence: Unveiling Arduino's Veiled Potential
            </div>
        </div>
        
        <div class = "card">
            <img src="images/AI.webp" alt="AI">
            <div class = "text1">
                The Future of AI
            </div>
        </div>

        <div class = "card">
            <img src="images/1232.png" alt="AI">
            <div class = "text1">
                Top Programming Languages Right Now!
            </div>
        </div>
    </div>

    <div class = "contactSection">
        <div class = "contactHeader">Contact</div>
        <div class = "contactBody">
        <form class = "fd">
            <input type="text" class="fname" name="fname" placeholder="Name"><br> <br>
            <input type="text" class="lname" name="lname" placeholder="Email"> <br> <br>
            
            <input type="text" class="message" name="lname" placeholder="Message">

            <input type = "submit" class = "submit" value = "Submit">
            </form>
        </div>
    </div>
       
    <footer>
        <div class = "socialMedia">
            <i class="fa-brands fa-linkedin fa-2xl" id = "photo1"></i>    
            <i class="fa-brands fa-github fa-2xl" id ="photo2"></i>
            <i class="fa-brands fa-twitter fa-2xl" id="photo3"></i>
        </div>
    </footer>

    </body>
</html>