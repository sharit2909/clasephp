<?php
   class Database{
      public $db;
      private static $dns = "mysql:host=localhost;dbname=colegio";
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



  public function insertar( $identificacion, $nombres, $apellidos, $email, $telefono){

   try {
       $conexion = database::getInstance();
       $query = $conexion->db->prepare("INSERT INTO  estudiantes ( identificacion, nombres, apellidos, email, telefono) VALUES ( :identificacion, :nombres, :apellidos, :email, :telefono)");
       $query->execute(
           array(
               
               ':identificacion' =>$identificacion,
               ':nombres' => $nombres,
               ':apellidos' => $apellidos,
               ':email' => $email,
               ':telefono' => $telefono
               
           )
           );
       return 1;

   } catch(PDOexception $error){
       return 0;
   }

}

public function validarIdentificacion($identificacion){
    $conexion = Database:: getInstance();
    $query = $conexion->db->prepare("SELECT * FROM estudiantes  WHERE identificacion=:identificacion");
    $query->execute(
        array(
            ":identificacion" => $identificacion
        )
        );
    return ($query);
}

public function estudiantes(){
    $conexion = Database::getInstance();
    $result = $conexion->db->prepare("SELECT identificacion, nombres, apellidos, email, telefono  FROM identificacion, nombres, apellidos, email, telefono");
    $result->execute();
    return $result;
}

    }
?>