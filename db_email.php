<?php
require_once("database.php");


// high-level functions
// --------------------


function db_addEmail($email) {
	$mysqli = dbConnection();
    $result = insertEmail($mysqli, $email);
    $mysqli->close();
	
	return $result;
}

// low-level functions
// -------------------

// insert a new Email in databse.
function insertEmail($mysqli, $email) {
	$sqlStr = "INSERT INTO email VALUES(NULL, '".$email."')"; 
	$result = $mysqli->query($sqlStr);
	
	// if (!$result) { 
	  // echo("<p>Error performing query insertEmail (error number : " . $mysqli->errno
		// .  ") : " . $mysqli->error . " - Query : ".$sqlStr."</p>"); 
	  // return $mysqli->error;
	// } 
	
	return $result;
}

?>