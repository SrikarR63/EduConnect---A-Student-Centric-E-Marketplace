<?php
    session_start();
    if(!isset($_SESSION["username"])){
            header('location: LoginpageLSM.php');
        }
?>
<!DOCTYPE html>
<html>
<head>
<title>EDU-Connect Product Details Display</title>
<style>
    .detdisp{
        margin-top: 70px;
        margin-left: 500px;
        margin-right: 500px;
        border: 2px solid green;
        width: 450px;
        padding: 9px;
        font-size: 20px;
        height:auto;
        background-color: lightpink;
    }
    h2{
        text-align: center;
        background-color: yellowgreen;
        }
    marquee{
        font-size: 30px;
    }

</style>
</head>
<body>
<?php include('hmLSM.php');
$servername = "localhost";
$username = "root";
$password = "Srikar#sq52raj";
$dbname = "educonnect_users";

if(($_SERVER["REQUEST_METHOD"]=="POST")&&(isset($_POST["subd"]))){
echo "<h2>SELLER DETAIILS</h2>";
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
$productid=$_POST["prod"];

$sql="SELECT firstnm,prodname,vitmail,contact,description FROM available_products WHERE id='$productid'";
$result = $conn->query($sql);
if ($result->num_rows>0) {
    while($row = $result->fetch_assoc())
    {
        $firnam=$row["firstnm"];
        $pronam=$row['prodname'];
        $vitmai=$row['vitmail'];
        $cont=$row['contact'];
        $des=$row['description'];
}
$sql1="SELECT lastname,gender,block,room FROM registered WHERE email='$vitmai'";
  $result1 = $conn->query($sql1);
  if ($result1->num_rows>0){
    while($row1 = $result1->fetch_assoc()) {
    $sellern=$firnam." ".$row1['lastname'];
    echo "<div class='detdisp'>Seller Name:    <b>".$sellern."</b><br>VIT Mail ID:    <b>".$vitmai."</b><br>Gender:    <b>".$row1['gender']."</b><br>Hostel Block:    <b>".$row1['block']."</b><br>Hostel Room:    <b>".$row1['room']."</b><br>Contact:    <b>".$cont."</b><br>Product Being Sold/Let for Rent:    <b>".$pronam."</b><br>Product Description:    <b>".$des."</b><br></div>";
}
}
}
    else
    {
        echo "ERROR: Enter Valid Product Id from the Products Page. Hush! Sorry $sql. ". mysqli_error($conn);
        window.location.replace("detailsdisp.php");
    }
}      
        // Close connection
        mysqli_close($conn);
}

?>
<br><br>
<marquee direction="right"><strong>Thank You for Using Edu-Connect!</strong></marquee>
</body>
</html>