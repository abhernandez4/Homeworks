<?php
// check if log in variable exists
require_once("../models/db.php");
// User class
require_once("../models/User.php");
if(isset($_POST['done'])){
	//$name = mysql_escape_string($_POST['username']);
	$comment = mysql_escape_string($_POST['comment_text']);

	mysql_query("INSERT INTO 'comments' ('body') VALUES ('{$comment}')");
	exit ();
}


echo json_encode( $arr );
?>

