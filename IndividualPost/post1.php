<?php
    include('include/init.php');
    echoHeader("Shangwe's website");
    // $thisPost = getPost(1);
    // debugOutput($thisPost);

?>
<br><br><br>
<h1>
    <?php echo(getPost(1)['title']);?> 
</h1>
<h2 class = "lh2">
    <?php echo("Written by ".getPost(1)['author']." on ".getPost(1)['dateCreated']); ?>
</h2>
<p>
    <?php echo(getPost(1)['body']);?>
</p>
<br>
<?php echoFooter();?>
       

