<?php
class User{
	// Table name
	public static $tableName = "users";
	
	// Data members
	public $id;
	public $name;
	
	// functions
	function __toString(){
		return $this->name . "[" . $this->id ."]";
	}

	function copyFromRow( $row ){
		if( isset( $row['id'] ) ){
			$this->id = $row['id'];
		}
		$this->name = $row['name'];
	}
	
	function find( $n, $dbh ) {
		$stmt = $dbh->prepare( "SELECT * FROM ".
								User::$tableName.
								" WHERE name = :name" );
		$stmt->bindParam( ":name", $n );
		$stmt->execute();

		$row = $stmt->fetch();
		$this->copyFromRow($row);

		// check if define or not
		if( isset( $this->id ) ){
			return true;
		}
		else{
			return false;
		}
	}
}	
?>