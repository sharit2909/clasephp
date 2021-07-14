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

    <title>Estudiantes</title>
</head>

<body class="style">
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi informacón</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./notas.php">Notas</a>
                <a class="dropdown-item active" href="./archivos.php">Archivos</a>
            </div>
        </div>
        <div class="dropdown ml-auto">
            <button class="btn btn-secondary dropdown type=" button id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">rayan ray</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item active" href="">Cerrar sesión</a>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center">
        <div class="p-4 my-5">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills"></ul>
                    <h4>Cragar ficheros rayan ray</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">Se elimino crrectamente el archivo</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <div class="my-4">
                                    <form>
                                        <div class="form-group">
                                            <label for="userId">Identificación</label>
                                            <input type="text" class="form-control" id="userId" aria-describedby="IdHelp">
                                            <small id="idlHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="user">Username</label>
                                            <input type="text" class="form-control" id="user" aria-describedby="userHelp">
                                            <small id="userlHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Materias</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>Matemáticas</option>
                                              <option>Ciencias</option>
                                              <option>Estadísticas</option>
                                              <option>Sociales</option>
                                            </select>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                              <label for="exampleFormControlFile1"></label>
                                              <input type="file" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
                                            </div>
                                        </form>
                                        <button type="submit" class="btn btn-primary">Cargar Fichero</button>
                                    </form>
                                </div>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="p-4">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills"></ul>
                    <h4>Descargas Disponibles</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Identificación</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Herramientas</th>
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