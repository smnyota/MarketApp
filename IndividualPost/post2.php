<?php
include('include/init.php');
echoHeader("Shangwe's website");
?>
<br><br><br>
<h1><?php echo(getPost(2)['title']);?> </h1>
<h2 class = "lh2"><?php echo("Written by ".getPost(2)['author']." on ".getPost(2)['dateCreated']); ?></h2>
<p><?php echo(getPost(2)['body']);?></p>
<br>
<?php echoFooter();?>