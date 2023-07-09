<?php
$servername = "localhost";
$username = "root";
$password = "Srikar#sq52raj";
$dbname = "educonnect_users";

if(($_SERVER["REQUEST_METHOD"]=="POST")&&(isset($_POST["sub"]))){
print_r($_POST);
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
$email=$_POST["el"];
$usernm=$_POST["usr"];
$pass=$_POST["pass"];

$sql="SELECT email,username,password FROM registered WHERE email='$email' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows==1) {

    session_start();
    $message="";
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) 
    {
    $_SESSION["email"] = $row['email'];
    $_SESSION["username"] = $row['username'];
    if(isset($_SESSION["email"])){
    header("Location: indexpageLSM.php", TRUE, 301);
}
    }
}
    else
    {
        echo "ERROR: INVALID USER. Hush! Sorry $sql. ". mysqli_error($conn);
        header("Location: SignuppageLSM.php", TRUE, 301);
    }
}      
        // Close connection
        mysqli_close($conn);
}

?>