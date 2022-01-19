<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Css/estilos.css">
</head>
<body>
    <h1>CASA DE CAMBIOS</h1>

    <form action="" name="frmCambio" method="post">

    <table>
        <tr>
            <td>Monto en soles</td>
            <td><input type="text" name="montoSoles" id=""></td>
        </tr>
        <tr>
            <td>Monto en Dolares</td>
            <td><input type="text" name="montoDolares" id=""></td>
        </tr>
        <tr>
            <td>Monto en Marcos</td>
            <td><input type="text" name="montomarcos" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Procesar"></td>
            <td><input type="reset" value="Limpiar"></td>
        </tr>

        <?php 
        error_reporting(0);
        $soles = $_POST['montoSoles'];
        $dolares = $_POST['montoDolares'];
        
        ?>
        <tr>
            <td>Total en Soles</td>
            <td><?php echo $soles; ?></td>
        </tr>
        <tr>
            <td>Total en Dolares</td>
            <td></td>
        </tr>
        <tr>
            <td>Total en Marcos</td>
            <td></td>
        </tr>
    </table>

    </form>
    
</body>
</html>