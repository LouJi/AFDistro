<?php
$Name= $_POST['rsvp-name'];
$Address= $_POST['rsvp-address'];

$server= "local";
$username="user";
$password="pw";
$database = "AFDistro";

/* Create database  connection with correct username and password*/

$connect = mysqli_connect($server,$username,$password,$database);

/* Check the connection is created properly or not */
if(!$connect)
    die( "Connection error:" .$mysqli_connect_error());

$result = mysqli_query($connect, 'select date, notes from questions where address = "'.$Address.'" ORDER BY date desc',MYSQLI_USE_RESULT);

echo'
<html>
	<head>
		<title>Notes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Notes</h1>
						<p>'.$Name.' | |<br />
						 '.$Address.'</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="" class="logo">Notes</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Note -->
							<section class="posts">';
while ($row= mysqli_fetch_array($result)){
       $date= $row['date'];
       $note= $row['notes'];
	if ($note== ''){
		echo' <article>
                        <header>
                          	<span class="date"><b>'.$date.'</b></span>
                        </header>
                        <p></P>
                        <p>There are no notes for this home.</p>
                </article>';}
	else{
	echo '
		<article>
			<header>
				<span class="date"><b>'.$date.'</b></span>
			</header>
			<p></P>
			<p>'.$note.'</p>
		</article>';
}
}
 
echo '
							</section>
						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>



			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>';

?>

