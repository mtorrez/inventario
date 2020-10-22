<?php 
$host = 'localhost';
$user = 'usrweb';
$pass = '123456';
$bdat = 'bd_inventarios';

// mysql --> php4 --> procedural
// mysqli --> php5 --> procedural / objeto  (OK)
// PDO, ADODB
$conn = new mysqli($host,$user,$pass,$bdat);
if ($conn->connect_errno > 0){
    die('Error de conexion [' . $conn->connect_error. ']');
}
?>