<?php
$team='Bandera';
$count= 1; // used for number addresss in display
$server= "local";
$username="user";
$password="pw";
$database = "AFDistro";

/* Create database  connection with correct username and password*/

$connect = mysqli_connect($server,$username,$password,$database);

/* Check the connection is created properly or not */
if(!$connect)
    die( "Connection error:" .$mysqli_connect_error());

$EnglishArray = array(
	"1" => "1 - Is There Anything Left You Can Trust?",
	"2" => "2 - Did God Create the Devil?",
	"3" => "3 - Rescue from Above",
	"4" => "4 - A Colossal City In Space",
	"5" => "5 - Keys for a Happy Marriage",
	"6" => "6 - Written in Stone!",
	"7" => "7 - The Lost Day of History",
	"8" => "8 - The Ultimate Deliverance",
	"9" => "9 - Purity & Power!",
	"10" => "10 - Are The Dead Really Dead?",
	"11" => "11 - Is The Devil In Charge Of Hell?",
	"12" => "12 - 1000 Years of Peace",
	"13" => "13 - God's Free Health Plan",
	"14" => "14 - Is Obedience Legalism?",
	"15" => "15 - Who is the Antichrist?",
	"16" => "16 - Angel Messages From Outer Space.",
	"17" => "17 - God Drew The Plans.",
	"18" => "18 - Right on Time! Prophetic Appointments Revealed!",
	"19" => "19 - Case Closed",
	"20" => "20 - The Mark of the Beast.",
	"21" => "21 - The USA in Bible Prophecy.",
	"22" => "22 - The Other Woman",
	"23" => "23 - The Bride of Christ",
	"24" => "24 - Does God Inspire Astrologers and Psychics?",
	"25" => "25 - In God we Trust?",
	"26" => "26 - A Love That Transforms",
	"27" => "27 - No Turning Back",
	"28" => "Graduated");

$SpanishArray = array(
	"1" => "1 - ¿Quedará algo en qué confiar?",
	"2" => "2 - ¿Acaso fue Dios quien creó al Diablo?",
	"3" => "3 - Rescate celestial",
	"4" => "4 - Una Ciudad Colosal en el Espacio.",
	"5" => "5 - La clave para un matrimonio feliz",
	"6" => "6 - ¡Escrito en piedra!",
	"7" => "7 - No Sea Engañado",
	"8" => "8 - Un sublime acontecimiento",
	"9" => "9 - ¡Pureza y poder en el Señor!",
	"10" => "10 - ¿Están Los Muertos Completamente Muertos?",
	"11" => "11 - ¿Está el Diablo a cargo del Infierno?",
	"12" => "12 - Mil Años de Paz",
	"13" => "13 - El Plan de Salud de Dios",
	"14" => "14 - ¿Es la obediencia un acto de legalismo?",
	"15" => "15 - ¿Quién es el Anticristo?",
	"16" => "16 - Mensajes Angelicales del Espacio Exterior",
	"17" => "17 - Dios Trazó los Planes",
	"18" => "18 - ¡Justo a tiempo! ¡Acontecimientos proféticos nos son revelados!",
	"19" => "19 - ¡Un caso que está cerrado!",
	"20" => "20 - La Marca de la Bestia",
	"21" => "21 - Los Estados Unidos de América en la Profecía Bíblica",
	"22" => "22 - La Otra Mujer",
	"23" => "23 - La Esposa de Cristo",
	"24" => "24 - ¿Inspira Dios a los Astrólogos y a los Psíquicos?",
	"25" => "25 - ¿Es que en realidad confiamos en Dios?",
	"26" => "26 - El amor que nos transforma.",
	"27" => "27 - No Hay Vuelta Atrás",
	"28" => "Graduated");

$KidsArray = array(
	"1" => "1 - The Treasure Map",
	"2" => "2 - Slaying the Dragon",
	"3" => "3 - Journey Through the Stars",
	"4" => "4 - The Code of the King",
	"5" => "5 - Only One Lifeboat",
	"6" => "6 - A Day with the King",
	"7" => "7 - God’s Super Food",
	"8" => "8 - Whistling Through A Graveyard",
	"9" => "9 - Journey Through the Sea",
	"10" => "10 - A Kingdom of Gold",
	"11" => "Graduated",
	"28" => "Graduated");

echo '
<html>
	<head>
		<title>'.$team.'</title>
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
						<h1>'.$team.'</h1>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="" class="logo">'.$team.'</a>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<h2>'.$team.'</h2>
								</header>';
/* change Bandera to the team you need for the page*/
$result = mysqli_query($connect, "select name, address, lesson, language, gmap, form from info where team = 'Bandera Rd'" ,MYSQLI_USE_RESULT);
while ($row= mysqli_fetch_assoc($result)){
	$name= $row['name'];
	$address= $row['address'];
	$lesson= $row['lesson'];
	$language= $row['language'];
	$gmap= $row['gmap'];
	$form= $row['form'];
	if ($language== 'English'):
		$study= $EnglishArray[$lesson];
	elseif ($language== 'Spanish'):
		$study= $SpanishArray[$lesson];
	else:
		$study= $KidsArray[$lesson];
	endif;
	echo '
	<p>'.$count.'. Name: '.$name.'<br> &nbsp;&nbsp;&nbsp; Address: '.$address.'<br> &nbsp;&nbsp;&nbsp; Lesson: '.$study.' 
										<form method= "post" action="note.php"><input type="hidden" name="rsvp-name" id="rsvp-name" value="'.$name.'" /><input type="hidden" name="rsvp-address" id="rsvp-address" value="'.$address.'" /><input type="submit" value="Notes"/>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$gmap.'" class="button medium">MAP</a>&nbsp;&nbsp;&nbsp;&nbsp;<br><br><a href="'.$form.'" class="button medium">Questionnaire</a></li>&nbsp;&nbsp;&nbsp;&nbsp;</form>
		';
	$count++;
}
						echo'	</article>
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
