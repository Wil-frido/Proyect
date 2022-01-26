<?php
	include_once '../includes/db.php';
	$db = new DB();
    $CNX = $db->connect();

    $corect = false;

	if (isset($_POST['id_cliente'])) {
		$id_cliente = $_POST['id_cliente'];
		$nombre = $_POST['nombre'];
	    $apellidos = $_POST['apellidos'];
	    $telefono = $_POST['telefono'];
	    $correo = $_POST['correo'];
	    $fecha_registro = $_POST['fecha_registro'];

	    $query = $CNX->prepare("UPDATE clientes SET nombre=?, apellidos=?, telefono=?, correo=?, fecha_registro=? WHERE id_cliente=?");
	    $result = $query->execute(array($nombre, $apellidos, $telefono, $correo, $fecha_registro, $id_cliente));

	    if($result){
	    	$corect = true;
	    }

	} else {
	    $nombre = $_POST['nombre'];
	    $apellidos = $_POST['apellidos'];
	    $telefono = $_POST['telefono'];
	    $correo = $_POST['correo'];
	    $fecha_registro = $_POST['fecha_registro'];


	    $query = $CNX->prepare("INSERT INTO clientes (nombre, apellidos, telefono, correo, fecha_registro) VALUES (:nom, :apell, :tel, :emal, :fech)");
	    $result = $query->execute(array('nom' => $nombre, 'apell' => $apellidos, 'tel' => $telefono, 'emal' => $correo, 'fech' => $fecha_registro));

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