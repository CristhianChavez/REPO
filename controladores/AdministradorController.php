<?php

require_once "modelos/Administrador.php";

class AdministradorController{

    public function login($usuario, $password){
        $administrador = new Administrador();
        $administrador->setUsuario($usuario);
        $resultado = $administrador->buscarUsuario();


        $idAdministrador = null;
        $nombreAdministrador = null;

        if(!empty($resultado)){

            if($resultado[0]->{"contrasena_administrador"} == $password){
                
                return 0;  

            }else{

                return 1;

            }

        }else{

            return 2;

        }

        
    }


}