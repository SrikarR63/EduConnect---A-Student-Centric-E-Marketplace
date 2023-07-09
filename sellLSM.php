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
	<title>Sell Product Page</title>
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

		label,input,textarea{
			display: inline-block;
			width: 150px;
			height: 23px;
			box-sizing: border-box;
			border-spacing: 25px;
		}

		textarea{
			vertical-align: top;
			width=30px;
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

	<script>
	function vn()
	{
		var emil=document.getElementById("vitel").value;
		var contact=document.getElementById("cont").value;
		var emv=/^\w+([\.]{1}\w+[@]{1})vitstudent.ac.in$/
		var cont=/^[0-9]{10,10}$/
		var res="";
		if(!(emv.test(emil)))
		{
			document.getElementById("emil").value='';
			res+="Mail is wrong";
			alert("Mail is wrong");
		}
		if(!(cont.test(contact)))
		{
			document.getElementById("cont").value='';
			res+="Invalid Contact Name<br>";
			alert("Invalid Contact Number! Mobile Number must be 10 digits only");
		}

		document.getElementById("res").innerHTML=res;
	if(res.length>0){
		return false;
	}
	alert("Product Details Updated Successfully");
	return true;
	}
	</script>
</head>
<body>
	<?php include('hmLSM.php')?>
	<center>
	<div class="brnt" align="center">
		<h1><strong>EDU-Connect - A Student-Centric E-Marketplace</strong></h1>
		<h2>SELL Products Form</h2>
		<form onsubmit="return vn()" action="insertbr.php" method="POST">
		<br><br>
		<label for="nmf">First Name</label>
		<input name="nmf" id="nmf" type="text" placeholder="firstname" required>
		<br><br>
		<label for="prod">Product Name</label>
		<input name="prod" id="prod" type="text" placeholder="product_name" required>
		<br><br>
		<label for="vitel">VIT E-mail</label>
		<input name="vitel" id="vitel" type="email" placeholder="a-z/1-9/*#" required>
		<br><br>
		<label for="cont">Contact Number (Mobile)</label>
		<input name="cont" id="cont" type="text" placeholder="0123456789" required>
		<br><br>	
		<label for="description">Product Description</label>
		<textarea name="description" rows=5 cols=25 placeholder="" required></textarea>
		<br><br>
		<button name="sub" type="submit" value="Submit"><strong>Submit</strong></button>
		<br><br>	
		<!--<a href="SignuppageLSM.php"><strong>New User?</strong></a>-->
		<strong><p id="res"></p></strong>
	    </form>
	</div>
</center>
</body>
</html>