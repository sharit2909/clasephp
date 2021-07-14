<?php
   class Database {
      public $db;
      private static $dns = "mysql:host=localhost;dbname=colegioispa";
      private static $user = "root";
      private static $pass = "";
      private static $instance;
      
      public function __construct(){
         $this->db = new PDO(self::$dns, self::$user, self::$pass);
     }

     public static function getInstance(){
      if(!isset(self::$instance)){
          $object = __class__;
          self::$instance = new $object;
      }
      return self::$instance;
     }



  public function insertar( $Numero_de_identificacion, $Nombres, $Apellidos, $Correo_electronico, $Contraseña, $Confirma_tu_contraseña){

   try {
       $conexion = Database::getInstance();
       $query = $conexion->db->prepare("INSERT INTO  users ( identificacion, nombres, apellidos, username, password) VALUES (  :identificacion, :nombres, :apellidos, :username, :password)");
       $query->execute(
           array(
               
               ':identificacion' => $Numero_de_identificacion, 
               ':nombres' => $Nombres,
               ':apellidos' => $Apellidos, 
               ':username' => $Correo_electronico,
               ':password' => $Contraseña,
            )
           );
       return 1;

   } catch(PDOexception $error){
       return 0;
   }
 }   

    public function validarNumero_de_identificacion($Numero_de_identificacion, $Correo_electronico){
        $conexion = Database::getInstance();
        $query = $conexion->db->prepare("SELECT id FROM users WHERE identificacion=:identificacion OR username=:username");
        $query->execute(
            array(
                ":identificacion" => $Numero_de_identificacion, 
                ":username" => $Correo_electronico
                
            )
            );
        return ($query);
    }



    /*public function users(){
        $conexion = Database::getInstance();
        $result = $conexion->db->prepare("SELECT Numero_de_identificacion, Nombres, Apellidos, Correo_electronico, Contraseña, Confirma_tu_contraseña  FROM Numero_de_identificacion, Nombres, Apellidos, Correo_electronico, Contraseña, Confirma_tu_contraseña");
        $result->execute();
        return $result;
    }*/
   


}
?>