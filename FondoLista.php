<?php
//session_start();
include 'ConexionBD.php';
?>
<div id="Lista"> 
    <?php
    if (isset($_SESSION["login_usr"])) {

        //redefinimos las variables de sesion
        $nombre_usr = $_SESSION["nombre_usr"];
        $apellido_usr = $_SESSION["apellido_usr"];
        $id_rol = $_SESSION["rol_usr"];

        //imprimimos datos de inicio de sesion
        echo "<p ALIGN='CENTER'><b>Ha iniciado Sesion:</b> " . $nombre_usr . " " . $apellido_usr . "</p>";
        echo "<h3>Acciones Disponibles</h3>";
        // ADMINISTRADOR PUEDE REALIZAR LAS SIGUIENTES TAREAS
        if ($id_rol == 1) {
            echo "<ul>";
            echo "<li><A HREF='NuevoUsuario.php' >Crear Nuevo Usuario</A></li>";
            echo "<li><A HREF='ListarUsuarios.php' >Actualizar Usuarios</A></li>";
            echo "<li><A HREF='Lenguaje.php' >Configurar lenguajes</A></li>";
            echo "<li><A HREF='Entrenamiento' >Generar espacios de entrenamiento </A></li>";
            echo "</ul>";
            
            echo "<hr size='2' />";
            echo "<P ALIGN='CENTER'>[ <A HREF='CerrarSesion.php'>Desconectar</A> ]</P>";
            // COMITE el comite puede realizar las siguientes tareas
        } else if ($id_rol==2) {
            echo "<ul>";
            
            echo "<li><A HREF='Subir.php' >Plantear  problema</A></li>";
            echo "<li><A HREF='Otras.php' >Otras tareas</A></li>";
           
            echo "</ul>";
            
            echo "<hr>";
            echo "<P ALIGN='CENTER'>[ <A HREF='CerrarSesion.php'>Desconectar</A> ]</P>";
            // OLIMPISTA el olimpista puede realizar las siguientes tareas
        } else {
            echo "<li><A HREF='Verproblemas.php' >Ver problemas</A></li>";
            echo "<li><A HREF='Subirsolucion.php' >Subir solucion</A></li>";
            echo "<li><A HREF='otras.php' >Otras tareas</A></li>";
            echo "</ul>";
            
            echo "<hr>";
            echo "<P ALIGN='CENTER'>[ <A HREF='CerrarSesion.php'>Desconectar</A> ]</P>";
            
        }
    }
    ?>
</div>