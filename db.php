<?php
$dsn = 'mysql:host = localhost;dbname=bookshopdb';
$username = 'root';
$password = '';
$options = [];
try{
    $connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e){
    echo 'connection.fail';
}
?>