<?php
    function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "1000604354";
        $base = "dbmicroservices";
        $connect = mysqli_connect($host, $user, $pass);
        mysqli_select_db($connect, $base);
        return $connect;
    }

?>