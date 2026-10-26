<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido Procesado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $pedido = $_POST["pedido"];

    echo "<h2>Pedido recibido, caserito</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Pedido: $pedido</p>";
    ?>

    <br>

    <button class="boton-volver" onclick="window.location.href='index.html'">Volver al inicio</button>

</body>
</html>