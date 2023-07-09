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
$firstnm=$_POST["nmf"];
$prodnm=$_POST["prod"];
$viteml=$_POST["vitel"];
$contct=$_POST["cont"];
$desc=$_POST["description"];

$sql="INSERT INTO available_products(firstnm,prodname,vitmail,contact,description) VALUES('$firstnm','$prodnm','$viteml','$contct','$desc')";

 if(mysqli_query($conn, $sql)){
            echo "<h3>Product Details Updated Successfully.</h3>";
            header("Location: productsLSM.php", TRUE, 301);

        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
}      
        // Close connection
        mysqli_close($conn);
}
?>
