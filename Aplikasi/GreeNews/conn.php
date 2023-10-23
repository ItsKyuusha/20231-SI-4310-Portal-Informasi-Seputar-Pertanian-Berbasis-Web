<?php
session_start();
$db_username = 'root';
$db_password = '';
$conn = new PDO( 'mysql:host=localhost;dbname=forum', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
}
try {
    $db_username = 'root';
    $db_password = '';
    $conn = new PDO('mysql:host=localhost;dbname=forum', $db_username, $db_password);
    // Set opsi lain jika diperlukan
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Fatal Error: Connection Failed! " . $e->getMessage());
}

?>