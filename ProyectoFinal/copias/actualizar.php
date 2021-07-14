<?php
 
 include_once('../config/BDconnect2.php');

 if (isset($_POST['nombre'])  && isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $conexion = new Database;
    $confirm = $conexion->updateMateria($id, $nombre);
 }

    header('Location: ../Profesores/creacion.php?confirm='.$confirm);
?>