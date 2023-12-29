<?php

include 'qcon.html';

$server="localhost";
$username="appUser";
$password="password";
$database = "database";

/* Create database  connection with correct username and password*/

$connect = mysqli_connect($server,$username,$password,$database);

/* Check the connection is created properly or not */
if(!$connect)
        die( "Connection error:" .$mysqli_connect_error());

//variables from form
$Name= $_POST['demo-name'];
$today= $_POST['demo-date'];
$address= $_POST['demo-address'];
$located= $_POST['at-adress'];
$interest= $_POST['interest'];
$lesson= $_POST['lesson'];
$qrc= $_POST['code'];
$pray= $_POST['prayer'];
$note= $_POST['demo-note'];
//$up5date= $_POST['lesson'];
//$update= $lesson;

/*
$sql=  "INSERT INTO AFDistro.questions (`date`, `name`, `address`, `still_at_address`, `interest`, `Bible_study_lesson`, `qr_code`, `prayer`, `notes`) VALUES ('".$today."', '".$Name."', '".$address."', '".$located."', '".$interest."', '".$lesson."', '".$qrc."', '".$pray."', '".$note."')";
//echo $sql.'         ';
mysqli_query($connect, $sql);
//mysqli_free_result($sqlquery);
//mysqli_close($connect);
//$update= $lesson;

//$connect2 = mysqli_connect($server,$username,$password,$database);
$update= $_POST['lesson'];
*/
/*
if ($lesson == "Did Not Leave One"){
	//Do Nothing:
}else*/if ($update < "28") {
	//$update++;
	$sql=  "INSERT INTO AFDistro.questions (`date`, `name`, `address`, `still_at_address`, `interest`, `Bible_study_lesson`, `qr_code`, `prayer`, `notes`) VALUES ('".$today."', '".$Name."', '".$address."', '".$located."', '".$interest."', '".$lesson."', '".$qrc."', '".$pray."', '".$note."')";
	//$sql= "UPDATE AFDistro.info SET `Lesson`= '".$update."' WHERE name = '".$Name."'"; //"UPDATE AFDistro.info SET `Lesson` = '".$lesson."' WHERE Name= '".$Name."'";/* AND Address= '".$address."'";*/
	mysqli_query($connect, $sql);
	/*if (mysqli_query($connect, $sqlChange)) {
 		 echo "Record updated successfully";
	} else {
  		echo "Error updating record: " . mysqli_error($connect);
	}*/
}else {
	// Do Nothing if equal to or greater than 28;
}

?>





