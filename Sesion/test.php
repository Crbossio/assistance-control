  <?php
    
require "connection.php";
//consulta para que muestre las instituciones asociadas a un usuario


$query1 = "SELECT institution FROM institutions WHERE id = 1"; 
$resultado1 = mysqli_query($conn, $query1) or die("Consulta fallida: " . mysqli_error()); 
$row_institutions = mysqli_fetch_array($resultado1);

//consulta para que muestre los cursos asociados a una institucion y un usuario

$query2 = "SELECT grades FROM grades_$row_institutions[institution] WHERE id = 1"; 
$resultado2 = mysqli_query($conn, $query2) or die("Consulta fallida: " . mysqli_error()); 
$row_grades = mysqli_fetch_array($resultado2);

//consulta para la lista de alumnos de un curso 
$query3 = "SHOW COLUMNS FROM $row_grades[grades]_itida"; 
$resultado3 = mysqli_query($conn, $query3) or die("Consulta fallida: " . mysqli_error());

 while( $zeile = mysqli_fetch_array($resultado3, MYSQLI_NUM ) ) {
 $json[] = $zeile;
 }

// $query3 = "SELECT latitud, longitud FROM historial  ORDER BY numero DESC LIMIT 400";; 
// $resultado3 = mysqli_query($conn, $query) or die("Consulta fallida: " . mysqli_error());
//   while( $zeile = mysqli_fetch_array($resultado2, MYSQLI_NUM ) ) {
// $json[] = $zeile;
// }
                                                                
?>
<body>
	<script type="text/javascript">
		var data = <?php echo json_encode( $json ); ?>;
		console.log(data)
	</script>
</body>

     
  
  
