<?php
$host = 'ep-shy-fire-andfpc8g-pooler.c-6.us-east-1.aws.neon.tech';
$dbname = 'neondb';
$username = 'neondb_owner';
$password = 'npg_6jMJEIG3BWeo';
$port = '5432'; 

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "IWACU TWATARAMYE BIRAKORA<br>";


} catch (PDOException $e) {
    echo "SHAKIRA HANO IKIBAZO: " . $e->getMessage() . "<br>";
}
?>

