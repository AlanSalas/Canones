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
                <p class="message"><a href="#">Login</a></p>
            </form>
            <form class="login-form">
                <input type="text" placeholder="Email"/>
                <input type="password" placeholder="Contraseña"/>
                <button>Login</button>
                <p class="message"><a href="#">Registrarse</a></p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    </script>

    <script>
        $('.message a').click(function () {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>
</body>

</html>