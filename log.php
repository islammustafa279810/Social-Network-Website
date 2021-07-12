<?php include('db.php') ?>

<!DOCTYPE html>
<html>
<head>

	<script src = "check.js"> </script>
	<title>FaceMash</title>

	<link href="vendor\mdi-font\css\material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="vendor\font-awesome-4.7\css\font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="icon" type="image/png" href="images\icons\favicon.ico">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

<br>
		<p id="log" style = "font-size:20px">Login</p>

	<form class="action" action="log.php" method="post" onsubmit="return checkEmail2();" >

		<div>
			<label>Email</label>
			<input type="email" name="email" id='E' >
		</div>
		<div>
			<label>Password</label>
			<input type="password" id='P' name="password">
		</div>

		<?php  if (count($mistakes) > 0) : ?>
			<div id="mistake">
				<?php foreach ($mistakes as $error) : ?>
					<p><?php echo $error ?></p>
				<?php endforeach ?>
			</div>
		<?php  endif ?>

		<div>
			<button type="submit" onclick="return checkEmail2();" name="sub2">Login</button>
		</div>
		<p>
			If you are not register before please <a href="reg.php">Register</a> or go to home page <a href="home.php"> Home </a>
		</p>
	</form>


</body>
</html>
