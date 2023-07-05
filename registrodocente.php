<h1>Registro de Docentes</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="nombre" placeholder="Ingrese nombre"><br>
    <input type="text" name="apellido" placeholder="Ingrese apellido"><br>
    <input type="text" name="usuario" placeholder="Ingrese usuario"><br>
    <input type="password" name="password" placeholder="Ingrese password"><br>
    <input type="password" name="password_confirm" placeholder="Repita password"><br>
    <input type="submit" value="Guardar"><br>
</form>

<?php
    if(!empty($_POST)){
        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["usuario"]);
        $password = trim($_POST["password"]);
        $password_confirm = trim($_POST["password_confirm"]);
        $errores = 0;

        //echo gettype($nombre);

        if($password !=$password_confirm){
            echo "<p>las contraseñas no coinciden";
            $errores++;
        }

        if(strlen($password)<8){
            echo "<p>las contraseñas debe de tener al menos 8 caracteres";
            $errores++;
        }

       
    }
?>