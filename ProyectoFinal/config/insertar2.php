<?php 
   include_once("BDconnect2.php");

  if (isset($_POST['Numero_de_identificacion'])  && isset($_POST['Nombres']) && isset($_POST['Apellidos']) && isset($_POST['Correo_electronico']) && isset($_POST['Contraseña'])&& isset($_POST['Confirma_tu_contraseña'])){
      if ($_POST['Numero_de_identificacion'] !== "" &&$_POST['Nombres'] !== "" && $_POST['Apellidos'] !== "" && $_POST['Correo_electronico'] !== "" && $_POST['Contraseña'] !== "" && $_POST['Confirma_tu_contraseña'] !== ""){

        
        $Numero_de_identificacion = $_POST['Numero_de_identificacion'];
        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $Correo_electronico = $_POST['Correo_electronico'];
        $Contraseña =  $_POST['Contraseña'];
        $Confirmar_contraseña =  $_POST['Confirma_tu_contraseña'];
        


        $conexion = new Database;
        $resultado = $conexion->validarNumero_de_identificacion($Numero_de_identificacion, $Correo_electronico); 
        $contador = $resultado->rowCount();

        if($contador > 0){
            $confirm = 3;
        }else { 
            $confirm = $conexion->insertar( $Numero_de_identificacion, $Nombres, $Apellidos, $Correo_electronico,  $Contraseña, $Confirma_tu_contraseña);
        }

        }else{
          $confirm = 2;
        }
        
  } else {
    $text = $_POST['Numero_de_identificacion'];
    $confirm = $text;
  }
  header('Location: ../index.php?confirm='.$confirm) 
?>