<?php
// Conectando, seleccionando la base de datos
$conn = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB"); // conecta al servidor con user, contraseña
 
if(!$conn)
{
  //die("Error in database connection" . mysqli_error());
}
else
{
//echo "<h3>Database connection succes...";
}
?>
