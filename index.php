<?php
include_once("\wamp64\www\ProyectoFarmacia\sesion.php");




setcookie("usuario", '',time()+6000,'/');
setcookie("contraseña",'',time()+6000,'/');
if (isset($_COOKIE['usuario'])) {
    # code...

if ($_COOKIE['usuario']== null || $_COOKIE['usuario']== '') {
    
    //setcookie("usuario",$_COOKIE['usuario'],time()+6000);
   // setcookie("contraseña",$_COOKIE['contraseña'],time()+6000);

       setcookie("usuario",'',time()-600,'/');
}
else{
    
    header ("location:/paginas/IndexUsuario.php");
    die();
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap---cierre-->
    <link rel="stylesheet" href="/estilos/estiloInicioSesion.css">
    <link rel="shortcut icon" type="image/x-icon" href="/imagenes/iconfarmacorp.png">
    <title>Login</title>
</head>

<body class="text-center">
    <div class="container sm">
        <center>
            <form class="Formulario" name="form" action="/paginas/IndexUsuario.php" method="POST">
                <img class="mb-4" src="/imagenes/Farmacorp.png" alt="" width="210" height="200">
                <h1 class="h3 mb-3 fw-normal">Por favor, ingrese</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="correo"
                        placeholder="nombre@ejemplo.com" required>
                    <label for="floatingInput">Correo Electronico</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="contraseña"
                        placeholder="Password" required>
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <br>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="recordar"> Recordar
                    </label>
                </div>
                <button class="w-70 btn btn-lg btn-info" type="submit" name = "Enviar">Ingresar</button>
                <br><br>      
                <a href="/paginas/paginaRegistro/registro.php"> <input type ="button" class="w-70 btn btn-lg btn-success" value = "Crear Nueva cuenta"></input></a>
                <p class="mt-4 mb-3 text-muted">&copy; 2021–2023</p>
            </form>
        </center>
    </div>
</body>
</html>