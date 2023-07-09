<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style>

		h1{
			background-color: lightgoldenrodyellow;
		}

		h2{
			background-color: yellowgreen;}

		.myform{
			align-items: center;
			background:  lightsteelblue;
  			width: 700px;
  			height: auto;
  			border: 15px solid green;
  			padding: 50px;
  			margin: 35px;
			}


		label,input,select{
        	display: inline-block;
        	width: 150px;
			height: 23px;
			box-sizing: border-box;
			border-spacing: 25px;
			margin-bottom: 9px;
      		}


		body{
			background-color: lightpink;
			/*background-image: url("http://localhost/srikar_projects/shoeimgsrikar5.jpg");*/
			background-image: url("http://localhost/srikar_projects/LSM_PROJECT_FILES_/v1s.jpg");
			text-align: center;
			}

		button{
			background-color: greenyellow;
			}


		input:invalid {
			background-color: lightpink;
		}
		input:valid {
			background-color: #EAFE99;
		}

	</style>

	<script>
	function validation()
	{
		var username=document.getElementById("login").value;
		var password=document.getElementById("password").value;
		var confpassword=document.getElementById("confirmation").value;
		var eml=document.getElementById("email").value;
		var block=document.getElementById("hostelb").value;
		var usrpat=/(?=.*[\w]).{8,}/
		var pwt=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}$/  // ?= is called assertion (asserting that it's valid)
		var blk=/^[A-Ra-r]{1,1}$/
		var emv=/^\w+([\.]{1}\w+[@]{1})vitstudent.ac.in$/
		///^[0-9a-z-]+(\.[a-z0-9-]+)*[@]{1}(\.[a-z0-9]+)*[a-z0-9-]+(\.[a-z]{2,3})$/
		var res="";
		if(!(usrpat.test(username)))
		{
			document.getElementById("login").value='';
			res+="Invalid Username<br>";
			alert("Invalid Username! Username should contain minimum 8 characters");
		}
		if(!(pwt.test(password)))
		{
			document.getElementById("password").value='';
			res+="Invalid Password<br>";
			alert("Invalid Password! Password should contain minimum 10 characters, min 1 small character , min 1 capital character, min 1 digit");
		}
		if(!(password==confpassword))
		{
			document.getElementById("confirmation").value='';
			res+="Passwords are not the same<br>";
			alert("Passwords are not the same");
		}
		if(!(emv.test(eml)))
		{
			document.getElementById("email").value='';
			res+="Mail is wrong";
			alert("Mail is wrong");
		}
		if(!(blk.test(block)))
		{
			document.getElementById("hostelb").value='';
			res+="Invalid Block Name<br>";
			alert("Invalid Block Name! VIT hostel block names are in the range A-R");
		}

		document.getElementById("res").innerHTML=res;
	if(res.length>0){
		return false;
	}
	alert("Account Creation Successful");
	return true;
	}
	</script>
</head>
<body>    <!--onload="document.registration.username.focus();"-->
	<?php include('hmLSM.php')?>
<center>
	<div class="myform">
	<h1><strong>EDU-Connect - A Student-Centric E-Marketplace</strong></h1>
	<h2><strong>USER REGISTRATION</strong></h2>
	<form onsubmit="return validation()" action="RegDBLSM.php" method="POST">
		<label for="firstname">First Name</label>
		<input name="firstname" id="firstname" type="text" placeholder="John" required>
		<br><br>
		<label for="lastname">Last Name</label>
		<input name="lastname" id="lastname" type="text" placeholder="Martin" required>
		<br><br>
		<label for="gender">Gender</label>
		<select name="gender" id="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		<br><br>
        <label for="email">VIT-mail Id</label>
		<input name="email" id="email" type="text" placeholder="abc@xyz.com" required>
		<br><br>
        <label for="hostelb">Hostel Block</label>
		<input name="hostelb" id="hostelb" type="text" placeholder="A-R" required>
		<br><br>
        <label for="hostelr">Room Number</label>
		<input name="hostelr" id="hostelr" type="text" placeholder="room no." required>
		<br><br>
        <label for="login">Enter a Username</label>
		<input name="login" id="login" type="text" placeholder="a-z/1-9/*#" required>
		<br><br>
        <label for="password">Enter a Password</label>
		<input name="password" id="password" type="password" placeholder="a-z/1-9/*#" required><br><br>
        <label for="confirmation">Confirm your Password</label>
		<input name="confirmation" id="confirmation" type="password" placeholder="a-z/1-9/*#" required>
		<br><br>		
	<button name="submit" type="submit" value="Submit"><strong>REGISTER</strong></button>
		<strong><p id="res"></p></strong>
</form>
	<a href="LoginpageLSM.php">Already have an Account?</a>
</div>
</center>
</body>
</html>
