<?php

    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'new_bd';
    $DB_CHARSET = 'utf8mb4';

    $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=$DB_CHARSET";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new PDO($dsn, $DB_USER, $DB_PASSWORD, $options);
    return $pdo;
/*
    try {
        $dbh = new PDO($dsn, $DB_USER, $DB_PASSWORD);
    } catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }

    */
