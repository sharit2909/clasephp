<?php
    include_once("../config/BDconnect2.php");
    $conexion = new Database;
    $resultado = $conexion->users();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--Estitulos de CSS-->
    <link rel="stylesheet" href="./style.css">
    <title>Gupo 4</title>
</head>

<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Administrador</title>
  </head>
  <body class="style">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estudiantes</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./estudiantes.php">Ver estudiates</a>
                <a class="dropdown-item active" href="./materia.php">Materias</a>
                <a class="dropdown-item" href="./archivos.php">Archivos</a>
            </div>
        </div>
        <div class="dropdown ml-auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">rayan ray</button>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item active" href="./roles.php">Roles</a>
                <a class="dropdown-item active" href="./listado.php">Usuario</a>
                <a class="dropdown-item active" href="">Cerrar sesión</a>
            </div>
        </div>
    </nav>
    <table class="table">
                        <?php 
                            foreach($resultado as $fila){
                                echo $resultado;
                                echo "<tr>
                                <td>".$fila['Numero_de_identificacion']."</td>
                                <td>".$fila['Nombres']."</td>
                                <td>".$fila['Apellidos']."</td>
                                <td>".$fila['Correo_electronico']."</td>
                                <td>".$fila['Contraseña']."</td>
                                <td>".$fila['Confirma_tu_contraseña']."</td>
                            </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-login-list"
                                data-toggle="list" href="#list-login" role="tab" aria-controls="login">Login</a>
                            <a class="list-group-item list-group-item-action" id="list-register-list" data-toggle="list"
                                href="#list-register" role="tab" aria-controls="register">Register</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-login" role="tabpanel"aria-labelledby="list-login-list">
                                <div class="my-4">
                                    <form>
                                        <div class="form-group">
                                            <label for="userId">Numero de identificacion</label>
                                            <input type="text" class="form-control" id="userId" aria-describedby="IdHelp">
                                            <small id="idlHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="user">Nombres</label>
                                            <input type="text" class="form-control" id="user" aria-describedby="userHelp">
                                            <small id="userlHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="user">Apellidos</label>
                                            <input type="text" class="form-control" id="user" aria-describedby="userHelp">
                                            <small id="userlHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Correo electronico</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo con alguien más</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="passwd">Contraseña</label>
                                            <input type="password" class="form-control" id="passwd" aria-describedby="passwdHelp">
                                            <small id="passwdHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="passwordConfirm">Confirma tu contraseña</label>
                                            <input type="password" class="form-control" id="passwordConfirm" aria-describedby="passwHelp">
                                            <small id="passwdConfirmHelp" class="form-text text-muted"></small>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                                        </form>
                                </div>
                            </div>
                            

                        <div class="tab-pane fade" id="list-register" role="tabpanel"
                            aria-labelledby="list-register-list">
                            <form>
                                <div class="alert alert-danger" role="alert">Por favor, inicie sesión para acceder a esta área<a href="#" class="alert-link"></a>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo con alguien más</small>
                                </div>
                                <div class="form-group">
                                    <label for="passwd">Contraseña</label>
                                    <input type="password" class="form-control" id="passwd" aria-describedby="passwdHelp">
                                    <small id="passwdHelp" class="form-text text-muted"></small>
                                    <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>