<?php require_once('Connections/book_model.php'); ?>
<?php
mysql_select_db($database_book_model, $book_model);
$select = sprintf("SELECT * from book WHERE Book_id='%s'",$_POST["Book_id"]);
printf($select);
$sql = mysql_query($select);
$row_select = mysql_fetch_assoc($sql);

if(!isset($_SESSION["arrayCaategory"])){
	$_SESSION["arrayCaategory"] = array("哲學類","宗教類","科學類","應用科學類","社會科學類","史地類","世界史地類","語言文學類","藝術類");
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
		<title>北科訂書系統-書籍資訊</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/register.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/book-information.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		
	</head>
    <script src="jquery-3.2.1.min.js"></script>
    <script>
	var id = <?php echo $_POST["Book_id"]; ?>;
    function insert_cart(){
		$.post("insert_cart.php", { Book_id:a } );
		document.location("cart.php");
	}
	</script>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header" class="alt" style="background:#444; height:70px;">
				<img src="images/Logo.jpg" alt="NTUT Online Book Store Logo">
				<nav id="nav">
					<ul class="header-ul" style="margin-top: 10px">
						<li><a href="home.php">HOME</a></li>
						<li>
							<a href="#" class="icon solid fa-angle-down">PERSONAL INFO</a>
							<ul>
								<li><a href="shelves.php">上下架</a></li>
									<ul>
										<li><a href="write-book.php">編輯書籍資訊</a></li>
										<li><a href="#">上下架書籍</a></li>
									</ul>
								<li><a href="cart.php">購物車</a></li>
								<li><a href="userinfo.php">個人資料</a></li>
							</ul>
						</li>
						<li><a href="homeBeforeSign.php" class="button">LOGOUT</a></li> <!-- 跳message 按下後跳轉頁面 -->
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>書籍資訊</h2>
						<!-- <p>將您所需上傳的書籍填入資料</p> -->
					</header>
				</section>
				<section class = "container">
					<form method="post" action="#" style="margin:0 ;">
						<div class="box row">
							<div class="col-5 content" style=" padding: 0px; align-self:center">
								<img id="output" style="width: 330px;" src=""/>
							</div>
							<div class="col-7 content">
								
									<div class="row gtr-50 gtr-uniform">
										<div class="col-1">	</div>
										<div class="col-3" style="align-self:center">
											<p class="content-title">ISBN：</p> 
										</div>
										<div class="col-8">
											<p>
												<?php echo $row_select["ISBN"] ?>
											</p >
										</div>

										<br>

										<div class="col-1">		</div>
										<div class="col-3" style="align-self:center">
											<p class="content-title">書本名稱：</p> 
										</div>
										<div class="col-8">
											<p>
												<?php echo $row_select["Name"] ?>
											</p>
										</div>

										<br>

										<div class="col-1"> </div>
										<div class="col-3" style="align-self:center">
											<p class="content-title">作者名稱：</p> 
										</div>
										<div class="col-8">
											<p>
												<?php echo $row_select["Author_name"] ?>
											</p>
										</div>

										<br>

										<div class="col-1"> </div>
										<div class="col-3" style="align-self:center" >
											<p class="content-title">出版社：</p> 
										</div>
										<div class="col-8">
											<p>
												<?php echo $row_select["Publisher"] ?>
											</p>
										</div>

										<br>

										<div class="col-1"> </div>
										<div class="col-3" style="align-self:center">
											<p class="content-title">類別：</p> <!--記得改這裡!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
										</div>
										<div class="col-8">
											<p>
<<<<<<< HEAD
												<?php echo $_SESSION["arrayCaategory"][$row_select["Category"]]; ?>
=======
												<?php echo $row_select["類別"] ?>
>>>>>>> ba46d20eeb9672f532029e3ff92f5e858f68ad47
											</p>
										</div>

										<br>

										<div class="col-1"> </div>
										<div class="col-3" style="align-self:center">
											<p class="content-title">書本價格：</p>
										</div>
										<div class="col-8">
											<p>
<<<<<<< HEAD
												<?php echo $row_select["Cost"] ?>
=======
												<?php echo $row_select["cost"] ?>
>>>>>>> ba46d20eeb9672f532029e3ff92f5e858f68ad47
											</p>
										</div>

										<br>

										<div class="col-1"> </div>
										<div class="col-3" style="align-self:center">
											<p class="content-title">書本描述：</p>
										</div>
										<div class="col-8">
											<p>
												<?php echo $row_select["Description"] ?>
											</p>
										</div>

									</div>
								
							</div>
							<br>
							
							<div class="col-12">

								<div class="col-6"> </div>
								<div class="col-6">
									<ul class="actions special">
										<li><input type="button" onclick="insert_cart()" value="加入購物車" /></li>
									</ul>
								</div>
							</div>
						</div>
					</form>
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