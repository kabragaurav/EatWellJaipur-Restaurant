<!doctype html>
<html>
<head>
    <link rel="icon" type="image/png" href="user_icon.png"/>
<title>EatWell's Delete Admin Utility</title>
    <style> 
    html, body { margin: 0; padding: 0; }
        body { margin: 5px; background: #f2f2f2 url(img/bg.png) no-repeat top center; }
        ul.menu { margin: 0px auto 0 auto; width: 100%; }
         body{
            
    margin-top: 90px;
    margin-bottom: 200px;
    margin-right: 180px;
    margin-left: 250px;
    
        }
            h1 {
    color: indigo;
    font-family: Comic Sans MS;
    font-size: 100%;
}
         h2 {
    color: black;
    font-family: Comic Sans MS;
    font-size: 30px;
}
input[type=text] {
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 20px;
    border-radius: 15px;
    text-align: center;
}.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: center;
    border-radius: 20px;
}
.button:hover{
    color:blue;
    background-color: yellow;
    font-size: 20px;
}
    </style>
</head>
<body style="background-image: url(removeAdmin_bg.jpeg);background-repeat: no-repeat; background-size: cover;">
   <img  src="setting_icon.jpg" alt="Admin-Add" style="width:200px;height:200px;">
<form action="" method="POST">
<center><h2>Admin-Name:</h2> <input type="text" name="admin" placeholder="Name..."><br /><br /></center>
<input type="submit" value="--" name="submit" style="float:right;font-family:'Comic Sans MS'; border-radius:30px;font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" />
 <div style="text-align:center; font-family: Comic Sans MS;">
<a href="settings.html" class="button"><b>Go To Settings...</b></a>
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['admin'])) {
	$adm=$_POST['admin'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");

    $sql1="DELETE FROM employee WHERE username='$adm'";

    $result1=mysqli_query($con,$sql1);

     $sql2="DELETE FROM admin WHERE username='$adm'";

    $result2=mysqli_query($con,$sql2);
    

	if($result1 && $result2){
	echo "Employee deleted successfully!";
	} else {
	echo "The purpose could not be served!";
	}
} else {
	echo "Username is required!";
}
}
?>
</body>
</html>