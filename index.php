<h1>Inicio de Sesion</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="usuario" placeholder="Ingrese usuario"><br>
    <input type="password" name="password" placeholder="Ingrese password"><br>
    <input type="submit" value="Ingresar"><br>
</form>
<?php
    //echo password_hash("123456", PASSWORD_DEFAULT);
    if(!empty($_POST)){
        $usuario = trim($_POST["usuario"]);
        $password = trim($_POST["password"]);
        $errores = 0;
        if($usuario==""){
            echo "Ingrese usuario<br>";
            $errores++;
        }

        if($password==""){
            echo "Ingrese Contraseña<br>";
            $errores++;
        }

        if($errores==0){

            require_once "controladores/AdministradorController.php";

            $uc = new AdministradorController();
            $resultado = $uc->login($usuario, $password);
            

            if($resultado == 0){

                header("location: registro.php");
                
            }else if ($resultado == 1){

                echo "Contraseña incorrecta";

            }else if ($resultado == 2){

                echo "Usuario no encontrado";

            }else{

                echo "Lo sentimos hubo un error";

            }
        }
    }
?>