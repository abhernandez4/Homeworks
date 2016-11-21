<?php
// Check the request to logout
if( $_POST['logout'] ){
	// Respond request
	echo json_encode( array( 'response' => 'OK' ));
}
?>