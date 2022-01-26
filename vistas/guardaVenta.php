<?php
	include_once '../includes/db.php';
	$db = new DB();
    $CNX = $db->connect();

    $corect = false;

	if (isset($_POST['id_cliente'])) {

	} else {
	    $id_clien = $_POST['id_cliente'];
	    $concepto = $_POST['concepto'];
	    $descripcion = $_POST['descripcion'];
	    $monto = $_POST['monto'];
	    $fecha_registro = $_POST['fecha_registro'];


	    $query = $CNX->prepare("INSERT INTO ventas (id_cliente, concepto, descripcion, monto, fecha_registro) VALUES (:id, :concp, :descr, :mont, :fech)");
	    $result = $query->execute(array('id' => $id_clien, 'concp' => $concepto, 'descr' => $descripcion, 'mont' => $monto, 'fech' => $fecha_registro));

	    if ($result) {
	        $corect = true;
	    }
	}
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
                <div class="col">
                    <?php if ($corect) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="../index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>