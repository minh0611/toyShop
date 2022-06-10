<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
		.carousel-inner{
			width: 100%;
			height: 25%;
			margin: auto;
		}
		#wrapper{
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background-image: url(Image-Song/LoginBG.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		#form-register{
			width: 400px;
			background: rgba(0, 0, 0, 0.8);
			flex-grow: 1;
			padding: 30px 30px 50px;
			box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
		}
		.form-heading{
			font-size: 35px;
			color: white;
			text-align: center;
			margin-bottom: 30px;
			font-family: 'Lobster', sans-serif;
		}
		.form-group{
			border-bottom: 1px solid #fff;
			margin-top: 15px;
			margin-bottom: 20px;
			display: flex;
		}
		.form-group i{
			color: #fff;
			font-size: 35px;
			padding-top: 5px;
			padding-right: 10px;

		}
		.form-input{
			background: transparent;
			border: 0px;
			outline: 0px;
			color: #fff;
			flex-grow: 1;
		}
		.form-input::placeholder{
			color: #f5f5f5;
		} 	
		.form-submit{
			background: transparent;
			border: 1px solid #fff;
			color: #fff;
			width: 100%;
			text-transform: uppercase;
			padding: 6px 10px;
			transition: 0.25s ease-in-out;
			margin-top: 30px;
		}		
		.form-submit:hover{
			border: ;
		}
	</style>
</head>
<body>
	<header class="header" id="header">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="IndexTS.php">Tune Source</a>
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
					<li><a href="IndexTS.php"> <span class="glyphicon glyphicon-cd"></span> SONGS</a></li>
					<li><a href="IndexTS.php"> <span class="glyphicon glyphicon-list-alt"></span> GENRES</a></li>
					<li><a href="IndexTS.php"> <span class="glyphicon glyphicon-star"></span> ARTIST</a></li>
				</ul>
				<div class="search-box">
					<input class="search-txt" type="text" name="" placeholder="Type to search">
					<a class="search-btn" href="SearchTS.php"><span class="glyphicon glyphicon-search"></span></a>
				</div>
				<ul class="nav navbar-nav navbar-right">

					<li><a href="LoginTS.php"><span class="glyphicon glyphicon-log-in"></span>  LOG IN</a></li>
					<li><a href="LoginTS.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div id="wrapper">
		<div>
			<form id="form-register" method="post" action="">
				<h1 class="form-heading">REGISTER</h1>
				<a href="Register.php">Log-in now!</a>
				<div class="form-group">
					
					<!-- <input type="text" name="userid" class="form-input" placeholder="UserID">
				</div>
				<div class="form-group"> -->
					
					<input type="text" name="username" class="form-input" placeholder="Username">
				</div>
				<div class="form-group">
					
					<input type="text" name="fullname" class="form-input" placeholder="Full Name">
				</div>
				<div class="form-group">
					
					<input type="text" name="mail" class="form-input" placeholder="E-Mail">
				</div>
				<div class="form-group">
					
					<input type="text" name="password" class="form-input" placeholder="Password">
				</div>
				
				<input  type="submit" name="register" value="REGISTER" class="form-submit">
			</form>
			<?php
		    //Ket noi theo Mysqli procedural
		    $connect = mysqli_connect('localhost','root','','tunesource');
		    if(!$connect){  # dấu ! là chỉ khi nào thất bại thì mới thông báo còn thành công thì k
		        echo "Failure Connect!";
		    }
		    // Nếu click vào nút register thì mới thực hiện
		    if(isset($_POST['register'])){
		       /* $userID = $_POST['serID'];*/
		        $username = $_POST['username'];
		        $password = $_POST['password'];
		        $fullname = $_POST['fullname'];
		        $mail = $_POST['mail'];
		    $sql = "INSERT INTO users VALUES('', '$username', '$password', '$fullname', '$mail')";
		    $result = mysqli_query($connect, $sql);
		    if($result){
		        echo "<script> alert('SUCCESSFUL!')</script>";
		        echo"<script> window.open('LoginTS.php','_self') </script>";
		    }
		    else{
		        echo "<script> alert('FAILURE!')</script>";
		    }
		    }
		    ?>
		</div>
	</div>
</body>
</html>