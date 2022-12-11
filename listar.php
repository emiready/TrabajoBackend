<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
</head>
<body>
    <table border="1">
<h1>NINNA DEPORTES </h1>
   
    <button type="submit"><a href="insert.html">Agregar</a></button>
    <button type="submit"><a href="index.html">Logout</a></button>
   
    <h2>ABM : Altas, bajas y modificaciones de catalogo de  Ninna Deportes.</h2>
    <p><b>Sr usuario de Ninna Deportes, recuerde que las modificaciones en los productos son permanentes.</b></p>
    <tr>
        <th>ID</th>
        <th>TIPO DE ROPA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"emilianomodas");

    $consulta= "SELECT*FROM ropa";

    $datos= mysqli_query ($conexion, $consulta);



    while ( $req =mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $req['id'];?></td>
        <td><?php echo $req['prenda'];?></td>
        <td><?php echo $req['marca'];?></td>
        <td><?php echo $req['talle'];?></td>
        <td><?php echo $req['precio'];?></td>
        <td><img src="data:imagen/jpg;base64, <?php echo base64_encode($req['imagen'])?>" alt="" width="100px" height="100px"></td>
        <td><a href="modificar.php?id=<?php echo $req['id'];?>">Modificar</a></td>
        <td><a href="delete.php?id=<?php echo $req['id'];?>">Borrar</a></td>
        </tr>
   <?php } ?>
    </table>
    </body>
</html>