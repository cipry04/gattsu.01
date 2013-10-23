
<html>
<head>
<title>Subir un Problema</title>
</head>

<body>
Porfavor Seleccione el Archivo a subir
<hr />
<form action="upload.php" method="post" enctype="multipart/form-data">
	<input name="archivo" type="file" size="35" />
	<hr />
	<input name="enviar" type="submit" value="Subir Archivo" />
	<hr />
	<input name="action" type="hidden" value="upload" />
</form>


</body>
</html>
