<?php
// check if log in variable exists
isset($_POST) or die();

// require stuff
// include database connection
require_once("../models/db.php");
// User class
require_once("../models/User.php");

// Look for the user in the db
$user = new User();

// Build the json
if( $user->find( $_POST['name'], $dbh ) ){ 
	// Array
	$arr = array( 'id' => $user->id, 'name' => $user->name );
} else { 
	// Array
	$arr = array( 'error' => 'loginfail' );
}
// return json_encode
echo json_encode( $arr );
?>

