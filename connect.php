<?php
    $host = "localhost:4306";
    $user = "root";
    $password = "";
    $database = "project";

    $connect = mysqli_connect($host, $user, $password, $database);

    // if($connect){
    //     echo "Successfully Connected!";
    // }else{
    //     echo "Connection Failed!";
    // }
    // echo ($connect) ? "Successfully Connected!" : "Connection Failed";
?>