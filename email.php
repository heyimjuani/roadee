<?php

/*
EMAIL.php
Get the emails of the users from Roadee launching page
*/

session_start();
require_once("./database.php");
require_once("./db_email.php");

// $email = $_POST['emailfield'];
$email = $_POST['emailfield'];
$ok = db_addEmail($email);	

if ($ok)
{
	$from="no-reply@bureau-audit-energetique.fr";
	$to="naon.mathieu@gmail.com";
	$subject="Roadee New Email !!";
	$headers  = "MIME-Version: 1.0";
	$headers .= "Content-type: text/html; charset=utf-8";
	$headers .= "From: ".$from;
	$msg = "<!DOCTYPE><html><head></head><body><h1>Tenemos un nuevo user !</h1></body></html>";
	
	@mail($to, $subject, $msg, $headers);
	
	echo json_encode(array("success" => true));
}
else
{
	echo json_encode(array("success" => false));
}
