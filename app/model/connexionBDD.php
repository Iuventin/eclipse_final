<?php
require_once 'config.php';

function getDatabaseConnexion()
{
    // $dsn = 'mysql:dbname=cdce5547_2024_eclipse;host=localhost;charset=utf8';
    // $username = 'cdce5547_2024_S2_admin';
    // $password = 'MMI4ever@senart';

    $dsn = 'mysql:dbname=main_database_eclipse;host=localhost;charset=utf8';
    $username = 'root';
    $password = 'root';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "La connexion n'a pas pu être effectuée";
        echo $e->getMessage();
        exit;
    }
    return $pdo;
}
;