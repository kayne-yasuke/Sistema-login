<?php

    $dbHost = '127.0.0.1:3308';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'frequencia';

    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName) or dir("Not_Connect");

?>