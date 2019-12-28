<?php require_once('Connections/book_model.php'); ?>
<?php

mysql_select_db($database_book_model, $book_model);
$query_Recordset1 = sprintf("SELECT * FROM book");
$Recordset1 = mysql_query($query_Recordset1, $book_model) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
if(!isset($_SESSION["arrayCaategory"])){
	$_SESSION["arrayCaategory"] = array("哲學類","宗教類","科學類","應用科學類","社會科學類","史地類","世界史地類","語言文學類","藝術類");
}
?>
<html>
	<head>
		<title>北科訂書系統-訪客</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<img src="images/Logo.jpg" alt="NTUT Online Book Store Logo">
					<nav id="nav" >
						<ul class="header-ul" style="margin-top: 10px" >
							<li><a href="homeBeforeSign.php">HOME</a></li>
							<li><a href="register.php">REGISTER</a></li>
							<li><a href="login.php" class="button">LOGIN</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2 style="margin: 0px 40px;">北科網路書店</h2>
					<div class="search-box">
						<div class="container1">
							<span class="search-icon"><i class="fa fa-search"></i></span>
      						<input type="search" id="search" style="border: none; border-radius: 10px; width: 350px; "/>
						</div>
					</div>
				</section>

			<!-- Main -->
					<div class="row" style="padding: 20px 20px;">
						<div class="col-2">
							<p style="margin: 0; color: #4b4b49; font-size: 30px; font-weight: bold; padding-left: 16px; padding-bottom: 10px;">TYPE</p>
							<ul style="list-style-type: none;">
								<li style="padding: 0;"><a href="#">總類</a></li>
								<li style="padding: 0;"><a href="#">哲學類</a></li>
								<li style="padding: 0;"><a href="#">宗教類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">科學類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">應用科學類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">社會科學類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">史地類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">世界史地類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">語言文學類</a></li style="padding: 0;">
								<li style="padding: 0;"><a href="#">藝術類</a></li style="padding: 0;">
							</ul>
						</div>
						<div class="col-10">
							<div class="row">
								<?php do { ?>
								<div class="col-4 col-12-narrower">
										<tr>
									<section class="box special">
										<span class="image featured"><img src="images/book1.jpg" alt="" /></span>
										<h3 class="book title"><?php echo $row_Recordset1["Name"]; ?></h3>
										<ul style="list-style-type: none;">
											<li class="book-infor-li">
												<p style="margin: 0; text-align:left;">作者：<?php echo $row_Recordset1["Author_name"]; ?>  </p>

											</li>
											<li class="book-infor-li"> 
												<p style="margin: 0; text-align:left;">賣家：<?php echo $row_Recordset1["Seller_id"]; ?> </p>
											
											</li>
											<li class="book-infor-li">
												<p style="margin: 0; text-align:left;">售價：<?php echo $row_Recordset1["Cost"]; ?> </p>
												
											
											</li>
											<li class="book-infor-li" style="display: flex;">
												<p style="margin: 0; text-align:left;">TYPE： </p>
													<?php
													echo $_SESSION["arrayCaategory"][$row_Recordset1["Category"]];
													?>
											</li>
										</ul>
									</section>
									</tr>
								</div>
								<?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
							</div>
						</div>
						
						
					</div>

				</section>


			<!-- Footer -->
				<footer id="footer">
					<section id="cta">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-1"></div>
								<div class="col-4">
									<img src="images/Logo.jpg" alt="" class="footer-img">
								</div>
								<div class="col-5 footer-text">
									<p>Designed by Team 10</p> 
									<p>蔣馨慧 林孜頤 郭家佑 陳姵文 李艾芸 劉聰池</p> 
								</div>
								<div class="col-2 ">
								</div>
							</div>	
	
					</section>
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