<!doctype html>
<html>
<head>
    <link rel="icon" type="image/png" href="life_of_pie.png"/>
<title>EatWell's Insert Utility</title>
    <style> 
    
#animate-area   { 
    width: 560px; 
    height: 400px; 
    background-image: url(bg_cloud.png);
    background-position: 0px 0px;
    background-repeat: repeat-x;

    animation: animatedBackground 5s linear infinite;
}
@keyframes animatedBackground {
    from { background-position: 0 0; }
    to { background-position: 100% 0; }
}
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
    float: left;
}
.button:hover{
    color:#4CAF50;
    background-color: white;
}
        body{
            
    margin-top: 100px;
    margin-bottom: 200px;
    margin-left: 450px;
    background-color: aqua ;
    color: palevioletred;
    font-family: Comic Sans MS;
    font-size: 100%;

    
        }
            h1 {
    color: indigo;
    font-family: Comic Sans MS;
    font-size: 100%;
}
         h2 {
    color: white;
    font-family: Comic Sans MS;
    font-size: 30px;
}
input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 20px;
    text-align: center;
    border-radius: 40px;
}
    </style>
</head>
<body id="animate-area">
   <img  src="life_of_pie.png" alt="EatWell" title="EatWell• Ottawa, Canada •" style="width:550px;height:200px;">
    <!--<center><h1 style="border:solid DodgerBlue;background: powderblue">GET A FREE ACCOUNT!</h1></center>-->
<hr>
<center><h1 style="color:white;font-size: 30px;">The ++ Page</h1></center><hr>
<form action="" method="POST">
<div style="text-align: center;"><h2>Food-Name:</h2> <input type="text" name="food" placeholder="Food Name..."><br /></div>
<div style="text-align: center;"><h2>Price(₹):</h2> <input type="number" name="cost" placeholder="Price(₹)..."><br /><br></div>
<input type="submit" value="++" name="submit" style="float:right;font-family:'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey; border-radius: 30px;" />
<div style="text-align:center; font-family: Comic Sans MS;">
<a href="member.php" class="button"><b>RETURN</b></a>
<br>
<br>
<br>
<br>
<br>
<br>

</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['food']) && !empty($_POST['cost'])) {
	$food=$_POST['food'];
	$price=$_POST['cost'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
	$sql="INSERT INTO item VALUES ('$food',$price)";

	$result=mysqli_query($con,$sql);


	if($result){
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