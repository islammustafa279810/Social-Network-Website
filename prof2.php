<?php
	session_start();

	if (!isset($_SESSION['username']) && !isset($_SESSION['fname']) && !isset($_SESSION['lname']) && !isset($_SESSION['Birthdate'])) {
		$_SESSION['msg'] = "You are not a member";
		header('location: log.php');
	}


	if (isset($_GET['return'])) {
		session_destroy();
		unset($_SESSION['username']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['Birthdate']);

		header("location: home.php");
		//header("location: reg.php");
	}


	if (isset($_GET['return1'])) {
		session_destroy();
		unset($_SESSION['username']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['Birthdate']);
		header("location: reg.php");
		//header("location: reg.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>FaceMash</title>

  <link href="vendor\mdi-font\css\material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor\font-awesome-4.7\css\font-awesome.min.css" rel="stylesheet" media="all">
	<link rel="icon" type="image/png" href="logo.png">

  <style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav style="background-color:blue;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="news.php?return='1'" class="navbar-brand" href="#">Logout</a>


    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="news.php">Home</a></li>
        <li><a href="#">Notifications</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="prof2.php"><span class="glyphicon glyphicon-user"></span> <?php  if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) : ?>
					<?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-6 well">
      <div class="well">
        <img src="islam.jpg" class="img-circle" height="150" width="150" alt="Avatar">
          <h5><?php  if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) : ?>
					<em><?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></em></h5>
          <h5><?php  if (isset($_SESSION['username'])) : ?>
          <em><?php echo $_SESSION['username']; ?></em></h5><br>
      </div>
      <div class="well">
        <p><a href="#About">About</a></p>
        <p>
          <h5><?php  if (isset($_SESSION['Birthdate'])) : ?>
            <em>Birthdate is <?php echo $_SESSION['Birthdate']; ?></em></h5>
          <h5><?php  if (isset($_SESSION['Hometown'])) : ?>
            <em>Hometown is <?php echo $_SESSION['Hometown']; ?></em></h5>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="well">
        <p><a href="#About">Friends</a></p>
        <p>


        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#Addanotherwebsite">Add another website</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-6">

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status: Feeling Blue</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">




        <div class="col-sm-3">
          <div class="well">
           <p>John</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bo</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php endif ?>
<?php endif ?>
<?php endif ?>
<?php endif ?>
<?php endif ?>

<footer class="container-fluid text-center">
  <p><a href="prof2.php">Reload page</p>

</footer>


</body>
</html>
