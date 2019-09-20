<?php
    require_once("../../includes/funciones.php");
?>
<!DOCTYPE html>
<html lang="mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
        include("../shared/navbar.php");
    ?>

    <section class="wrapper">
        <?php
        include("../shared/sidebar.php");
    ?>
        <div class="contenedor-principal">
            <div class="header">
                <h3>Usuarios</h3>
                <div class="boton-nuevo">
                    <a href="#"><i class="fas fa-user-plus fa-lg" title="Añadir nuevo usuario"></i></a>
                </div>
                <div class="boton-cancelar">
                    <a href="#"><i class="fas fa-times fa-lg" title="Cancelar"></i></a>
                </div>
            </div>
            <div class="info">
                <!-- TABLA -->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Status</th>
                            <th scope="col">Password</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $usuarios = $db->select("usuarios","*");
                        foreach ($usuarios as $usuario => $row) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id_usr']; ?></th>
                            <td><?php echo $row['matricula_usr']; ?></td>
                            <td><?php echo $row['nombre_usr']; ?></td>
                            <td><?php echo $row['telefono_usr']; ?></td>
                            <td><?php echo $row['email_usr']; ?></td>
                            <td><?php echo $row['nivel_usr']; ?></td>
                            <td><?php echo $row['status_usr']; ?></td>
                            <td><?php echo $row['password_usr']; ?></td>
                            <td><a href="#"><i class="fas fa-edit" title="Editar"></i></a> <a href="#"><i
                                        class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
                <!-- FIN TABLA -->
                <!-- FORMULARIO -->
                <div class="form">
                    <form action="" class="form-register">
                        <input type="text" placeholder="Matricula" />
                        <input type="text" placeholder="Nombre" />
                        <input type="text" placeholder="Telefono" />
                        <input type="text" placeholder="Email" />
                        <input type="password" placeholder="Contraseña" />
                        <input type="hidden" value="1" name="status_usr" />
                        <button>Registrar usuario <i class="fas fa-user-plus fa-sm"></i></button>
                    </form>
                </div>
                <!-- FIN FORMULARIO -->
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
    <script src="main.js"></script>
</body>

</html>