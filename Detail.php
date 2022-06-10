<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Montaga&family=Poppins:wght@400;500;600&display=swap');
		
		
		.navbar-brand {
			font-family: Lobster;
			font-size: 40px;
			color: #fff;
		}

		.search-box{
			position: absolute;
			top: 50%;
			left: 80%;
			transform: translate(-50%,-50%);
			background: orange;
			height: 50px;
			border-radius: 30px;
			padding: 10px;

		}
		.search-box:hover > .search-txt{
			width: 240px;
			padding: 0 6px;

		}
		.search-btn{
			color: #e84118;
			float: right;
			width: 30px;
			height: 30px;
			border-radius: 50%;
			background: #2f3640;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.search-txt{
			border: none;
			background: none;
			outline: none;
			float: left;
			padding: 0;
			color: #fff;
			font-size: 16px;
			transition: 0.4s;
			line-height: 30px;
			width: 0px;
		}



		.carousel-inner .item img {
		margin: auto;
		}
		
		.Search{
			margin-top:10px;
			float: right;
			margin-right: 125px;
		}
			.image-detail img {
		    margin-top: 5%;
		    width: 100%;
		    align-items: center;
		    border-radius: 100%;
		    margin-bottom: 30px;
		    animation: app-logo-spin infinite 20s linear
			}
			@keyframes app-logo-spin {
			    from {
			        transform: rotate(0deg);
			    }
			    to {
			        transform: rotate(360deg);
			    }
			}
	</style>
</head>
<body>
	<!--Header-->
	<header class="header" id="header">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="IndexT.php">Shop Toys</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				
				<ul class="nav navbar-nav">
					<li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> HOME</a></li>
					<li><a href="IndexT.php"> <span class="glyphicon glyphicon-cd"></span> TOYS</a></li>
					<li><a href="IndexT.php"> <span class="glyphicon glyphicon-list-alt"></span> GENRES</a></li>
					<li><a href="IndexT.php"> <span class="glyphicon glyphicon-star"></span> CONTACT</a></li>
				</ul>
				<div class="search-box">
					<input class="search-txt" type="text" name="" placeholder="Type to search">
					<a class="search-btn" href="SearchT.php"><span class="glyphicon glyphicon-search"></span></a>
				</div>
				<ul class="nav navbar-nav navbar-right">

					<li><a href="LoginT.php"><span class="glyphicon glyphicon-log-in"></span>  LOG IN</a></li>
					<li><a href="LoginT.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<banner class>
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<!--<li data-target="#myCarousel" data-slide-to="4"></li>-->
				</ol>
				<!-- wrapper for slides-->
				<div class="carousel-inner">
					<div class="item active">
						<img src="Image-Toys/B1.jpg" alt="PS6" style="width:100%; height: 500px;">
					</div>
					<div class="item">
						<img src="Image-Toys/B2.jpg" alt="PS9" style="width:100%; height: 500px;">
					</div>
					<div class="item">
						<img src="Image-Toys/B3.jpg" alt="PS8" style="width:100%; height: 500px;">
					</div>
					<div class="item">
						<img src="Image-Toys/B4.jpg" alt="PS4" style="width:100%; height: 500px;">
					</div>
					<!--<div class="item">
						<img src="Image-Song/PS5.jpg" alt="PS5" style="width:100%; height: 500px;">
					</div>-->
				</div>

				<!--  Left and right controls-->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</banner>

	<div class="container">
		<div class="row">
			<?php
		
			$connect = mysqli_connect('localhost','root','','shoptoys');
			if (!$connect)
				{
					echo ("Failure Connect!");
				}
			$id = $_GET["id"];
			$sql = "SELECT * FROM product WHERE PID = {$id}"; /* SAI */
			$result = mysqli_query($connect, $sql);
			while($row= mysqli_fetch_array($result)){
				$id = $row['PID'];
				?>
				<div class="col-md-6" style="text-align: left;">
					<h2> Name of Product: <?php echo $row['PName'];?> </h2>
					<h3>Price: <?php echo $row['Price'];?> </h3>
					<h4>Description about Product: <?php echo $row['Description']?></h4>
					

				</div>  
				<!-- cho ảnh quay tròn-->
				<div class="image-detail">
				<div class="col-md-6">
					<img src="Image-Toys/<?php echo $row['Img'] ?>" style = "width: 500px;height: 500px;">
				</div> 
			</div>
				<?php
			}

		?>
	</div>
</div> <!-- and songs.SingerID = singer.Photo -->
</body>
</html>