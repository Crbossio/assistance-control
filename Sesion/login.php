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
    header('Location: nuevindex.php');

}
else
{
 <script src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript">
  alert("Por favor, ingrese usuario o contraseña validos");
 </script>
 $response = array();
 $code = "login_false";
 $message = "Login failed";
    array_push($response,array("code"=>$code,"message"=>$message));
  echo json_encode(array("server_response"=>$response));
// <script src="js/jquery-3.1.0.min.js"></script>

 
  //header('Location: index.php');

}

 mysqli_close($conn);


?>
