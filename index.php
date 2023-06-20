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

    if(isset($_POST['enviar'])){

        $nombre=$_POST['nombrecarta'];
        $edad=$_POST['edad'];
        $ciudad=$_POST['ciudad'];
        $estado=$_POST['estado'];
        $regalo=$_POST['regalo'];

        $sql="insert into carta(nombre,edad,ciudad,estado,regalo) values ('".$nombre."', '".$edad."', '".$ciudad."', '".$estado."', '".$regalo."')";

        $result=mysqli_query($conexion, $sql);

        if($result){
            echo "success";
        }else{
            echo "error";
        }

        mysqli_close($conexion);

    }else{

    }

?>

    <!-- Style -->

    <style>


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
                <h1 class="text-body-emphasis">¡Escribe una carta a Santa Claus!</h1>
                <p class="col-lg-8 mx-auto lead">
                    La Navidad está a la vuelta de la esquina y sabemos que tienes mucho que contarle a <code>Santa</code>. 
                    Por eso, hemos creado una plataforma fácil y sencilla para que puedas enviar tu carta a Santa desde la comodidad de tu hogar.
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

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

    
    <h3>Querido Santa Claus,</h3>
<p>
¡Hola! Espero que estés muy bien y que estés disfrutando de esta época mágica del año. Mi nombre es <input type="text" name="nombrecarta" id="nombrecarta" placeholder="Nombre"> y tengo <input type="number" name="edad" min="5" max="18" placeholder="Edad"> años. Vivo en <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad"> del estado de <select name="estado">
    <option value="AGU">Aguascalientes</option>
    <option value="BCN">Baja California</option>
    <option value="BCS">Baja California Sur</option>
    <option value="CAM">Campeche</option>
    <option value="CHP">Chiapas</option>
    <option value="CHH">Chihuahua</option>
    <option value="CMX">Ciudad de México</option>
    <option value="COA">Coahuila</option>
    <option value="COL">Colima</option>
    <option value="DUR">Durango</option>
    <option value="GUA">Guanajuato</option>
    <option value="GRO">Guerrero</option>
    <option value="HID">Hidalgo</option>
    <option value="JAL">Jalisco</option>
    <option value="MEX">México</option>
    <option value="MIC">Michoacán</option>
    <option value="MOR">Morelos</option>
    <option value="NAY">Nayarit</option>
    <option value="NLE">Nuevo León</option>
    <option value="OAX">Oaxaca</option>
    <option value="PUE">Puebla</option>
    <option value="QUE">Querétaro</option>
    <option value="ROO">Quintana Roo</option>
    <option value="SLP">San Luis Potosí</option>
    <option value="SIN">Sinaloa</option>
    <option value="SON">Sonora</option>
    <option value="TAB">Tabasco</option>
    <option value="TAM">Tamaulipas</option>
    <option value="TLX">Tlaxcala</option>
    <option value="VRZ">Veracruz</option>
    <option value="YUC">Yucatán</option>
    <option value="ZAC">Zacatecas</option>
</select>. <br><br>Me he portado muy bien durante todo el año y he intentado ser amable con mis amigos y mi familia.

Este año, he sido un niño muy estudioso en la escuela. Me esforcé mucho para sacar buenas notas y aprendí muchas cosas nuevas. Me encanta aprender y descubrir cosas nuevas,

También tengo una pasión por los juegos al aire libre. Me gusta correr, saltar y jugar con mis amigos en el parque. <br><br>

Además, me encanta la música. Estoy aprendiendo a tocar el piano y me gustaría tener mi propio teclado en casa. Si puedes hacerlo realidad, prometo practicar mucho y tocar canciones bonitas para mi familia.

<br><br>

Santa Claus, sé que eres muy ocupado en esta época del año, pero me encantaría poder conocerte. Siempre he tenido muchas preguntas sobre cómo viajas por todo el mundo en una noche y cómo haces para llevar tantos regalos. Sería un sueño hecho realidad poder pasar un momento contigo y aprender más sobre la magia de la Navidad.

Te prometo que seguiré siendo un niño bueno y haré todo lo posible para hacer felices a los demás. <br><br>Gracias por leer mi carta, Santa Claus. ¡Espero que tengas un viaje seguro y una Navidad muy feliz!

<br><br>Con mucho cariño.
    
    <li>Mi  regalo sería:</li>
    <br>
    <div class="input-group mb-3">
        <span class="input-group-text">Regalo:</span>
        <input type="text" class="form-control" id="regalo" name="regalo" maxlength="50" required>
    </div>

    </p>

    <input type="submit" name="enviar" class="btn btn-primary" value="Enviar Carta">


    </form>

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