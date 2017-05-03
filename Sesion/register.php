<?php
$bryan = $_REQUEST["bryan"];
$pablo = $_REQUEST["pablo"];
$cristian = $_REQUEST["cristian"];
require "connection.php";

// Realizar una consulta MySQL
// $query = "SELECT * FROM grades WHERE email like '".$email."' ; "; // ultimo valor de la tabla llamada datos
// $result = mysqli_query($conn, $query) or die("Failed: " . mysqli_error()); 

// if(mysqli_num_rows($result)>0) 
// {

// 	$response = array();
// 	$code = "reg_false";
// 	$message = "User Already Exist...";
// 	array_push($response, array("code"=>$code, "message"=>$message));
// 	echo json_encode(array("Server_response"=>$response)); 
// }
// else{

$query = "INSERT INTO 9a_itida VALUES('".$bryan."','".$pablo."','".$cristian."');";
$result = mysqli_query($conn, $query);

// if (!$result) {
// 	$response = array();
// 	$code = "reg_false";
// 	$message = "Some server error occurred. Try again...";
// 	array_push($response, array("code"=>$code, "message"=>$message));
// 	echo json_encode(array("Server_response"=>$response)); 
// }
// else{
// 	$response = array();
// 	$code = "reg_true";
// 	$message = "Registration Success.. Thank you...";
// 	array_push($response, array("code"=>$code, "message"=>$message));
// 	echo json_encode(array("Server_response"=>$response)); 
// }
mysqli_close($conn);



?>
