<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html>



<?php
   

//conexion base de datos
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";

$subs_curso = utf8_decode($_POST['curso']);


$conn = mysqli_connect($db_host, $db_user, $db_password,$db_name)
; 

if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
//consulta para que muestre las instituciones asociadas a un usuario

$query = "CREATE TABLE ".$subs_curso."_itida(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fecha DATE  NOT NULL
   
)";
  
// Attempt create table query execution


if(mysqli_query($conn, $query)){
  echo "Table created successfully.";
} else{
  echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}

// Close connection
//mysqli_close($conn);

   

?>


<head>
<title> CBP Assistance Control</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" CBP Assistance Control Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
	<div class="banner_body">
		<div class="container">
			<div class="w3ls_logo_nav">
				<div class="w3ls_logo_nav_right">
					<div class="sap_tabs">
						<div class="w3ls_logo_nav_left">
							<h1><a href="index.html" > <font size="6"> CBP Assistance Control </font> </a> </h1>
						</div>
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<div class="resp-tabs-container">
								
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-1" id="tab_item-1">Inicio</li>
								</ul>

								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
				<!-- home -->					
								
								<head>

								<link href="estilos.css" rel="stylesheet" type="text/css">
								<div class="group">
								  <form action="regest2.php" method="POST">

								
								  <h2 ><em>Formulario de Registro</em></h2>  
								  <h2 ><em>(Estudiante)</em></h2> 
								 
								  	 
								      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
								      <input type="text" name="nombre" class="form-input" required/>   
								     

							
								      <label  for="email">Email <span><em>(requerido)</em></span></label>
								      <input type="email" name="email" class="form-input" />								  


								     <center> <input class="form-btn" name="submit" type="submit" value="Inscribir" /></center>
								    </p>
								  </form>
								</div>



















				<!-- //home -->
								</div>










			<!-- //contact -->
							</div>
						</div>
						
					</div>



					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});			
						</script>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_copyright">
				<p>© 2017  CBP Assistance Control. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>