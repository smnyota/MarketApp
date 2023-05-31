
<?php
    // include('include/init.php');

    // echo "Hello World";
    include('include/init.php');
    // echo "<br>";
    // var_dump($_REQUEST);
   
    // recently added


$errors = [];
if(isset($_REQUEST['submitButton'])){
	
	
	if($_REQUEST['comment'] == ''){
		$errors['comment'] = 'Required';
	}
	
	if(sizeof($errors) === 0){
		insertComment($_REQUEST['comment'], $_REQUEST['postId'], $_REQUEST['author']);
		header('location: ?postId='.$_REQUEST['postId']);
		exit;
	}
}
    $post = getPost($_REQUEST['postId']);   //gets a specific blog post based on the postID
    $comments = getCommentsForPost($post['postId']);  //gets a specific comment for the post (the String)
   



    


    echoHeader("Shangwe's website");
    // debugOutput($_REQUEST);

    $postId = $_REQUEST['postId'];
    // getPost();
    
?>


    <br><br><br>
    <h1>
        <?php
            echo(getPost($postId)['title']);
        ?>
    </h1>
    <h2 class = "lh2">
        <?php
            echo getPost($postId)['author'];
        ?>
    <br>
        <?php 
            echo (getPost($postId)['dateCreated']);
        ?>
    </h2>
    <p class = "mainText">
        <?php 
            echo(getPost($postId)['body']);
        ?>
    </p>

    <br>

  
<?php
    
    echo "

    
    <form action='' method='POST'>
    ";
    
    if(isset($errors['comment'])){
        echo "
            <div style='color:red; font-weight: bold;'>
                $errors[comment]
            </div>
        ";
    }
    
    echo "
        <div class = 'formBlock'>
        <input type='text' name='author' placeholder='Author' />
        <textarea name='comment' cols='40' rows='5' placeholder = 'Comment'></textarea><br />
        <input type='hidden' name='postId' value='$post[postId]' />
        <input type='submit' name='submitButton' value='Save Comment' />
        </div>
    </form>
    
    ";
?>

<h2 class = "commentSection">
    Comment Section
</h2>
<div class = "commentBlock">
    <!-- <div class = "comment1">
        <?php 
        // echo getCommentsForPost($postId)[0]['author'].': '.getCommentsForPost($postId)[0]['body'];
        ?>
    </div> -->

    <?php
            // debugOutput(getCommentsForPost($postId));
            
        $commentsArray = getCommentsForPost($postId);
    foreach ($commentsArray as $components) {
        // echo "
        // $components['author'].$components['body']
        // ";
        echo "
        <div class = 'textWrap'>
        <div class = 'author'>".htmlspecialchars($components['author'])."</div>
        <div class = 'commentText'>".htmlspecialchars($components['body'])."</div>
        </div>
        ";

    }
    ?>

</div>

<?php
    echoFooter();

    $password = 'abc123';
    // openssl_encrypt($password, 'yourKey');
    echo $password;
    //added
    var_dump($comments);



    var_dump($_REQUEST);