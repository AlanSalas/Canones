<!-- Si la sesion existe redireccionar a login-->
<!DOCTYPE html>
<html lang="mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo_login.css">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="Nombre"/>
                <input type="password" placeholder="Contraseña"/>
                <input type="text" placeholder="Email"/>
                <button>Registrarse</button>
                <p class="message"><a href="#">Login</a> <i class="fas fa-sign-in-alt fa-lg"></i></p>
            </form>
            <form class="login-form" id="login-form">
                <input type="text" placeholder="Email" name="usuario" id="inputEmail"/>
                <input type="password" placeholder="Contraseña" name="password" id="inputPassword"/>
                <button type="button" id="btn-login">Login</button>
                <input type="checkbox" name="recordar">
                <p class="message"><a href="#">Registrarse</a> <i class="fas fa-user-plus fa-lg"></i></p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/funcion_login.js"></script>
</body>

</html>