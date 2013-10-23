<?php
//iniciamos la sesion
session_start();

//incluimos la conexion con la base de datos
include 'ConexionBD.php';

//Recuperamos los datos del Formulario
$login = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

//verificamos si se a definido los campos login y password
if (isset($login) && isset($clave)) {

    //verificamos si existe el usuario en la base de datos
    $q = "select *
          from usuario 
          where login = '$login'" .
            "and password = '$clave'";
    $respuesta = mysql_query($q) or
            die("Revise la Sintaxis de su Consulta");

    $nfilas = mysql_num_rows($respuesta);

    $usuario = mysql_fetch_array($respuesta);

    /* Si exite el usuario $nfilas no es cero deberia de existir un solo usuario
     * con esa combinacion de login y password
     */
    while ($nfilas > 0) {

        //definimos las variables de sesion
        $_SESSION["codigo_usr"] = $usuario['ID_USUARIO'];
        $_SESSION["nombre_usr"] = $usuario['NOMBRE_USUARIO'];
        $_SESSION["apellido_usr"] = $usuario['APELLIDO_USUARIO'];
        $_SESSION["login_usr"] = $usuario['LOGIN'];
        $_SESSION["rol_usr"] = $usuario['ID_ROL'];
        $nfilas = $nfilas - 1;
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloMaquetacion.css"/>
    </head>
    <body>
        <div id="Contenedor-Principal">    
          
            <div id="Contenedor-Central">         
                <?php include 'FondoLista.php'; ?>
                <div id="Contenido">
                    <?php
                    if (isset($_SESSION["login_usr"])) {
                        
                    } else{
                        print ("<BR><BR>\n");
                        print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
                        print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
                    }
                    ?>
                </div>
                
            </div>

             
        </div>

    </body>
</html>
