<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Dashboard del Sistema</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>App/assets/css/style.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
      <div class="logo">
        <h2>Mi Sistema</h2>
      </div>
      <ul class="menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="<?BASE_URL ?>App?v=categories">Gestion de categories</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Configuración</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
      <!-- Topbar -->
      <header class="topbar">
        <span class="menu-toggle" id="menuToggle">☰</span>
        <h1 class="title">Panel Principal</h1>
        <button class="logout-btn">Cerrar Sesión</button>
      </header>

      <!-- Views Section -->
      <section class="content">
        <h2>Contenido Principal</h2>
        <p>Bienbenido al sistema usuario <?=$_SESSION["sesion_login"]["info"] = $request;?> </>
        <p>Esta es la sección donde aparecerán las vistas del sistema.</p>
      </section>
    </div>
  </div>
  <script>
        let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/Login/functions_login.js"></script>
</body>
</html>