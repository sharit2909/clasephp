<?php 
   include_once("BDconnect.php");

  if (isset($_POST['identificacion'])  && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['telefono'])){
      if ($_POST['identificacion'] !== "" &&$_POST['nombres'] !== "" && $_POST['apellidos'] !== "" && $_POST['email'] !== "" && $_POST['telefono'] !== ""){

        
        $identificacion = $_POST['identificacion'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $telefono =  $_POST['telefono'];
        


        $conexion = new Database;
        $resultado = $conexion->validarIdentificacion($identificacion);
        $contador = $resultado->rowCount();

        if($contador > 0){
            $confirm = 3;
        }else { 
            $confirm = $conexion->insertar( $identificacion, $nombres, $apellidos, $email,  $telefono);
        }

        }else{
          $confirm = 2;
        }
        
  } 
  header('Location: ../Profesores/creacion.php?confirm='.$confirm)
?>
