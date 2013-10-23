<?php 
session_start();
include 'ConexionBD.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloMaquetacion.css"/>
    </head>
    <body>
        <div id="Contenedor-Principal">
           
            <div id="Contenedor-Central">
                <?php include 'FondoLista.php'?>
                <div id="Contenido">
                    <?php
                    $nombre = $_REQUEST['nombre'];
                    $apellido = $_REQUEST['apellido'];
                    $rol = $_REQUEST['rol'];
                    $usuario = $_REQUEST['login'];
                    $password = $_REQUEST['clave'];
                    //echo $nombre." ".$apellido." ".$rol." ".$usuario." ".$password;
                    $q_c_u = "insert into usuario (NOMBRE_USUARIO, APELLIDO_USUARIO,
                                                   ID_ROL, LOGIN, PASSWORD) 
                                          values ('".$nombre."','".$apellido."',
                                                  ".$rol.",'".$usuario."','".$password."')";
                    mysql_query($q_c_u) or die ("Revise su Consulta");
                    echo "<p ALING='CENTER'><h3>Se Creo el usuario Correctamente</h3></p>";
                    echo "<p ALING='CENTER'><h3><a href='index.php'>Ahora debes inicar secion</a></h3></p>";
                    ?>
                </div>
               
            </div>
            
            
        </div>
    </body>
</html>
