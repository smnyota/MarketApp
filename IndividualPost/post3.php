<?php
include('include/init.php');
echoHeader("Shangwe's website");
?>
<br><br><br>
<h1><?php echo(getPost(3)['title']);?> </h1>
<h2 class = "lh2"><?php echo("Written by ".getPost(3)['author']." on ".getPost(3)['dateCreated']); ?></h2>
<p><?php echo(getPost(3)['body']);?></p>
<br>
<?php echoFooter();?>
       