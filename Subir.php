
<html>
<head>
<title>Subir un Problema</title>
</head>

<body>
Porfavor Seleccione el Archivo a subir
<hr />
<form action="upload.php" method="post" enctype = "multipart/form-data">
	<p><label>Titulo del Problema</label>
	<input name = "titulo" type = "text" size=""35></p>
	<p><label>Autor</label>
	<input name = "autor" type = "text" size = "20"></p>
	<p><label>Elegir Archivo</label>
	<input name = "archivo" type = "file" size = "35" /></p>	
	<input name = "enviar" type = "submit" value = "Subir Archivo" />
	<input name="action" type="hidden" value="upload" />
</form>


</body>
</html>
