<?php
$servername = "localhost";
$username = "root";
$password = "Srikar#sq52raj";
$dbname = "educonnect_users";

if(($_SERVER["REQUEST_METHOD"]=="POST")&&(isset($_POST["submit"]))){
print_r($_POST);
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$login=$_POST["login"];
$password=$_POST["password"];
$block=$_POST["hostelb"];
$room=$_POST["hostelr"];

$sql="INSERT INTO registered VALUES('$firstname','$lastname','$gender','$email','$login','$password','$block','$room')";

 if(mysqli_query($conn, $sql)){
            echo "<h3>New Account Created Successfully. Proceed to login</h3>";
            header("Location: LoginpageLSM.php", TRUE, 301);

        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
}      
        // Close connection
        mysqli_close($conn);
}
?>
