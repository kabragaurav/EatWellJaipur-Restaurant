<!doctype html>
<html>
<head>
    <link rel="icon" type="image/png" href="user_icon.png"/>
<title>EatWell's Insert Admin Utility</title>
    <style> 
    html, body { margin: 0; padding: 0; }
        body { margin: 5px; background: #f2f2f2 url(img/bg.png) no-repeat top center; }
        ul.menu { margin: 0px auto 0 auto; width: 100%; }
         .button {
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
        body{
            
    margin-top: 20px;
    margin-bottom: 200px;
    margin-right: 180px;
    margin-left: 200px;
    
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
input[type=text], input[type=password] {
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 20px;
    border-radius: 15px;
    text-align: center;
}
    </style>
</head>
<body style="background-image: url(addAdmin_bg.jpg);background-repeat: no-repeat; background-size: cover;">
   <img  src="addEmp.png" alt="Admin-Add" style="width:200px;height:200px;">
<form action="" method="POST">
<center><h2>Admin-Name:</h2> <input type="text" name="admin" placeholder="Admin..."><br /></center>
<center><h2>Password:</h2> <input type="password" name="pass" placeholder="Access..."><br /><br>    </center>
<input type="submit" value="++" name="submit" style="float:right;font-family:'Comic Sans MS'; border-radius:30px;font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" />
    <div style="text-align:center; font-family: Comic Sans MS;">
<a href="settings.html" class="button"><b>Go To Settings...</b></a>
            
        </fieldset>

</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['admin']) && !empty($_POST['pass'])) {
	$adm=$_POST['admin'];
	$pss=$_POST['pass'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
	$sql1="INSERT INTO admin VALUES ('$adm','$pss')";

	$result1=mysqli_query($con,$sql1);

    $sql2="INSERT INTO employee VALUES ('$adm')";

    $result2=mysqli_query($con,$sql2);

	if($result1 && $result2){
	echo "Record updated successfully!";
	} else {
	echo "The purpose could not be served!";
	}
} else {
	echo "All fields are mandatory!";
}
}
?>
</body>
</html>