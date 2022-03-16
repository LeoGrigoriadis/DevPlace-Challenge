<?php
    $conexion=mysqli_connect('sql10.freesqldatabase.com','sql10479331','jhNBMDVrhu','sql10479331')
?>

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
    <h4>Datos de los empleados:</h4>
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
        </tr>
        <?php
        
        $sql="SELECT * from empleados WHERE municipalidad like '%pais' and salario>70000 and antiguedad>=10 and antiguedad<=15";
        $result=mysqli_query($conexion,$sql);   //Este es un filtro como lo pedía. El resto del proceso es igual al index.

        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['nombre']?></td>
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
    <a href="index.php">Volver</a>
</body>
</html>