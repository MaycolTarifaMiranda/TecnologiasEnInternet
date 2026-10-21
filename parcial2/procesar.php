<?php
$nombre  = $_POST["nombre"];
$correo  = $_POST["correo"];
$mascota = $_POST["mascota"];

$servicios = [
    "Consulta general - Bs 60",
    "Vacuna antirrabica - Bs 40",
    "Bano y corte - Bs 50"
];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Turno reservado - Veterinaria Patitas</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <header>
        <p class="marca">VETERINARIA PATITAS</p>
        <nav>
            <ul>
                <li><a href="index.html">Volver al inicio</a></li>
                <li><button id="botonOscuro" type="button">Modo oscuro</button></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="tarjeta">
            <h2>Turno reservado en Veterinaria Patitas</h2>

            <?php
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Correo:</strong> $correo</p>";
            echo "<p><strong>Mascota:</strong> $mascota</p>";
            ?>

            <h3>Servicios de la veterinaria</h3>
            <ul class="lista-servicios">
                <?php
                foreach ($servicios as $servicio) {
                    echo "<li>$servicio</li>";
                }
                ?>
            </ul>

            <p class="firma">Te atiende Maycol Tarifa Miranda.</p>

            <button class="boton-volver" onclick="window.location.href='index.html'">
                Volver al inicio
            </button>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>