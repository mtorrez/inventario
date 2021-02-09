<?php 
// Parametros para la conexion a la base de datos
$host = 'localhost';
$user = 'usrweb';
$pass = '123456';
$bdat = 'bd_inventarios';

// mysql --> php4 --> procedural
// mysqli --> php5 --> procedural / objeto  (OK)
// PDO, ADODB
$conn = new mysqli($host,$user,$pass,$bdat);
if ($conn->connect_errno > 0){
    // Solo se muestra cuando hay error
    die('Error de conexion [' . $conn->connect_error. ']');
}
?>
