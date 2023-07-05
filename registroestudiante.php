<h1>Registro de Estudiantes</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="nombre" placeholder="Ingrese nombre"><br>
    <input type="text" name="apellido" placeholder="Ingrese apellido"><br>
    <input type="int" name="codigo" placeholder="Ingrese codigo"><br>
    <input type="int" name="dni" placeholder="Ingrese dni"><br>
    <input type="password" name="password" placeholder="Ingrese password"><br>
    <input type="password" name="password_confirm" placeholder="Repita password"><br>
    <input type="submit" value="Guardar"><br>
</form>

<?php
    if(!empty($_POST)){
        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["email"]);
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
        $patron_email = "/^\\S+@\\S+\\.\\S+$/";
        if(preg_match($patron_email, $email)==0){
            echo "<p>el email no es correcto";
            $errores++;
        }

        
    }
?>