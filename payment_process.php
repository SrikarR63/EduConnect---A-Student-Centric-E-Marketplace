<?php
session_start();
//include('db.php');
$con=mysqli_connect('localhost','root','Srikar#sq52raj','educonnect_users');
if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    $payment_status="complete";
    $qry="update payment set payment_status='$payment_status' where id='$_SESSION["OID"]'";
    mysqli_query($con,$qry);
    $qry="update payment set payment_id='$payment_id' where id='$_SESSION['OID']'";
    mysqli_query($con,$qry);
    
}
?>