<?php
	session_start();
	if(!isset($_SESSION["username"])){
            header('location: LoginpageLSM.php');
        }
?>

<!DOCTYPE html>
<html>
<head>
<title>EDU-Connect - Products Page</title>

<style>

table{
background-color: lightgreen;
border: 2px solid red;
margin:50px;
margin-top:15px;
padding:10px;
align-content: center;
height: auto;
width:90%;
}

th{
height: 50px;
font-size: 21px;
}

td{
margin-bottom: 15px;
padding: 15px;
font-size: 17px;
text-align: center;
font-weight: bold;
}



button{
font-weight: bold;
display:inline-block;
}

</style>

</head>

<body>

<?php
include("hmLSM.php");

$servername = "localhost";
$username = "root";
$password = "Srikar#sq52raj";
$dbname = "educonnect_users";

//if(($_SERVER["REQUEST_METHOD"]=="POST")&&(isset($_POST["sub"]))){
//print_r($_POST);
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

$sql="SELECT id,firstnm,prodname,description FROM available_products";
$result = $conn->query($sql);

if ($result->num_rows>0) {
	echo "<table border='1'><tr><th>Sno.</th><th>Seller Name</th><th>Product Name</th><th>Description</th><th colspan=2>Options</th></tr>";
  // output data of each row
	$sno=1;
  while($row = $result->fetch_assoc())
  { $valp=$row['prodname'];
    echo "<tr><td>".$row['id']."</td><td>".$row["firstnm"]."</td><td>".$row["prodname"]."</td><td>".$row["description"]."</td><td><a href='buyrentLSM.php'><button>Buy/Rent</button></a></tr>";
  }
  echo "</table>";
}
    else
    {
        echo "ERROR: INVALID USER. Hush! Sorry $sql. ". mysqli_error($conn);
        header("Location: LoginpageLSM.php", TRUE, 301);
    }      
   }
        // Close connection
        mysqli_close($conn);
?>

</body>
</html>