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
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#"><i class="fas fa-users"></i> Usuarios</a></li>
            </ul>
        </aside>
        <div class="contenedor-principal">
            <div class="header">
                <h3>Home</h3>
                <div class="boton-nuevo">
                    <a href="#"><i class="fas fa-user-plus" title="Añadir nuevo usuario"></i></a>
                </div>
            </div>
            <div class="info">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Alan</td>
                            <td>Salas</td>
                            <td><a href="#"><i class="fas fa-edit" title="Editar"></i></a> <a href="#"><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Armando</td>
                            <td>Robles</td>
                            <td><a href="#"><i class="fas fa-edit" title="Editar"></i></a> <a href="#"><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Luis</td>
                            <td>Vazquez</td>
                            <td><a href="#"><i class="fas fa-edit" title="Editar"></i></a> <a href="#"><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Ruben</td>
                            <td>Tellez</td>
                            <td><a href="#"><i class="fas fa-edit" title="Editar"></i></a> <a href="#"><i class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                    </tbody>
                </table>
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