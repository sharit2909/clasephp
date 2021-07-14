<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>Administrador</title>
</head>

<body class="style">
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ESTUDIANTES</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./estudiantes.php">Ver estudiates</a>
                <a class="dropdown-item active" href="./materia.php">Materias</a>
                <a class="dropdown-item" href="./archivos.php">Archivos</a>
            </div>
        </div>
        <div class="dropdown ml-auto">
            <button class="btn btn-secondary dropdown type=" button id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">rayan ray</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item active" href="./roles.php">Roles</a>
                <a class="dropdown-item active" href="./listado.php">Usuario</a>
                <a class="dropdown-item active" href="">Cerrar sesión</a>
            </div>
        </div>
    </nav>
    <div class="justify-content-center">
        <div class="p-3 my-4">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills"></ul>
                    <h4>Modificar Usuario</h4>
                    <ul class="nav nav-pills card-header-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Regresar</a>
                        </li>
                    </ul >
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <div class="my-4"></div>
                                    <form>
                                        <div class="form-group">
                                            <label for="userId">Identificación</label>
                                            <input required placeholder="1010234066" class="form-control" id="userId" aria-describedby="IdHelp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="user">Nombres</label>
                                            <input required placeholder="Michael Orlando" class="form-control" id="user" aria-describedby="userHelp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="user">Apellidos</label>
                                            <input required placeholder="Cocouy Garzon" class="form-control" id="user" aria-describedby="userHelp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="user">Username</label>
                                            <input required placeholder="test@gmail.com" class="form-control" id="user" aria-describedby="userHelp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input required type="password" class="form-control" id="password" aria-describedby="passwordHelp">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Rol</label>
                                            <input required placeholder="Administrador" class="form-control" id="password" aria-describedby="passwordHelp">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </form>
                                </div>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

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