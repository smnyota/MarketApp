<?php

function getCommentsForPost($postId){
	return dbQuery("
		SELECT *
		FROM comments
		WHERE postId = $postId
	")->fetchAll();
}


// function insertComment($comment, $postId, $author){
// 	dbQuery("
// 		INSERT INTO comments(postId, body, dateCreated, author)
// 		VALUES($postId, '$comment', NOW(), '$author')
// 	")->fetch();
// }

// function insertComment($comment, $postId, $author){
//     dbQuery("
//          INSERT INTO comments(postId, body, dateCreated, author)
//          VALUES(:postId, :comment, NOW(), :author)
//     ")->fetch();
	
// }

//handles any potential SQL Injection
function insertComment($comment, $postId, $author){
	dbQuery("
		INSERT INTO comments(postId, body, author)
		VALUES(:postId, :body, :author)
	", [
		'postId' => $postId,
		'body' => $comment,
        'author' => $author
	]);
}