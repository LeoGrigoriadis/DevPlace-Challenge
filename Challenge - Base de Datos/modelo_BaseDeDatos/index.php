<?php
    $conexion=mysqli_connect('sql10.freesqldatabase.com','sql10479331','jhNBMDVrhu','sql10479331')
?> <!--En este punto, inico sesion en la base de datos remota-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar empleado</title>
    <style>td{padding: 5px 10px; margin: 20px;}h4{margin: 20px}</style>
</head>
<body>
    <h4>Datos de los empleados:</h4> <!--Acá creo la tabla donde se va a ver mi lista-->
    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Telefono</td>
            <td>Email</td> 
            <td>Salario</td>
            <td>Antiguedad</td>
            <td>Puesto</td>
            <td>Municipalidad</td>
        </tr>                        <!--Decidí usar php porque me era más sencillo-->
        <?php
        $sql="SELECT * from empleados";           //En este punto, llamo a los datos de la base de datos 
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){    //creo un ciclo repetitivo para recorrerlos a todos
        ?>
        <tr>
            <td><?php echo $mostrar['nombre']?></td>    <!--y los imprimo en una tabla-->
            <td><?php echo $mostrar['apellido']?></td>
            <td><?php echo $mostrar['telefono']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['salario']?></td>
            <td><?php echo $mostrar['antiguedad']?></td>
            <td><?php echo $mostrar['puesto']?></td>
            <td><?php echo $mostrar['municipalidad']?></td>
        </tr>
        <?php
        }
    ?>
    </table>
    <a href="filtro.php">filtrar por municipales del país, con salario mayor a $70000 y antiguedad entre 10 y 15 años</a>
</body>
</html>