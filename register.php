<?php require_once('Connections/book_model.php'); ?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO `user` (Password, Account, Name, `E-mail`, Phone, Usertype) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
                       $_POST['Password'],
                       $_POST['Account'],
                       $_POST['Name'],
                       $_POST['E-mail'],
                       $_POST['Phone'],
                       '1');

  mysql_select_db($database_book_model, $book_model);
  $Result1 = mysql_query($insertSQL, $book_model) or die(mysql_error());

  $insertGoTo = "home.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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
		<link rel="stylesheet" href="assets/css/register.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">Alpha</a> by HTML5 UP</h1>
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
						<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
							<div class="row gtr-50 gtr-uniform">
										<div class="col-2">

										</div>
										<div class="col-1" style="align-self:center">
											<p>帳號</p> 
										</div>
										<div class="col-5">
											<input type="text" name="Account" id="Account" value="" />
										</div>
                                        <div class="col-4">

										</div>
								<br>
								<div class="col-2">

								</div>
								<div class="col-1" style="align-self:center">
									<p>密碼</p> 
								</div>
								<div class="col-5">
									<input type="password" name="Password" id="Password" value="" />
								</div>
								<div class="col-4">

								</div>
						        <br>
                                <div class="col-2">

								</div>
								<div class="col-1" style="align-self:center">
									<p>名字</p> 
								</div>
								<div class="col-5">
									<input type="text" name="Name" id="Name" value="" />
								</div>
								<div class="col-4">

								</div>
								<br>
								<div class="col-2">

								</div>
								<div class="col-1" style="align-self:center" >
									<p>電子郵件</p> 
								</div>
								<div class="col-5">
									<input type="text" name="E-mail" id="E-mail" value="" />
								</div>
								<div class="col-4">

								</div>
								<br>
								<div class="col-2">

								</div>
								<div class="col-1" style="align-self:center">
									<p>電話號碼</p> 
								</div>
								<div class="col-5">
									<input type="text" name="Phone" id="Phone" value="" />
								</div>
								<div class="col-4">

								</div>
								<br>
								<div class="col-3">

								</div>
								<div class="col-5">
									<ul class="actions special">
										<li><input type="submit" name="button" id="button" value="送出" /></li>
									</ul>
								</div>
								<div class="col-4">

								</div>
							</div>
							<input type="hidden" name="MM_insert" value="form1">
								
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