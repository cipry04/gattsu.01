<?php
session_start();
include("conexionBD.php");
?>
<html>
    <head>
        
    </head>
    <body>
        <div id="Contenedor-Principal">    
           
            <div id="Contenedor-Central">
                <div id="Autentificar"> 
                    <!-- Aqui va el contenido a mostrar-->
                    <?PHP
                    if (isset($_SESSION["login_usr"])) {
                        session_destroy();
                        print ("<BR><BR><P ALIGN='CENTER'>Conexion finalizada</P>\n");
                        print ("<P ALIGN='CENTER'>[ <A HREF='index.php' >Conectar</A> ]</P>\n");
                    } else {
                        print ("<BR><BR>\n");
                        print ("<P ALIGN='CENTER'>No existe una conexion activa</P>\n");
                        print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
                    }
                    ?>
                </div>              
                <div id="Contenido"> 
                </div>
               
            </div>
            

        </div>     

    </body>
</html>
