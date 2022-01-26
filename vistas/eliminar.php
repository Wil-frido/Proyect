<?php 
	include_once '../includes/db.php';
    $db = new DB();
    $CNX = $db->connect();

    $id = $_GET['id_cliente'];

    $query = $CNX->prepare("DELETE FROM clientes WHERE id_cliente=?");
    if ($query->execute([$id])) {
    	echo "Eliminado";
    	header("Location: ../index.php");
    }else{
    	echo "Error al eliminar";
    }
?>