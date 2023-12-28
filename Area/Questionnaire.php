<?php

echo '<!DOCTYPE HTML>';
$today= date("Y/m/d");
$name= $_POST['rsvp-name'];
$address= $_POST['rsvp-address'];

echo '
<html>
	<head>
		<title>Team Name</title>
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
						<h1>Team Name</h1>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="" class="logo">Team Name</a>
					</header>
					
				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<!-- Form -->
									<h2>Questionnaire</h2>

									<form method="post" action="form.php">
									<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<label for= "demo-name"> Name</label>
												<input type="text" name="demo-name" id="demo-name" value="'.$name.'" placeholder="" />
											</div>
											<div class="col-6 col-12-xsmall">
												<label for= "demo-date"> Date</label>
												<input type="datetime" name="demo-date" id="demo-date" value= "'.$today.'" placeholder="" />
											</div>
											<div class="col-12">
												<label for= "demo-address"> Address</label>
												<textarea name="demo-address" id="demo-address" placeholder="" rows="1">'.$address.'</textarea>
											</div>
											<fieldset>
												<label for= "at-adress">Does person still live at this address?</label>
												<!--<legend>Does person still live at this address?</legend>-->
												<div>
													<input type="radio" id="at-address-yes" name="at-address" value="yes">
													<label for="at-address-yes">Yes</label>
												</div>
												<div>
													<input type="radio" id="at-address-no" name="at-address" value="no">
													<label for="at-address-no">No</label>
												</div>
											</fieldset><br>
											<!-- Break -->
											<fieldset>
												<label for= "interest">Were they interested/Not interested?</label>
												<!--<legend>Were they interested/Not interested?</legend>-->
												<div>
													<input type="radio" id="interested" name="intereset" value="interested">
													<label for="interested">Interested</label>
												</div>
												<div>
													<input type="radio" id="not-interested" name="intereset" value="not-interested">
													<label for="not-interested">Not Interested</label>
												</div>
											</fieldset><br>
											<!-- Break -->
											<div class="col-12">
												<label for= "lesson">Bible Study # delivered (1-28):</label>
												<select name="lesson" id="lesson" placeholder= "Choose" required>
													<option value=>Choose</option>
													<option value="--">Did Not Leave One</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
												</select>
											</div>
											<!-- Break -->
											<div>
											<fieldset>
												<label for= "code">Did they get the QR Code?</label>
												<!--<legend><b>Did they get the QR Code?</b></legend>-->
												<div>
													<input type="radio" id="code-yes" name="code" value="yes">
													<label for="code-yes">Yes</label>
												</div>
												<div>
													<input type="radio" id="code-no" name="code" value="no">
													<label for="code-no">No</label>
												</div>
											</fieldset>
											</div>
											<!-- Break -->
											<div>
											<fieldset>
												<label for= "prayer">Did you have prayer?</label>
												<!--<legend>Did you have prayer?</legend>-->
												<div>
													<input type="radio" id="prayer-yes" name="prayer" value="yes">
													<label for="prayer-yes">Yes</label>
												</div>
												<div>
													<input type="radio" id="prayer-no" name="prayer" value="no">
													<label for="prayer-no">No</label>
												</div>
											</fieldset>
											</div>
											<!-- Break -->
											<div class="col-12">
												<label for= "demo-note"> Notes:</label>
												<textarea name="demo-note" id="demo-note" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Submit Form" class="primary" /></li>
													<!--<li><input type="reset" value="Reset" /></li>-->
												</ul>
											</div>
										</div>
									</form>
					</div>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>';
?>
