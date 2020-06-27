<?php
    /**
     * Инициализация подключения к базе данных
     */

    $dsn = 'mysql:host=localhost;dbname=myshop';
    $username = 'root';
    $password = '';
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $db = new PDO($dsn, $username, $password, $options);

    if (!$db) {
        echo "MYSQL connection error";
        exit();
    }