<?php
//includes common components

function echoHeader ($pageTitle) {
    echo "
    <html>
    <head>
        <link rel='stylesheet' href='style2.css' />
        <link href='css/hover.css' rel='stylesheet' media='all'>
        <script src='https://kit.fontawesome.com/8f9a32541e.js' crossorigin='anonymous'></script>

        <title>$pageTitle</title>
    </head>
    <body>

    <nav>
            <div class = 'container'>
                <div class = 'hd'>
                <a href='index.php' class = 'tst'>Shangwe's Blog</a>
                </div>
                <div class='search-bar'>
                    <i class='fa-brands fa-searchengin'></i> 
                    <input type = 'search' placeholder='search'>
                </div>

                <div class='button'>
                    <p class = 'link'>About Me</p>
                    <p class = 'link'>Portfolio</p>
                    <p class = 'link'>Resume</p>

                </div>
            </div>
        </nav> 
        
    
    ";

}

function echoFooter() {
    echo "
    
    <div class = 'contactSection'>
        <div class = 'contactHeader'>Contact</div>
        <div class = 'contactBody'>
            <form class = 'fd'>
                <input type='text' class='fname' name='fname' placeholder='Name'><br> <br>
                <input type='text' class='lname' name='lname' placeholder='Email'> <br> <br>
                <input type='text' class='message' name='lname' placeholder='Message'>
                <input type = submit' class = 'submit' value = 'Submit'>
              </form>
            </div>
        </div>
 
    <footer>
        <div class = 'socialMedia'>
            <i class='fa-brands fa-linkedin fa-2xl' id = 'photo1'></i>    
            <i class='fa-brands fa-github fa-2xl' id ='photo2'></i>
            <i class='fa-brands fa-twitter fa-2xl' id='photo3'></i>
        </div>
    </footer>

    </body>
</html> 
    
    ";
}