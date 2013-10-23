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
                <?php include 'FondoLista.php' ?>               
                <div id="Contenido"> 
                    <?php
                    $id_usr = $_REQUEST['id_usr'];
                    $nombre = $_REQUEST['nombre'];
                    $apellido = $_REQUEST['apellido'];
                    $rol = $_REQUEST['rol'];
                    $login = $_REQUEST['login'];
                    $clave = $_REQUEST['clave'];


                    $q_resultado = "UPDATE usuario SET 
                                    ID_ROL = " . $rol . ",
                                    NOMBRE_USUARIO = '" . $nombre . "',
                                    APELLIDO_USUARIO = '" . $apellido . "',
                                    LOGIN ='" . $login . "',
                                    PASSWORD = '" . $clave . "'
                                    WHERE ID_USUARIO =" . $id_usr;

                    mysql_query($q_resultado) or die("Revise su Consulta");
                    echo "<h3>Se actualizaron los datos Correctamente</h3>";
                    echo "<p ALING='CENTER'><h3><a href='ListarUsuarios.php'>Volver a Lista de Usuarios</a></h3></p>";
                    ?>

                </div>
                 
            </div>
                     
        </div>     
    </body>
</html>



