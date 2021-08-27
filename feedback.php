<?php

	include "connection.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
<style type="text/css">
	body{
		margin-top: 0;
		padding: 0;
		background :url(img/16.png);
		background-size: cover;
		background-position: top right;
	}

	/*navigation*/

nav{
	height: 72px;
	background:black;
	width: 100%;
	margin: 0;
	position: fixed;
	font-family: 'Roboto Condensed',sans-serif;
	font-size: 20px;
	display: flex;
	justify-content: space-between;
	padding: 0 16px 0 0;
	box-sizing: border-box;
	z-index: 100;
	text-decoration: none;
}
nav a{
	padding: 0 32px;
	color: gray;
	transition: 0.4s;

}

nav a:hover{
	text-decoration: none;
	color: red;

}
nav ul{
	display: flex;
	list-style: none;
	justify-content: space-around;
	align-items: center;
	height: 100%;
	margin: 0;
}
.active{
	color: red;
}
#logo-img{
	display: flex;
	height: 100%;
	background:#111;
	padding: 0 32px;
	align-items: center;
	color: white;
	transition: 0.4s;

}

#logo-img img{
	height: 72px;
}

#logo-img:hover{
	background:black;
}
#menu-icon{
	height: 100%;
	font-size: 28px;
	padding: 0 4px;
	color: #eee;
	display: none;
	align-items: center;
}
/*search icon*/

#search-icon{
	color: white;
	padding: 0 32px;
	cursor:pointer;
	transition: 0.4s;

}

#search-icon:hover{
	color: red;
}
/* feedback*/

	.contact-form{
		width: 85%;
		max-width: 600px;
		background: #f1f1f1;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		padding: 30px 40px;
		box-shadow: border-box;
		border-radius: 8px;
		text-align: center;
		box-sizing: 0 0 20px #000000b3;
		font-family: sans-serif;
	}
	.contact-form h1{
		margin-top: 0;
		font-weight: 200;
	}
	.textb{
		border-radius: 1px solid gray;
		margin: 8px 0;
		padding: 12px 18px;
		border-radius: 8px;
	}
	.textb label{
		display: block;
		text-align: left;
		color: #333;
		text-transform: uppercase;
		font-size: 14px;
	}
	.textb input {
		width: 100%;
		border: none;
		background :#c9c7af;
		outline: none;
		font-size: 18px;
		margin-top: 6px;
	}
	.textb textarea{
		width: 100%;
		border: none;
		background :#c9c7af;
		outline: none;
		font-size: 18px;
		margin-top: 6px;
	}
	.btn{
		display: inline-block;
		background :#826464;
		padding: 14px 0;
		color: black;
		text-transform: uppercase;
		cursor: pointer;
		margin-top: 8px;
		width: 100%;
	}

</style>
</head>
<body>

	<nav>
		<div id="logo-img">
			<a href="#">
				<img src="img/1.jfif" alt="sasi cafe logo-img">
			</a>
		</div>
		<div id="menu-icon">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
		<ul>
			<li>
				<a  href="index.php">Home</a>
			</li>
			<li>
				<a href="index.php">Recipes</a>
			</li>
			<li>
				<a href="index.php">Cafe</a>
			</li>
			<li>
				<a href="feedback.php">Feedback</a>
			</li>
			<li>
				<a href="index.php">About</a>
			</li>
			<li>
				<div id="search-icon">
					<i class="fa fa-search" ></i>
				</div>
			</li>
		</ul> 
	</nav>
	<!-- contact form-->
		<form name="feedback" action="" method="post">
		<div class="contact-form">
			<h2 class="section-heading">Feedback</h2>

			<div class="textb">
				<label>Name :</label>
				<input class="form-control" type="taxt" name="name" value="" placeholder="Enter your name ">
			</div>

			<div class="textb">
				<label>Email :</label>
				<input type="taxt" name="email" value="" placeholder="Enter your Email ">
			</div>

			<div class="textb">
				<label>Phone Number :</label>
				<input type="taxt" name="phone" value="" placeholder="Enter your phome number ">
			</div>

			<div class="textb">
				<label>Feedback :</label>
				<input type="taxt" name="feedback" value="" placeholder="add your comment ">
			</div>

			<input class="btn btn-default" type="submit" name="submit" style="color: black; width: 70px; height: 30px">
			</form>
		
		</div>
			<?php
			

				if(isset($_POST['submit']))
			{
				mysqli_query($db,"INSERT INTO `feedback` VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[feedback]');");

				?>
				<script type="text/javascript">
					alert("We got the feedback");
				</script>
				<?php

			}
			?>

</body>

</html>

