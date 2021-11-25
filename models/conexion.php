<?php

class Conexion{
    static public function conectar() {
        $servername ="localhost";
        $dbname="hotel";
        $username = "root";
        $password = "";

        $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conexion->exec("set names utf8");

        return $conexion;
    }
}