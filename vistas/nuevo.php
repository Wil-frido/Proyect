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
                    <h4>Nuevo cliente</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-4">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="text" id="correo" name="correo" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="fecha_registro" class="form-label">Fecha de registro</label>
                            <input type="date" id="fecha_registro" name="fecha_registro" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="../index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>

    	</div>
	</main>

</body>
</html>