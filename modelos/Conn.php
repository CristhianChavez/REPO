<?php

class Conn{


    static public function infoDatabase(){

        $infoDB = array(

            "database" => "universidad2",
            "user" => "root",
            "pass" => ""
        );

        return $infoDB;

    }


    static public function conectar(){

        try{

            $link = new PDO(
                "mysql:host=localhost;dbname=".Conn::infoDatabase()["database"],
                Conn::infoDatabase()["user"],
                Conn::infoDatabase()["pass"]
            );

            $link->exec("set names utf8");

        }catch(PDOException $e){

            die("Error: ".$e->getMessage());

        }

        return $link;
    }

}
