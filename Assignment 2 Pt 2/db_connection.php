<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "assign2";




try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'DROP TABLE IF EXISTS Artwork';
    $conn->exec($sql);

    $sql = "CREATE TABLE Artwork (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        piece VARCHAR(30) NOT NULL,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        type VARCHAR(50),
        dimension VARCHAR(50),
        year INT(1),
        price INT(10),
        genra VARCHAR(30)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Artwork created successfully <br>";

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 }

function CloseCon($conn)
 {

    $conn = null;
 //$conn -> close();
 }

?>
