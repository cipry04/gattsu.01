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

                    $q_eu = "select * from usuario where id_usuario=" . $id_usr;
                    $res_eu = mysql_query($q_eu) or die("Revise su consulta");
                    $nro_eu = mysql_num_rows($res_eu);


                    for ($i = 0; $i < $nro_eu; $i++) {
                        $usr_e = mysql_fetch_array($res_eu);

                        $q_rol = "select * from rol";
                        $res_rol = mysql_query($q_rol) or die("Revise su Consulta");
                        $nro_rol = mysql_num_rows($res_rol);
                        echo "<h3>Formulario de Actualizacion de Usuarios</h3>";
                        echo "<form action='ActualizarUsuario.php' action='Post'>";
                        echo "<p><label class='etiqueta-entrada'>Nombre: </label>
                              <input type='text' name='nombre' value='" . $usr_e[2] . "'></p>";
                        echo "<p><label class='etiqueta-entrada'>Apellido: </label>
                              <input type='text' name='apellido' value='" . $usr_e[3] . "'></p>";
                        echo " <p><label class='etiqueta-entrada'>Rol: </label>
                                <select name='rol'>";
                        for ($j = 0; $j < $nro_rol; $j++) {
                            $rol = mysql_fetch_array($res_rol);
                            echo "<option value=" . $rol['ID_ROL'] . ">" . $rol['NOMBRE_ROL'];
                        }
                        echo "</select></p>";
                        echo "<input type='hidden' name='id_usr' value=" . $usr_e[0] . ">";
                        echo "<p><label class='etiqueta-entrada'>Nombre de Usuario: </label>
                              <input type='text' name='login' value='" . $usr_e[4] . "'></p>";
                        echo "<p><label class='etiqueta-entrada'>Contrasenia: </label>
                              <input type='text' name='clave' value='" . $usr_e[5] . "'></p>";
                        echo "<input class='boton' type='submit' name='guardar' value='Guardar Cambios'>";
                        echo "</form>";
                    }
                    ?>

                </div>
                
            </div>
                   
        </div>     
    </body>
</html>
