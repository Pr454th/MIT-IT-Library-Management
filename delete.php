<!DOCTYPE html>
<html lang="en">
<head>
<title>home page
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	    <link rel="stylesheet" href="assets/css/style.css">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family:  Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #555555;
  margin-left: auto;
  margin-right: auto;
	width:70%;

}

.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
	float:right;
}

.topnav a:hover {
	background-color:#34757b;
}

.content {
  background-color: #f1f1f1;
  padding: 10px;
  width: 70%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.footer {
  background-color: #555555;
  padding: 10px;
  width: 70%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  padding: 20px 20px 20px 20px;
}
.header {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
a:link {
  color: rgb(173, 171, 171);
  text-decoration: none;
}

a:visited {
  color: rgb(173, 171, 171);
  text-decoration: none;
}
.container {
  padding: 16px;
}
form {border: 3px solid #34757b;}

input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(15, 207, 118);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.content {
  background-color: #34757b;
  padding: 10px;
  width: 60%;
  display: block;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
  margin-right: auto;
  border-radius:25px;
}
</style>
</head>
<body style="background-color:#f1f1f1;">
<div class="header">
    <img src="anna univ logo.png" alt="annaunivlogo" style="width:100% " >
</div>
<div class="topnav">
  <a href="sign in.php" style="color: white; border-left:2px solid rgb(213, 237, 253);">Sign in</a>
  <a href="sign up.php" style="color: white;border-left:2px solid rgb(213, 237, 253) ; ">Sign up</a>
  <a href="home page.html" style="color: white; border-right:2px solid rgb(213, 237, 253);float: left;">Home</a>
</div>
<div>
  <h1 style="text-align: center;font: size 30px;">Information Technology Department Library Portal</h1>
</div>
<div>
	<h1 style="text-align: center;font-size: 21px">Confirm the book you want to delete with the book id.</h1>
</div>
<?php
$var=$_GET['val'];

$split=explode('/',$var);
$conn = mysqli_connect("localhost","root","","test");
?>
<?php


if(isset($_POST['submit'])){
$book_id=$_POST['id'];
include('config.php');
if($book_id==""){
echo "<script>alert('Invalid Book ID'); location.href='adminDashboard.php';</script>";
}
if($book_id!=""){
$sql="delete from ".$split[1]." where Book_id=".$book_id;
}
if(mysqli_query($con,$sql)){
	echo "<script>alert('Deletion Successfull'); location.href='adminDashboard.php';</script>";
}
else{
echo "<script>alert('Deletion Unsuccessful'); location.href='adminDashboard.php';</script>";
}
}

?>
<div class="content">
<form name="form" method="post">

<div class="container">
  <label for="id"><b>Book ID:</b></label><span id="staffid" style="color:red"></span>
  <input type="text" value=<?php echo $split[0]; ?> name="id">
  <button type="submit" name="submit">Delete</button>
</div>
</form>
</div>
<br> <br>

    <div class="footer" style="color: white;" >
   <b style="font-size:large  ;"></b>
   <ul class="l" style="text-decoration: none">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Quick links:</h3>
                        <ul>
                            <li><a href="https://www.annauniv.edu/">Anna University</a></li>
                            <li><a href="https://acoe.annauniv.edu/">ACOE</a></li>
                            <li><a href="https://www.aukdc.edu.in/">AUKDC</a></li>
                            <li><a href="https://www.mitindia.edu/en/">MIT</a></li>
                        </ul>
                        </div>
 <div class="col-sm-4 col-md-3 item">
                        <h3></h3>
                        <ul>
                            
                        </ul>
                    </div>

 <div class="col-sm-4 col-md-3 item">
                        <h3></h3>
                        <ul>
                            
                        </ul>
                    
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contact Details:</h3>
                        <ul>
                            <li><a>Telephone:2252 6020</a></li>
                            <li><a>Email: aucmitit@gmail.com</a></li>
                            <li><a>Department Of IT, MIT, Anna University, Chennai-600044</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>