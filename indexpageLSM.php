<?php
	session_start();
	if(!isset($_SESSION["username"])){
            header('location: LoginpageLSM.php');
        }
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDU-Connect - A Student-Centric E-Marketplace</title>
	<link rel="stylesheet" href="styleLSM.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed&display=swap" rel="stylesheet">

	<style>

		.container{
			padding-top: 190px;
		}
		.whitetext{
		border-radius: 0.5rem;
		height:auto;
		padding-bottom: 25px;
		}
		#phead{
			border:2px solid yellow;
			text-align: center;
			box-sizing:border-box;
			margin:5px;
			border-width: 5px;
			background-color: lightyellow;
		}


		h1,p,.shp{
			font-family: 'Sofia Sans Semi Condensed', sans-serif; 
			height: auto;
			padding-bottom: 5px;
		}

		body{
			margin-bottom:200px;
		}
		.shp{
			font-size: 70px;
			text-align: center;
			margin:auto;
			width:50%;
		}
		#head{
			background-color:lightyellow;
			color:black;
			border:2px solid black;
		}
		button{
			border: 2px blue;
			background-color: yellow;
			font-size: 22px;
			width:90px;
			height:auto;
			border: 7px solid yellow;
		    margin-bottom: 10px;
		    font-weight: bold;
		    text-decoration: none;
		    font-family: 'Sofia Sans Semi Condensed', sans-serif; 
		}
		.prodimgs{
			margin-left: 100px;
			}

		.img1,.img2,.img3,.img4{
			display:inline-block;
			margin: 90px;}

		.container2{
			background-color:lightgreen;
		}

	</style>

</head>
<body>
	<?php include('hmLSM.php')?>

	<div id="content">
		<div id="bg" class=" ">
			<div class="container">
			<div class="whitetext" id="banner_content">
				<h1 id="head">One stop for all hosteller's needs</h1>
				<p id="phead"><b>We bridge the gap between the Seller and Customer</b></p><br>
				<button><a href="productsLSM.php" id="shopnow">Shop Now</a></button>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="shp">BUY / SELL / RENT PRODUCTS</div>
<div class="container2">
	<div class="prodimgs">
		<div class="img1">
			<a href="productsLSM.php"><img src="https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/best-sales-books-4.jpg?width=595&height=400&name=best-sales-books-4.jpg" alt="" style="width:150px; border-radius:8px;">
				<p><strong>Books</strong></p>
			</a>
		</div>
		<div class="img2">
			<a href="productsLSM.php"><img src="https://www.analyticsinsight.net/wp-content/uploads/2022/05/Top-10-Best-Robotics-Project-Ideas-for-Engineering-Students-in-2022.jpg" alt="" style="width:150px; border-radius:8px;">
				<p><strong>Projects</strong></p>
			</a>
		</div>
		<div class="img3">
			<a href="productsLSM.php"><img src="https://news.mit.edu/sites/default/files/styles/news_article__image_gallery/public/images/202207/hardware-825262.jpeg?itok=3LtjSTkb" alt="" style="width:150px; border-radius:8px;">
				<p><strong>Hardware</strong></p>
			</a>
		</div>
		<div class="img4">
			<a href="productsLSM.php"><img src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p2/2018/06/26/Pictures/_3cfb8286-7929-11e8-b46a-be68571826e9.JPG" alt="" style="width:170px; border-radius:8px;">
				<p><strong>Hostel Essentials</strong></p>
			</a>
		</div>
</div>
</div>

</body>
</html>