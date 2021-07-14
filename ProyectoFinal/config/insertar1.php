<?php 
   include_once("BDconnect1.php");

  if (isset($_POST['nombre'])){
      if ($_POST['nombre'] !== ""){

        
        $nombre = $_POST['nombre'];
        
        
        $conexion = new Database;
        $resultado = $conexion->validarNombre($nombre);
        $contador = $resultado->rowCount();

        if($contador > 0){
            $confirm = 3;
        }else { 
            $confirm = $conexion->insertar( $nombre);
        }

        }else{
          $confirm = 2;
        }
        
  } 
  header('Location: ../Profesores/creaciondos.php?confirm='.$confirm)
?>
