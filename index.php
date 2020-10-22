<?php 
require_once('conexion.php');
$sql = "select * from productos";
$result = $conn->query($sql);
$registros = array();
while($fila = $result->fetch_array()){
    $registros[] = $fila;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de produtos</h1>
    <a href="editar.php">Nuevo</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th></th>
            <th></th>
        </tr>
        <?php 
        $conta = 0;
        ?>
        <?php foreach ($registros as $item): ?>
        <tr>
            <td><?= ++$conta ?></td>
            <td><?= $item["nombre"] ?></td>
            <td><?= $item["precio"] ?></td>
            <td><?= $item["stock"] ?></td>
            <td><a href="editar.php?id=<?= $item['id']?>">Editar</a></td>
            <td><a href="eliminar.php?id=<?= $item["id"]?>" onclick="return(confirm('Eliminamos ??'))">Eliminar</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>