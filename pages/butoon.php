<!DOCTYPE html>
<html>
<head>
	<title>Student Record Management System</title>

<style>
body{
	background-image: url(laptop.jpg);
	background-repeat: no-repeat;
	height: 455px;
	width: 455px;
	text-decoration: none;
	background-size: 100%;
}
.example_a {
   border-radius: 4px;
   background:rgba(60,60,60,.80);
   box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
   border: 1px;
   color: black;
   text-align: center;
   text-transform: uppercase;
   font-size: 22px;
   padding: 20px;
   transition: all 0.4s;
   cursor: pointer;
   margin: 5px;
   width: 50.3%;
   width: 200px;
   display: inline-block;
   
 }
 .example_a span {
   cursor: pointer;
   display: inline-block;
   position: relative;
   transition: 0.4s;
   width: 50.3%;
 }
 .example_a span:after {
   content: '\00bb';
   position: absolute;
   opacity: 0;
   top: 0;
   right: 120px;
   width: 50.3%;
   transition: 0.5s;
 }
 .example_a:hover span {
   padding-right: 90px;
   width: 50.3%;
 }
 .example_a:hover span:after {
   opacity: 1;
   right: 0;
   width: 50.3%;
 }
 .example_b {
   border-radius: 4px;
   background:rgba(60,60,60,.80);
   box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
   border: 1px;
   color: white;
   text-align: center;
   text-transform: uppercase;
   font-size: 22px;
   padding: 20px;
   transition: all 0.4s;
   cursor: pointer;
   margin: 5px;
   width: 200px;
   display: inline-block;
   
 }
 .example_b span {
   cursor: pointer;
   display: inline-block;
   position: relative;
   transition: 0.4s;
   width: 50.3%;
 }
 .example_b span:after {
   content: '\00bb';
   position: absolute;
   opacity: 0;
   top: 0;
   right: 120px;
   width: 50.3%;
   transition: 0.5s;
 }
 .example_b:hover span {
   padding-right: 100px;
 
 }
 .example_b:hover span:after {
   opacity: 1;
   right: 0;
   width: 50.3%;
 }
  .example_c {
   border-radius: 4px;
   background:rgba(60,60,60,.80);
   box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
   border: 1px;
   color: white;
   text-align: center;
   text-transform: uppercase;
   font-size: 22px;
   padding: 20px;
   transition: all 0.4s;
   cursor: pointer;
   margin: 5px;
   width: 200px;
   display: inline-block;
   
 }
 .example_c span {
   cursor: pointer;
   display: inline-block;
   position: relative;
   transition: 0.4s;
   width: 50.3%;

 }
 .example_c span:after {
   content: '\00bb';
   position: absolute;
   opacity: 0;
   top: 0;
   right: 120px;
   width: 50.3%;
   transition: 0.5s;
 }
 .example_c:hover span {
   padding-right: 90px;
  
 }
 .example_c:hover span:after {
   opacity: 1;
   right: 0;
   width: 50.3%;
 }
.button_center {
	margin-top: 180px;
	margin-left: 550px;
}
.button_title{
	border-radius: 4px;
    color: white;
    text-align: center;
    text-transform: uppercase;
    font-size: 20px;
    padding: 15px;
    cursor: pointer;
    margin: 1px;
    height: 50px;
    width: 220px;
    display: inline-block;
    margin-top: -220px;
     background:rgba(60,60,60,.80);
}
</style>
</head>
<body>

	
<div class="button_center">
	<div class="button_title">
	STUDENT RECORD MANAGEMENT SYSTEM
	</div>
<br><br><br>
	<div class="button_cont" align="center">
		<a class="example_a" href="login.php" target="_blank" rel="nofollow"><span>Admin</a>
	</div>
<br>
	<div class="button_cont" align="center">
		<a class="example_b" href="logins.php" target="_blank" rel="nofollow"><span>Instructor</a>
	</div>
<br>
	<div class="button_cont" align="center">
		<a class="example_c" href="loginss.php" target="_blank" rel="nofollow"><span>Students</a>
	</div>
</div>
</body>
</html>
