<?php
include_once('include/init.php');

if(isset($_REQUEST['saveComment'])){
	saveComment($_REQUEST['name'], $_REQUEST['comment']);
	header('location:?');
	exit;
}

?>

<form action='' method='post'>
	<h2>Leave a comment</h2>
	Name: <input type='text' name='name' /> <br/><br/>

	Comment: <textarea name='comment' style='width: 400px; height: 300px;'></textarea> <br/><br>

	<input type='submit' name='saveComment' />
</form>


<?php 
    function saveComment($name, $comment){
		dbQuery("
			INSERT INTO injection_test(name, comment)
			VALUES('$name', '$comment')
		");
	}
?>
