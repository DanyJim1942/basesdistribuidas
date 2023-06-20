<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta A Santa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<?php

    include("db.php");

    $selectNinos="select * from carta";
    $result=mysqli_query($conexion, $selectNinos);

?>

    <!-- Style -->

    <style>

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 8px;
    text-align: left;
}



    </style>

    <!-- Navbar -->

    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="./index.php" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="./ninos.php" class="nav-link">Cartas</a></li>
            </ul>
        </header>
    </div>

    <!-- Header -->

    <div id="inicio" class="my-5">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-body-emphasis">Revisar toda la información disponible</h1>
                <p class="col-lg-8 mx-auto lead">
                    Aqui podras revisar toda la información disponible en la base de datos.
                </p>
            </div>
        </div>
    </div>

    <!-- Introducción -->
    
    <!--

    <section id="registro">

        <div class="container">
            
            <h3>Registro</h3>

            <form method="POST" action="guardarRegistro.php">
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre(s):</span>
                    <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-z]{3,}" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Apellido Paterno:</span>
                    <input type="text" class="form-control" id="appaterno" name="appaterno" pattern="[A-Za-z]{3,}" required>
                    <span class="input-group-text">Apellido Materno:</span>
                    <input type="text" class="form-control" id="apmaterno" name="apmaterno" pattern="[A-Za-z]{3,}" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña:</span>
                    <input type="password" class="form-control"  id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <span class="input-group-text">Tipo:</span>
                    <select class="form-select" name="tipo" id="tipo" required>
                        <option value="tutor">Tutor</option>
                        <option value="proveedor">Proveedor</option>
                    </select>
                </div>
                <input class="btn btn-danger" type="submit" value="Registrarse">
            </form>
        </div>

    </section>  -->

    <br>

    <div class="container">

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>Regalo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <th><?php echo $filas['id']?></th>
                <th><?php echo $filas['nombre']?></th>
                <th><?php echo $filas['edad']?></th>
                <th><?php echo $filas['ciudad']?></th>
                <th><?php echo $filas['estado']?></th>
                <th><?php echo $filas['regalo']?></th>
                <th>
                <?php echo "<a class='btn btn-danger' href='eliminar.php?id=".$filas['id']."'>Eliminar</a>"; ?>    
                </th>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

    </div>
    
    <div class="container" id="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Carta a Santa Claus - UAA</span>
            </div>
        </footer>
    </div>


    <?php
    mysqli_close($conexion);
    ?>

</body>
</html>