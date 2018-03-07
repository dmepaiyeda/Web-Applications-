<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "practice";
 

 echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
 
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "CREATE TABLE StRec (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		major VARCHAR(50),
		year INT(1),
		reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table StRec created successfully <br>";
    
    $sql = "INSERT INTO StRec (firstname, lastname, email,major,year)
	VALUES ('John', 'Smith', 'john@example.com','Computer Science', 3)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully <br>";
    

	$sql = "INSERT INTO StRec (firstname, lastname, email,major,year)
	VALUES ('Jane', 'Doe', 'jane@example.com','Nursing', 1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully <br>";


    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM StRec"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }



    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



// $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 //return $conn;
 }
 
function CloseCon($conn)
 {
 
 	$conn = null;
 //$conn -> close();
 }
   
?>