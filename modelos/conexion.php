<?php

class Conexion {

  public function conectar(){

    // $servername = "sql175.main-hosting.eu.";
    // $database = "u881670891_tuto1";
    // $username = "u881670891_tuto";
    // $password = "22101919";
    //
    // $conn = mysqli_connect($servername, $username, $password, $database);

    $link = new PDO("mysql:host=sql175.main-hosting.eu.; dbname=u881670891_tuto1",
            "u881670891_tuto",
            "22101919",
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );

    return $link;

  }

}