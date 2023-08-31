<?php

session_start();
include_once("\wamp64\www\ProyectoFarmacia\clases\claseConexion.php");





if ((isset($_POST["correo"]) and isset($_POST["contraseña"]))|| isset( $_COOKIE['usuario'])) {
          
    
            $objeto = new conexion();

            if (isset($_COOKIE['usuario']) and isset($_COOKIE['contraseña'])) {
                
                $user = $objeto->Verificar($_COOKIE['usuario'], $_COOKIE['contraseña']);

               
            }
            else{
                $user = $objeto->Verificar($_POST['correo'], $_POST['contraseña']);

            }

            if (empty($user)) {
                

                header("location: /paginas/paginaRegistro/registro.php");
                die();
            } else {
                $correoUser = $user['correoelectronico'];
                $contraseñaUser = $user['contrasena'];
                $codigoUser = $user['codigocliente'];
                $_COOKIE['usuario']= $user['correoelectronico'];
                $_COOKIE['contraseña']= $user['contrasena'];
                
                $revisado=true;
                
                    
                $soyAdmi = false;
                
                if ($correoUser == "administrador@gmail.com" && $contraseñaUser == "12345") {
                // echo "Soy admi";
                    $soyAdmi = true;
                } else {
                    //echo "No soy admi";
                    $soyAdmi = false;
                }

                
            }
       
           
        //echo "Codigo vacio";
       
} else {
            
    //header("location: ../index.php");   
    //die();        
}

            

     
?>
