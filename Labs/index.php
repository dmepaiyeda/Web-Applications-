
<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";
echo "<br>";

/*

//create table
$sql = "CREATE TABLE StRec (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
major VARCHAR(50),
year INT(1),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Student Records created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
echo "<br>";


$sql = "INSERT INTO StRec (firstname, lastname, email,major,year)
VALUES ('John', 'Smith', 'john@example.com','Computer Science', 3)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br>";

$sql = "INSERT INTO StRec (firstname, lastname, email,major,year)
VALUES ('Jane', 'Doe', 'jane@example.com','Nursing', 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br>";


$sql = "SELECT id, firstname, lastname FROM StRec";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
*/
CloseCon($conn);

?>