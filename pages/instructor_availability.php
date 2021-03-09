<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$dbname = "schoolmanagement";
$mysqli = new mysqli($host, $dbuser, $dbpass, $dbname);
if(!empty($_POST['fullname'])){
$fullname=$_POST['fullname'];
$result ="SELECT count(*) FROM instructor WHERE fullname=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$fullname);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
	echo "<span style='color:red'> Short Name Already Exist .</span>";
}
if(!empty($_POST['fullname'])){
$fullname=$_POST['fullname'];
$result ="SELECT count(*) FROM  instructor WHERE fullname=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$fullname);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
	echo "<span style='color:red'>  Short Name Already Exist .</span>";
}

if(!empty($_POST['specailization'])){
	$specailization=$_POST['specailization'];
	$result ="SELECT count(*) FROM instructor WHERE specailization=?";
	$stmt = $mysqli->prepare($result);
	$stmt->bind_param('s',$specailization);
	$stmt->execute();
	$stmt->bind_result($count);
	$stmt->fetch();
	$stmt->close();
	if($count>0)
		echo "<span style='color:red'>  Full Name Already Exist .</span>";
}

if(!empty($_POST['specailization'])){
	$specailization=$_POST['specailization'];
	$result ="SELECT count(*) FROM instructor WHERE specailization=?";
	$stmt = $mysqli->prepare($result);
	$stmt->bind_param('s',$specailization);
	$stmt->execute();
	$stmt->bind_result($count);
	$stmt->fetch();
	$stmt->close();
	if($count>0)
		echo "<span style='color:red'>  Full Name Already Exist .</span>";
}
?>

