<?php require_once('Connections/book_model.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}
if(!isset($_SESSION["error"])){
	$_SESSION["error"] = 0;
}
if (isset($_POST['Account'])) {
  $loginUsername=$_POST['Account'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "home.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_book_model, $book_model);
  
  $LoginRS__query=sprintf("SELECT Account, Password FROM `user` WHERE Account = '%s' AND Password='%s'",
   $loginUsername, $password); 
   
  $LoginRS = mysql_query($LoginRS__query, $book_model) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
	$_SESSION["error"] = 0;
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
	$_SESSION["error"] = 1;
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/login.css" />
	</head>
    
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Alpha</a> by HTML5 UP</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Layouts</a>
								<ul>
									<li><a href="generic.php">Generic</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="elements.php">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Contact Us</h2>
						<p>Tell us what you think about our little operation.</p>
					</header>
					<div class="box">
						<form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
									<input type="text" name="Account" id="name" value="" placeholder="Account" />
						        <br>
								<div class="col-12">
									<input type="text" name="Password" id="subject" value="" placeholder="Password" />
								</div>
                                <?php if($_SESSION["error"] == 1){ ?>
                                <br>
								<div class="col-12">
									帳號或密碼輸入錯誤
								</div>
                                <?php } ?>
							</div>
								<ul class="actions special">
									<li><input type="submit" name="button" id="button" value="登入" />
	  <input type="hidden" name="id" id="id" /></li>
	                                <li><a href="register.php"><input type="button" value="註冊"></a></li>
								</ul>
								
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>