<?php

$email = $_REQUEST["email"];
$pass = $_REQUEST["password"];
require "connection.php";

// Realizar una consulta MySQL
$query = "SELECT * FROM userinfo WHERE email LIKE '$email' AND password LIKE '$pass'"; 
$result = mysqli_query($conn, $query) or die("Failed: " . mysqli_error()); 
if(mysqli_num_rows($result)>0)
{
 $response = array();
 $code = "login_true";
 $row = mysqli_fetch_array($result);
 //first param of the row is name, thats why name is retrieved here
 $name = $row[1];
 $message = "Login success and Welcome ".$name;
    array_push($response,array("code"=>$code,"message"=>$message));
    echo json_encode(array("server_response"=>$response));
    header('Location: nuevoindex.php');

}
else
{
 $response = array();
 $code = "login_false";
 $message = "Login failed";
 //echo "<script>alert('Login failed.. try again');location.href ='javascript:history.back()';</script>";
    array_push($response,array("code"=>$code,"message"=>$message));
  echo json_encode(array("server_response"=>$response));
  header('Location: index.php');

}
if(mysqli_num_rows($result)>0)
{
 $response = array();
 $code = "login_true";
 $row = mysqli_fetch_array($result);
 //first param of the row is name, thats why name is retrieved here
 $name = $row[1];
 $message = "Login success and Welcome ".$name;
    array_push($response,array("code"=>$code,"message"=>$message));
    echo json_encode(array("server_response"=>$response));
    header('Location: nuevoindex.php');

}
else
{
 
 echo "<script>alert('Login failed.. try again');location.href ='javascript:history.back()';</script>";
    array_push($response,array("code"=>$code,"message"=>$message));
  

}

 mysqli_close($conn);


?>
