<?php

// PAS D'ESPACES DANS LE $DSN
$dsn = "mysql:host=localhost:3306;
        dbname=ma_collection_jeux;
        charset=utf8";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_PERSISTENT => TRUE, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

