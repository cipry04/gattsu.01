<?php
session_start();
include 'ConexionBD.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloMaquetacion.css">
    </head>
    <body>
        <div id="Contenedor-Principal">
           
            <div id="Contenedor-Central">
                <?php include 'FondoLista.php' ?>
                <div id="Contenido">

                    <?php
                    $q_u = "select * from usuario";
                    $res_usuarios = mysql_query($q_u) or die("Revise su consulta");

                    $nro_usr = mysql_num_rows($res_usuarios);
                    echo "<h3> Lista de Usuarios<h3>";
                    echo "<table id='tabla'>
                            <tr>
                                <th id='CabezeraTabla'>Nro</th>
                                <th id='CabezeraTabla'>Nombre</th>
                                <th id='CabezeraTabla'>Apellido</th>
                                <th id='CabezeraTabla'>Rol</th>
                                <th id='CabezeraTabla'>Accion</th>
                            </tr>";
                    for ($i = 0; $i < $nro_usr; $i++) {
                        $usuario = mysql_fetch_array($res_usuarios);
                        echo "<tr>
                                    <td id='ContenidoTabla'>" . ($i + 1) . "</td>
                                    <td id='ContenidoTabla'> " . $usuario['NOMBRE_USUARIO'] . "</td>
                                    <td id='ContenidoTabla'>" . $usuario['APELLIDO_USUARIO'] . "</td>
                                    <td id='ContenidoTabla'>" . $usuario['ID_ROL'] . "</td>
                                    <td id='ContenidoTabla'><a href='EditarUsuario.php?id_usr=" . $usuario['ID_USUARIO'] . "'>Editar</a></td>
                              </tr>";
                    }
                    echo "</table>"
                    ?>
                </div>
               
            </div>
          
        </div>
    </body>
</html>

