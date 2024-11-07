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
        <h2>Gestion de Clientes </h2>
        <p>Gestion y administracion de Clientes</p>
      </section>

      <section class="content-body">
        <div class="form-container">
          <form action="">
            <div class="form-group">
              <label form="nombre">Nombre</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el nombre del cliente" require>
            </div>
            <div class="form-group">
              <label form="txtDescripcion">Apellidos</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese los Apellidos del cliente" require>
               </div>
               <div class="form-group">
              <label form="txtDescripcion">DNI</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el numero de identidad del cliente" require>
               </div>
               <div class="form-group">
              <label form="txtDescripcion">Ncionalida</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese la nacionalidad del cliente" require>
               </div>
               <div class="form-group">
              <label form="txtDescripcion">fecha</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese la fecha ingreso del cliente" require>
               </div>
               <div class="form-group">
              <label form="txtDescripcion">numberiphone</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el numberiphone del cliente" require>
               </div>
               <div class="form-group">
              <label form="txtDescripcion">Email</label>
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el Email del cliente" require>
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
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Nacionalidad</th>
                <th>F.ingreso</th>
                <th>Num.cel.</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>DNI</td>
                <td>Nacionalidad</td>
                <td>F.ingreso</td>
                <td>Num.cel</td>
                <td>Email</td>
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