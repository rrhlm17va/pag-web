<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login - PQSA</title>
</head>
<body class="login-body">
    <div class="login-container">
        <form class="login-form" action="validar.php" method="post">
            <div class="titulo">
                <h1>Login</h1>
            </div>
            <div class="input-group">
                <input type="text" id="Usuario" name="user" placeholder="Usuario" class="form-control" required>
            </div>
            <div class="input-group">
                <input type="password" id="Contraseña" name="password" placeholder="Contraseña" class="form-control" required>
            </div>
            <div class="button-container">
                <button type="submit"  value="ingresar" class="btn-login" >Iniciar Sesión</button>
            </div>
            <div class="registro-link">
                <p>¿No tienes una cuenta? Regístrate aquí 👉 <a href="registro.php">Regístrate</a></p>
            </div>
        </form> 
    </div>
</body>
</html>
