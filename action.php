<?php

$v_email = $_POST["email"];
$v_password = $_POST["password"];


//just example for training (not recomended on production mode)

if ($v_email== "admin" && $v_password== "12345"){
	session_start();
	$_SESSION["exampleapps"]["email"] = $v_email;
	header('Location: index.php');
} else {
	echo "login failed, HEAD login form and raise failed modal!";
}


?>