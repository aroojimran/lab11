<html>
</body>
<?php


$name=$_POST["fullname"];

$class=$_POST["class"];

$role=$_POST["role"];
$id=$_POST["id"];

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

$sql = "SELECT fullname, class, role,id,email  FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($row["id"]==$id && $row["fullname"] == $name && $row["role"] == $role &&  $class= $row["class"])
		{
			echo "it matchs";
header("location:http://localhost/student.php");			
		}
		
        echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. "Email " . $row["email"]. "Class". $row["class"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>
</body>
</html>