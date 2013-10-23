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
		<title>MegaCorp by HTML5Templates.com</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<noscript>
		<link rel="stylesheet" href="css/5grid/core.css" />
		<link rel="stylesheet" href="css/5grid/core-desktop.css" />
		<link rel="stylesheet" href="css/5grid/core-1200px.css" />
		<link rel="stylesheet" href="css/5grid/core-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body>
	<div id="header-wrapper">
		
			<header id="header">
				<div class="5grid-layout">
					<div class="row">
						<div class="4u" id="logo">
							<h1><a href="#" class="mobileUI-site-name">gattsu.01<h3>juez virtual</h3</a></h1>
						</div>
						<div class="8u" id="menu">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="index.html">Inicio</a></li>
									<li><a href="twocolumn1.html">Lista de Problemas</a></li>
									<li><a href="twocolumn2.html">Ranking</a></li>
									<li><a href="onecolumn.html">Ayuda</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			
		</div>
		<div id="page" class="row">
		<div id="sidebar" class="4u">
						<div class="5grid">
							<div class="row">
								<div class="6u">
									<section>        
                <?php include 'FondoLista.php'; ?>
                    <?php
                    if (isset($_SESSION["login_usr"])) {
                        
                    } else{
                        print ("<BR><BR>\n");
                        print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
                        print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
                    }
                    ?>
               </section>
								</div>
							</div>
						</div>
					</div>

                </div>
   </body>
</html>