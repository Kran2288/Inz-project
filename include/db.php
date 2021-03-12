<?php
    // define('DB_HOST', 'localhost');
    // define('DB_USER', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'inz-project');

    // $connection = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // if ($mysql->connect_errno) exit('Ошибка подключения к БД');
    // $connection->set_charset('utf8');
    // $connection->close();

    $par1_ip = "127.0.0.1";
    $par2_name = "root";
    $par3_p = "";
    $par4_db = "inz-project";

    $connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

    if($connect == false){ echo "Ошибка подключения";}
?>