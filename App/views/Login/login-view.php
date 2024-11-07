<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>App/assets/css/login.css">
</head>

<body>
    <div class="login-container">
        <h1 class="login-title">Inicio de Sesión</h1>
        <form id="form_login" class="login-form">
            <div class="form-group">
                <label for="txtUser" class="form-label">Usuario</label>
                <input type="text" name="txtUser" id="txtUser" class="form-input">
            </div>
            <div class="form-group">
                <label for="txtPassword" class="form-label">Contraseña</label>
                <input type="password" name="txtPassword" id="txtPassword" class="form-input">
            </div>
            <div class="form-group">
                <button type="submit" class="form-button">Iniciar Sesión</button>
            </div>
        </form>
    </div>

    <script>
        let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/Login/functions_login.js"></script>
</body>

</html>