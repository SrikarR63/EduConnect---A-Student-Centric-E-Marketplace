<?php
	session_start();
	if(!isset($_SESSION['username'])){
            header('location: LoginpageLSM.php');
        }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<style>

		h1{
			background-color: lightgoldenrodyellow;
		}

		h2{
			background-color: yellowgreen;}


		.brnt{
			align-items: center;
  			background:  lightsteelblue;
  			width: 500px;
  			border: 15px solid green;
  			padding: 50px;
  			margin: 20px;
			}

		body{
			background-color: lightpink;
			background-image: url("http://localhost/srikar_projects/shoeimgsrikar5.jpg");
			text-align: center;
			}

		label,input{
			display: inline-block;
			width: 150px;
			height: 23px;
			box-sizing: border-box;
			border-spacing: 25px;
		}

		button{
			background-color: greenyellow;}


		input:invalid {
			background-color: lightpink;
		}
		input:valid {
			background-color: #EAFE99;
		}

	</style>

</head>
<body>
	<?php include('hmLSM.php')?>
	<center>
	<div class="brnt" align="center">
		<h1><strong>EDU-Connect - A Student-Centric E-Marketplace</strong></h1>
		<h2>BUY/RENT Products Form</h2>
		<form action="detailsdisp.php" method="POST"> <!--detailsdisp.php-->
		<br><br>
		<label for="prod">Enter Product ID</label>
		<input name="prod" id="prod" type="text" placeholder="product_id" required>
		<br><br>
		<button name="subd" type="submit" value="Submit"><strong>Submit</strong></button>
		<br><br>	
		<a href="productsLSM.php"><strong>See Products</strong></a>
		<strong><p id="res"></p></strong>
	    </form>
	</div>
</center>
</body>
</html>