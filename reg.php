<?php include('db.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <script src = "check.js"> </script>

  <title>FaceMash</title>

  <link href="vendor\mdi-font\css\material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor\font-awesome-4.7\css\font-awesome.min.css" rel="stylesheet" media="all">
  <link rel="icon" type="image/png" href="images\icons\favicon.ico">

  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

	<br>
			<p id="reg" style = "font-size:20px">Create new account</p>

	<form class="action" action="reg.php" method="post" onsubmit="return checkEmail();" >
    <div class="row">
      <div class="column">
      <label>First name</label><br>
      <input type="text" name="fname" id='f' placeholder="First name"  value="<?php echo $ffname; ?>">
    </div>
    <div class="column">
			<label>Last name</label><br>
			<input type="text" name="lname" id='l' placeholder="Last name" value="<?php echo $llname; ?>">
		</div>
  </div>


    <div class="row">
      <div class="column">
			<label>Birthdate</label><br>
			<input type="date" name="Birthdate" id='B' value="<?php echo $Birthdate; ?>">
		</div>
    <div class="column">
			<label>Hometown</label><br>
			<select  name="Hometown" id='h' value="<?php echo $Hometown; ?>" >
        <option value=""></option>
        <option value="Cairo">Cairo</option>
        <option value="Alexandria">Alexandria</option>
        <option value="Elgiza">Elgiza</option>
        <option value="Ismailya">Ismailya</option>
        <option value="Aswan">Aswan</option>
        <option value="Auxor">Auxor</option>
        <option value="Sharm">Sharm</option>
        <option value="Matroh">Matroh</option>
        <option value="ELmnofeya">ELmnofeya</option>
        <option value="Elbehera">Elbehera</option>
     </select>
		</div>
  </div>

  <div class="row">
    <div class="column">
      <label>Username</label><br>
			<input type="text" name="username" id='N' placeholder="Username" value="<?php echo $name; ?>">
    </div>
    <div class="column">
      <label>Gender</label><br><br>
      <input type="radio" id="m" checked="checked" name="gender" value="Male">
      <label for="male">Male</label>
      <input type="radio" id="f" name="gender" value="Female">
      <label for="female">Female</label>
      <input type="radio" id="o" name="gender" value="Other">
      <label for="other">Other</label>
    </div>
  </div>

  <div class="row">
    <div class="column">
			<label>Email</label><br>
			<input type="email" name="email" id='E' placeholder="Email" value="<?php echo $em; ?>">
    </div>
    <div class="column">
			<label>Password</label><br>
			<input type="password" id='P' placeholder="Password" name="password">
    </div>
  </div>

		<?php  if (count($mistakes) > 0) : ?>
			<div id="mistake">
				<?php foreach ($mistakes as $error) : ?>
					<p><?php echo $error ?></p>
				<?php endforeach ?>
			</div>
		<?php  endif ?>

		<div>
			<button type="submit" onclick="return checkEmail();" name="sub1">Register</button>
		</div>
		<p>When you click on register you are accepting our terms.</p>
		<p>
			If you are sign in before, please <a href="log.php">Login</a>    or go to home page <a href="home.php"> Home </a>
		</p>
	</form>


</body>
</html>
