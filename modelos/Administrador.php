<?php

require_once "Conn.php";

class Administrador{
    private $nombre;
    private $usuario;
    private $password;


    public function buscarUsuario(){

        $sql = "SELECT * FROM administradores WHERE usuario_administrador='".$this->usuario."'";
        $stmt = Conn::conectar()->prepare($sql);

        try{

            $stmt -> execute();

        }catch(PDOException $Exception){

            return null;

        }

        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }


    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setPassword($password){
        $this->password = $password;
    }

}