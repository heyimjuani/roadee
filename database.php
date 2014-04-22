<?php

// ovh username : nm23186-ovh

function dbConnection() {
	$server="localhost";
	$username="pschestc_roadee";
	$password="w7kEeEn_l9v{";
	$database="pschestc_roadee";
	/*$server="localhost";
	$username="root";
	$password="root";
	$database="roadee";*/
	
 	$mysqli = new mysqli($server, $username, $password, $database);
	
	if ($mysqli->connect_error) {
		die('Erreur de connexion (' . $mysqli->connect_errno . ') : '
			. $mysqli->connect_error);
	}
	
	/* change character set to utf8 */
	if (!$mysqli->set_charset("utf8")) {
		die("Error loading character set utf8 : " . $mysqli->error);
	}
	
	return $mysqli;

	// OLD stye with $link
/*  	$link = @mysqli_connect ($server, $username, $password) or die (mysql_error()); 
	if (!@mysqli_select_db($link, $database)) {    
		 echo "<p>There has been an error. This is the error message:</p>"; 
		 echo "<p><strong>" . mysqli_error($link) . "</strong></p>"; 
		 echo "Please Contant Your Systems Administrator with the details"; 
	} 
	return $link;  */
}
?>