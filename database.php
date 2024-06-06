<?php
$db_host = 'localhost';
$db_name = 'db_name';
$db_user = 'db_user';
$db_password = 'db_wassword';

try {
    $db = new PDO("pgsql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Conection ERROR: " . $e->getMessage();
    exit;
}
?>
