<?php
define('DB_SERVER'      , 'DANIEL-MARCOS');
define('DB_USERNAME'    , 'sa');
define('DB_PASSWORD'    , '123456');
define('DB_NAME'        , 'TCCDEV');
 
try{

    # $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo = new PDO("sqlsrv:Server=" . DB_SERVER . ";Database=". DB_NAME, DB_USERNAME, DB_PASSWORD);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}
?>
