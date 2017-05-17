<?php
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";
$db_table_name="userinfo";

$conn = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB"); // 

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
}

$subs_name = utf8_decode($_POST['nombre']);
$subs_cedula = utf8_decode($_POST['cedula']);
$subs_email = utf8_decode($_POST['email']);
$subs_contraseña = utf8_decode($_POST['contraseña']);
$query="SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'";
$resultado=mysqli_query($conn,$query);

if (mysqli_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
    
    $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`id` , `name` , `email`,`password`) VALUES ("' . $subs_cedula . '", "' . $subs_name . '", "' . $subs_email . '",  "' . $subs_contraseña . '"  )';

mysqli_select_db($conn, $db_name);
$retry_value = mysqli_query($conn, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}
    
header('Location: successprof.html');
}

mysql_close($db_connection);
        
?>
