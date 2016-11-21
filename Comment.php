<?php
class Comment{
	// Table name
	public static $tableName = "comments";
	
	// Data members
	public $id;
	public $create_time;
	public $author_id;
	public $body;
	
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
	
	function submit( $n, $dbh ) {
		$stmt = $dbh->prepare( "SELECT * FROM ".
								Comment::$tableName.
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