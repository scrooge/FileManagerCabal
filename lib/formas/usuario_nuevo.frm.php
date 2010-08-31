<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="" />
    <br />
    <br />
    <label>Apellido Paterno:</label>
    <input type="text" name="apellido_paterno" value="" />
    <br />
    <br />	
    <label>Apellido Materno:</label>
    <input type="text" name="apellido_materno" value="" />
    <br />
    <br />
    <label>Usuario:</label>
    <input type="text" name="usuario" value="" />
    <br />
    <br />	
    <label>Clave:</label>
    <input type="clave" name="contraseña" value="" />
    <br />
    <br />
    <label>Correo:</label>
    <input type="text" name="email" value="" />
    <br />
    <br />	 
    <input type="submit" name="enviar" value="Enviar" />
    <input type="reset" name="reset" value="Limpiar" />
</form>
