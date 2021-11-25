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

    $sql .= "INSERT INTO Canciones (nombre, artista, fecha, productora) VALUES ('Hanging Tree', 'Michael Bibi', '2015','Sony Music')";
    $sql .= "INSERT INTO Canciones (nombre, artista, fecha, productora) VALUES ('Get Stupid', 'Cloone', '2018','CLNE')";
    $sql .= "INSERT INTO Canciones (nombre, artista, fecha, productora) VALUES ('Gravity', 'Boris Brejcha', '2020','Warner Music')";
    $sql .= "INSERT INTO Canciones (nombre, artista, fecha, productora) VALUES ('Marea', 'Fred Again', '2021','Again Records')";
    $sql .= "INSERT INTO Canciones (nombre, artista, fecha, productora) VALUES ('Dance and Chant', 'Yolanda BeCool', '2019','LLC Records')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
