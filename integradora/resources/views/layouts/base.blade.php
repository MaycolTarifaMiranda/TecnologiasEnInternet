<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jugueteria El Trompo</title>
  <style>
    * { box-sizing: border-box; }
    body { background-color: #e9ecef; color: #343a40; font-family: "Segoe UI", Arial, sans-serif; line-height: 1.5; margin: 0; }
    header { background-color: #2c3e50; color: #ffffff; padding: 20px; border-bottom: 4px solid #27ae60; }
    /* Aquí cambiamos el H1 */
    h1.marca { font-size: 24px; font-weight: bold; margin: 0 0 10px 0; color: #2ecc71; letter-spacing: 1px; }
    nav ul { list-style: none; padding: 0; margin: 0; display: flex; gap: 20px; flex-wrap: wrap; align-items: center; }
    nav a { color: #ced4da; text-decoration: none; font-weight: bold; transition: color 0.3s; }
    nav a:hover { color: #2ecc71; }
    main { padding: 0 15px; }
    .tarjeta { background-color: #ffffff; padding: 25px; border-radius: 8px; margin: 20px auto; width: 100%; max-width: 800px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); border-top: 3px solid #27ae60; }
    .tarjeta h2 { color: #2c3e50; margin-top: 0; margin-bottom: 20px; font-size: 1.4em; }
    .lista-repuestos { padding-left: 20px; }
    .lista-repuestos li { margin-bottom: 10px; }
    footer { text-align: center; padding: 20px; color: #6c757d; font-size: 0.9em; }
    button, .btn { background-color: #27ae60; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; font-size: 16px; text-decoration: none; display: inline-block; }
    button:hover, .btn:hover { background-color: #219150; }
    .campo { display: flex; flex-direction: column; gap: 5px; margin-bottom: 15px; }
    .campo input { padding: 10px; border: 1px solid #ced4da; border-radius: 5px; }
    .error-box { background-color: #ffe3e3; color: #c92a2a; padding: 10px; border-radius: 5px; margin-bottom: 15px; border-left: 5px solid #e03131; }
  </style>
</head>
<body>
  <header>
    <!-- H1 EXACTO DEL EXAMEN -->
    <h1 class="marca">Jugueteria El Trompo</h1>
    <nav>
      <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/juguetes">Juguetes</a></li>
        <li><a href="/contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('contenido')
  </main>

  <!-- FOOTER EXACTO DEL EXAMEN (Cambia [TU NOMBRE COMPLETO]) -->
  <footer>
    <p>Integradora - [TU NOMBRE COMPLETO] - 27 de octubre de 2026</p>
  </footer>
</body>
</html>