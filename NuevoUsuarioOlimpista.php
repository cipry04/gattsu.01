<?php
session_start();
include 'ConexionBD.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloMaquetacion.css"/>
    </head>
    <body>
        
            
            <div id="Contenedor-Central">
                <?php include 'FondoLista.php'?>
                <div id="Contenido">
                    <form action="InsertarUsuarioOlimpista.php" method="post">
                        <h3>Formulario de Creacion de Olimpista</h3>
                        <p><label class='etiqueta-entrada'>Nombre: </label>
                        <input type="text" name="nombre"><br></p>
                        <p><label class='etiqueta-entrada'>Apellido: </label>
                        <input type="text" name="apellido"><br></p>
                        <?php
                        $q_rol = "select ID_ROL ,NOMBRE_ROL from rol WHERE ID_ROL =3";
                        $res_rol = mysql_query($q_rol) or die("revise su consulta");
                        $num_rol = mysql_num_rows($res_rol);
                        echo "<p><label class='etiqueta-entrada'>Rol: </label>
                                 <select name='rol'>";
                        for ($i = 0; $i < $num_rol; $i++) {
                            $rol = mysql_fetch_array($res_rol);
                            echo "<option value='" . $rol['ID_ROL'] . "'>" 
                                                   .$rol['NOMBRE_ROL']."</p>";
                        }
                        ?>
                        <input type="hidden"><br>
                        <p><label class='etiqueta-entrada'>Nombre de Usuario:</label>
                        <input type="text" name="login"><br></p>
                        <p><label class='etiqueta-entrada'>Contrasenia: </label>
                        <input type="password" name="clave"><br></p>
                        <input class="boton" type="submit" name="registrar" value="Registrar Usuario"><br>
                </div>
               
            </div>
            <a href = "index.php"> Volver al Inicio </a>
          
    </body>
</html>