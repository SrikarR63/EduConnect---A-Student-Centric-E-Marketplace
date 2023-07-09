<?php
    session_start();
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


		.lgn{
			align-items: center;
  			background:  lightsteelblue;
  			width: 500px;
  			border: 15px solid green;
  			padding: 50px;
  			margin: 20px;
			}

		body{
			background-color: lightpink;
			/*background-image: url("http://localhost/srikar_projects/shoeimgsrikar5.jpg");*/
			background-image: url("http://localhost/srikar_projects/LSM_PROJECT_FILES_/v2s.jpg");
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
	<div class="lgn" align="center">
		<h1><strong>EDU-Connect - A Student-Centric E-Marketplace</strong></h1>
		<h2>WELCOME TO THE LOGIN PAGE</h2>
		<form action="verifyloginLSM.php" method="POST">
		<br><br>
		<label for="el">Email</label>
		<input name="el" id="el" type="email" placeholder="abc@xyz.com" required>
		<br><br>
		<label for="usr">Username</label>
		<input name="usr" id="usr" type="text" placeholder="a-z/1-9/*#" required>
		<br><br>
		<label for="pass">Password</label>
		<input name="pass" id="pass" type="password" placeholder="a-z/1-9/*#" required>
		<br><br>	
		<button name="sub" type="submit" value="Submit"><strong>Submit</strong></button>
		<br><br>	
		<a href="SignuppageLSM.php"><strong>New User?</strong></a>
		<strong><p id="res"></p></strong>
	    </form>
	</div>
</center>
</body>
</html>