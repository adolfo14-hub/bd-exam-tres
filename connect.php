<?php
$port = 1433;
$serverName = "all-02.database.windows.net," . $port;
$database = "housemu";
$userName = "estudiante";
$password = "Pa55w.rd1";

try {
    $conn = new PDO("sqlsrv:server = $serverName,$port; Database = $database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}

$conn = null;
