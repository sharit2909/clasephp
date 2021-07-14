<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

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
    <div class="d-flex justify-content-center">
        <div class="p-4 my-5">
            <div class="card">
                <div class="card-header d-flex">
                    <h4>Listado de roles</h4>
                    <ul class="nav nav-pills card-header-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="./creacion.html">Crear roles</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">No se puede realizar la acción, comunicate con el
                        administrador</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Herramientas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-lg">Modificar</button>
                                    <button type="button" class="btn btn-danger btn-lg">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Proesor</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-lg">Modificar</button>
                                    <button type="button" class="btn btn-danger btn-lg">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Estudiante</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-lg">Modificar</button>
                                    <button type="button" class="btn btn-danger btn-lg">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Prueba 1 </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-lg">Modificar</button>
                                    <button type="button" class="btn btn-danger btn-lg">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Prueba 2 </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-lg">Modificar</button>
                                    <button type="button" class="btn btn-danger btn-lg">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
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
