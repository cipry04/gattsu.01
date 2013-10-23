
    <h2>Autentificar</h2>
    <hr size='1' />
    <P>Esta zona tiene el acceso restringido.<BR> 
        Para entrar debe identificarse</P>
    <FORM CLASS='entrada' NAME='login' ACTION='IngresoUsuario.php'  METHOD='POST'>
        <P><LABEL class='etiqueta-entrada'>Usuario:</LABEL>
            <INPUT TYPE='TEXT' NAME='usuario' SIZE='15'></P>
        <P><LABEL class='etiqueta-entrada'>Contrasenia:</LABEL> 
            <INPUT TYPE='PASSWORD' NAME='clave' SIZE='15'></P><br>
        <P><INPUT class="boton" TYPE='SUBMIT' VALUE='Ingresar Usuario'></P>   
    </FORM>
    <FORM CLASS='entrada' NAME='TEXTO' ACTION='NuevoUsuarioOlimpista.php'  METHOD='POST'>
      <P><INPUT class="boton" TYPE='SUBMIT' VALUE='Registar nuevo Usuario'></P>    
     </FORM>


