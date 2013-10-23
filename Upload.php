<?php
$status = "";
if ($_POST["action"] == "upload") {
	// obtenemos los datos del archivo
	$tamano = $_FILES["archivo"]['size'];
	$tipo = $_FILES["archivo"]['type'];
	$archivo = $_FILES["archivo"]['name'];
	$prefijo = substr(md5(uniqid(rand())),0,6);

	if ($archivo != "") {
		if ($tipo == "application/pdf") {
			$destino = "problemasPDF/".$prefijo."_".$archivo;
			if (copy($_FILES['archivo']['tmp_name'],$destino)) {
				$status = "Archivo subido: <b>".$archivo."</b>";
			} else {
				$status = "ERROR al subir el archivo";
			}
		} else {
			$status = "ERROR: Solo se permite subir archivos PDF";
		}
	} else {
		$status = "ERROR al subir archivo";
	}
}
echo $status;
?>

