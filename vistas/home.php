<?php
    $db = new DB();
    $CNX = $db->connect();

    $comand = $CNX->prepare("SELECT id_cliente, nombre, apellidos, telefono, correo, fecha_registro, estatus FROM clientes ORDER BY id_cliente ASC");
    $comand->execute();
    $result = $comand->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="py-3">
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <main class="container contenedor">
        <div class="p-3 rounded">
            <section>
                <h1 class="center">Bienvenido <?php echo $user->getNombre();  ?></h1>
            </section>
            <div class="row">
                <div class="col-12">
                    <h4>Clientes
                        <a href="vistas/nuevo.php" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th style="display:none;">#</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Fecha de registro</th>
                                <th>Estatus</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td style="display:none;"><?php echo $row['id_cliente']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['apellidos']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['correo']; ?></td>
                                    <td><?php echo $row['fecha_registro']; ?></td>
                                    <td><?php echo $row['estatus']; ?></td>
                                    <td><a href="vistas/editar.php?id_cliente=<?php echo $row['id_cliente']; ?>" class="btn btn-warning">Editar</a></td>
                                    <td><a href="vistas/eliminar.php?id_cliente=<?php echo $row['id_cliente']; ?>" class="btn btn-danger">Eliminar</a></td>
                                    <td><a href="vistas/detalles.php?id_cliente=<?php echo $row['id_cliente']; ?>" class="btn btn-info">Detalles</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </main>
    
</body>
</html>