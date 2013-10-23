<?php
session_start();
include 'ConexionBD.php';
?>
<html>
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
							<div>
								<div class="6u">
									<section>
                <?php include 'FondoLista.php'?>
				</section>
								</div>
							</div>
						</div>
					</div>

                </div>
                <div id="content" class="8u mobileUI-main-content">
					
					<!-- Main Content Area -->
					<section>
                    <form action="InsertarUsuario.php" method="post">
                        <h3>Formulario de Creacion de Usuarios</h3>
                        <p><label class='etiqueta-entrada'>Nombre: </label>
                        <input type="text" name="nombre"><br></p>
                        <p><label class='etiqueta-entrada'>Apellido: </label>
                        <input type="text" name="apellido"><br></p>
                        <?php
                        $q_rol = "select * from rol";
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
					</section>
				</div>
               
            </div>
           
        </div>
    </body>
</html>
