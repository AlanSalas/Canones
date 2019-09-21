<!-- Si la sesion existe mostrar la pagina, sino redireccionar a login-->
<!DOCTYPE html>
<html lang="mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Apartado de Cañones</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        include("includes/navbar.php");
    ?>

    <section class="wrapper">
    <?php
        include("includes/sidebar.php");
    ?>
        <div class="contenedor-principal">
            <div class="header">
                <h3>Home</h3>
            </div>
            <div class="info">
                <p>Sistema para administrar el apartado de cañones</p>
            </div>
        </div>
    </section>

    <footer>
        <p><i class="fas fa-user-lock"></i> Sistema desarrollado por La Logia Corp.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</body>

</html>