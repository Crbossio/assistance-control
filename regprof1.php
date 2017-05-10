<?php
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";


$db_table_name="userinfo";

   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
    die('No se ha podido conectar a la base de datos');
}

$subs_name = utf8_decode($_POST['nombre']);
$subs_cedula = utf8_decode($_POST['cedula']);
$subs_email = utf8_decode($_POST['email']);
$subs_contraseña = utf8_decode($_POST['contraseña']);

$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
    
    $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`id` , `name` , `email`,`password`) VALUES ("' . $subs_cedula . '", "' . $subs_name . '", "' . $subs_email . '",  "' . $subs_contraseña . '"  )';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
    
header('Location: successprof.php');
}

mysql_close($db_connection);
        
?>