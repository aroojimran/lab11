<html>


<body>

<h1>  Welcome Student </h1>



<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendence_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT classid, studentid, isPresent,comments  FROM attendance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<br>classId: <br> " . $row["classid"]. " <br>StudentID <br>" . $row["studentid"]. "<br>Present <br>" . $row["isPresent"]. "<br>Comments<br>". $row["comments"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>


</body>



</html>