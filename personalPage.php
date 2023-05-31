<?php
  include('include/init.php');
  echoHeader("Shangwe's MainPage");
?>

<div class='container'>
            <img src='/images/wp1.jpeg' alt='basicBackground' class='pictureBackground'/>
            <!-- <h1>ShangweNyota.com</h1> -->
            <div class='banner'> <a href = 'index.html'>ShangweNyota.com </a></div>
            <div class='center'>Hi, I'm Shangwe! I am a Computer Science Student at Washington University in St. Louis!!!</div>
        </div>
       

        <div class = 'bigContainer'>

            <div class = 'Portfolio'>
                    <div class = 'ab-img'>
                        <img src = '/images/desk.jpeg'/>
                    </div>

                    <div class = 'port-whiteBlock'>
                      
                        <br>
                        <center class = 'heading'>About Me</center><br>
                        <center>Welcome to my 'About Me' page! I'm a CS student and aspiring software engineer with a passion for the ever-evolving world of technology. Currently studying at WashU, I am dedicated to expanding my knowledge and skills in the tech space. Beyond coding, I find joy in the simple things, like spending time with my two dogs and indulging in my love for soccer. To discover more about my journey, interests, and aspirations, click the page and delve into a deeper understanding of who I am. Let's connect and explore the exciting possibilities together!




                        </center>
                        <!-- <button class="button1">Cick Me!</button> -->
                        <br>
                        <!-- <div class = "port-blueButton">
                            <button class="button1">Cick Me!</button>
                        </div> -->
                        <button class = "test">More About Me!</button>
                    </div>

                    <!-- <div class = "port-blueButton">
                        <button class="button1">Cick Me!</button>
                    </div> -->

            </div>

            <div class = "Portfolio">
                <div class = "port-img">
                    <img src = "/images/ales-nesetril-Im7lZjxeLhg-unsplash-1-1045x422.jpeg"/>
                </div>

                <div class = "port-whiteBlock">
                  
                    <br>
                    <center class = "heading">Shangwe's Portfolio</center><br>
                    <center>Welcome to my personal website! I'm passionate about programming and have dedicated the past few years to crafting a diverse range of personal projects using various programming languages. From web development to machine learning, I've explored different domains, honing my skills along the way. On my portfolio page, you can delve into a collection of my finest creations, showcasing my problem-solving abilities and creative thinking. Click the link below to explore my work and witness the results of my dedication and passion</center>
                    <!-- <button class="button1">Cick Me!</button> -->
                    <br>
                    <!-- <div class = "port-blueButton">
                        <button class="button1">Cick Me!</button>
                    </div> -->
                    <button class = "test">Visit Portfolio</button>
                </div>
            </div>

                <!-- <div class = "port-blueButton">
                    <button class="button1">Cick Me!</button>
                </div> -->
                <div class = "Portfolio">
                    <div class = "hb-img">
                        <img src = "/images/tech1.jpeg"/>
                    </div>
        
                    <div class = "port-whiteBlock">
                      
                        <br>
                        <center class = "heading">Tech Blog</center><br>
                        <center>Welcome to my Tech Blog! Here, I dive into the captivating world of technology, sharing insightful articles and leaving a touch of my own thoughts. As an avid reader and explorer of tech advancements, I strive to stay up to date with the latest innovations and emerging technologies. Join me on this journey as we unravel the complexities of the digital realm and explore the impact of technology on our lives. Get ready to expand your knowledge and engage in thought-provoking discussions. Let's embrace the ever-evolving tech landscape together!




                        </center>
                        <!-- <button class="button1">Cick Me!</button> -->
                        <br>
                        <!-- <div class = "port-blueButton">
                            <button class="button1">Cick Me!</button>
                        </div> -->
                        <a href="index.php">

                        <button class = "test">Explore the Blog! </button>
                    </a> 

                    </div>
        
                    <!-- <div class = "port-blueButton">
                        <button class="button1">Cick Me!</button>
                    </div> -->
                </div>
              


            

        </div>

        <div class = "contactSection">
            <div class = "contactHeader">Contact</div>
            <div class = "contactBody">
            <form class = "fd">
                <!-- <label for="fname">First name:</label><br> -->
                <input type="text" class="fname" name="fname" placeholder="Name"><br> <br>
                <!-- <label for="lname">Last name:</label><br> -->
                <input type="text" class="lname" name="lname" placeholder="Email"> <br> <br>
               
                <input type="text" class="message" name="lname" placeholder="Message">

                <input type = "submit" class = "submit" value = "Submit">
              </form>
            </div>
        </div>

        <!-- <footer> -->
            <!-- <div class = "socialMedia">
                <a href="#" target="_blank">
                    <img src = "/images/2Github.png" alt ="Github Logo" class = "photo1" >
                </a>
                <a href="#" target="_blank">
                    <img src = "/images/linkedin.webp" alt ="Github Logo" class = "photo2" >
                </a>
                <a href="#" target="_blank">
                    <img src = "/images/instagram.webp" alt ="Github Logo" class = "photo3" >
                </a>
            </div> -->
        <!-- </footer> -->
    <footer>
        <div class = "socialMedia">
            <i class="fa-brands fa-linkedin fa-2xl" id = "photo1"></i>    
            <i class="fa-brands fa-github fa-2xl" id ="photo2"></i>
            <i class="fa-brands fa-twitter fa-2xl" id="photo3"></i>


        </div>
    </footer>

    </body>
</html>