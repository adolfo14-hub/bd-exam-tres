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

    // sql to create table
    $sql = "CREATE TABLE Cancione (
    	id INT PRIMARY KEY IDENTITY (1, 1),
        nombre VARCHAR(30) NOT NULL,
        artista VARCHAR(30) NOT NULL,
        fecha VARCHAR(4),
	    productora VARCHAR (30) NOT NULL
        );";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Cancione created successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
