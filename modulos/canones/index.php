<?php
    require_once("../../includes/funciones.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cañones</title>
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
                <h3>Cañones</h3>
                <div class="boton-nuevo">
                    <a href="#"><i class="fas fa-eye fa-lg" title="Añadir nuevo cañon"></i></a>
                </div>
                <div class="boton-cancelar">
                    <a href="#"><i class="fas fa-times fa-lg" title="Cancelar"></i></a>
                </div>
            </div>
            <div class="info">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Status</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $canones = $db->select("canones","*");
                        foreach ($canones as $canon => $row) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id_can']; ?></th>
                            <td><?php echo $row['nombre_can']; ?></td>
                            <td><?php echo $row['status_can']; ?></td>
                            <td><a href="#"><i class="fas fa-edit" title="Editar"></i></a> <a href="#"><i
                                        class="fas fa-trash-alt" title="Eliminar"></i></a></td>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
                <!-- FORMULARIO -->
                <div class="form">
                    <form action="" class="form-register">
                        <input type="text" placeholder="Nombre" />
                        <input type="text" placeholder="Status" />
                        <button>Registrar cañon <i class="fas fa-eye fa-sm"></i></button>
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