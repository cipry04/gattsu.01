<?php

mysql_connect("localhost", "root", "") or
        die("No se Pudo establecer la conexion con Mysql");

mysql_select_db("gattsu1") or
        die("No seleciono la base de datos correcta o no existe la Base de Datos");
?>
