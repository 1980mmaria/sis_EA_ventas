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
        <li><a href="#">Categories</a></li>
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
        <h2>Gestion de categorias </h2>
        <p>Gestion y administracion de categorias</p>
      </section>

      <section class="content-body">
        <div class="form-container">
          <form action="">
            <div class="form-group">
              <label form="nombre">Nombre</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el nombre de la categoria" require>
            </div>
            <div class="form-group">
              <label form="txtDescripcion">Descripcion</label>
              <textarea name="txtDescripcion" id="txtDescripcion"></textarea>
            </div>
            <div class="form-actions">
              <button type="reset" class="btn btn-secondary">Limpiar</button>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </form>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>categoria 1</td>
                <td>Descripcion de la categoria 1</td>
                <td></td>


              </tr>
            </tbody>
          </table>
        </div>
      </section>

    </div>
    <script>
      let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/Login/functions_login.js"></script>
</body>

</html>