<?php
	include_once '../includes/db.php';
    $db = new DB();
    $CNX = $db->connect();

    $id = $_GET['id_cliente'];

    $query = $CNX->prepare("SELECT id_venta, id_cliente, concepto, descripcion, monto, fecha_registro, estatus FROM ventas WHERE id_cliente = :id");
    $query->execute(['id' => $id]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="py-3">

    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>Ventas
                    	<a href="nuevaVenta.php?id_cliente=<?php echo $id ?>" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Concepto</th>
                                <th>Descripción</th>
                                <th>Monto</th>
                                <th>Fecha registro</th>
                                <th>Estatus</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id_venta']; ?></td>
                                    <td><?php echo $row['id_cliente']; ?></td>
                                    <td><?php echo $row['concepto']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td><?php echo $row['monto']; ?></td>
                                    <td><?php echo $row['fecha_registro']; ?></td>
                                    <td><?php echo $row['estatus']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <a class="btn btn-secondary" href="../index.php">Regresar</a>
                    </div>
                </div>
            </div>


        </div>
    </main>

</body>
</html>