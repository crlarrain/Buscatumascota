<?php
    require_once("functions/classes.php");
    if (isset($_POST["grabar"]) and $_POST["grabar"]=="si")
    {
        $obj = new Usuarios();
        $obj->add_usuario();
    }
?>
<form name="form" method="POST" action="usuarios.php">
    <table>
        <tr>
            <td>Nombre:</td><td><input type="text" name="nombre" /></td>
        </tr>
        <tr>
            <td>Correo:</td><td><input type="text" name="correo" /></td>
        </tr>
        <tr>
            <td>Contraseña:</td><td><input type="password" name="pass" /></td>
        </tr>
        <tr>
            <td>Repetir Contraseña:</td><td><input type="password" name="repetirPass" /></td>
        </tr>
        <tr>
            <td>Nombre de Usuario:</td><td><input type="text" name="user" /></td>
        </tr>
        <tr>
            <td>Comuna:</td><td><input type="text" name="comuna" /></td>
        </tr>
        <tr>
            <td>Foto de Perfil:</td><td><input type="file" name="perfil" /></td>
        </tr>
        <tr>
            <td><input type="hidden" name="grabar" value="si" /></td>
            <td colspan="2"><input type="submit" value="Guardar" /></td>
        </tr>
    </table>
</form>    
