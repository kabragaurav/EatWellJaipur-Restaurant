<!doctype html>
<html>
<head>
    <link rel="icon" type="image/png" href="life_of_pie.png"/>
<title>EatWell's Drop Utility</title>
    <style> 
    
#animate-area   { 
    width: 560px; 
    height: 400px; 
    background-image: url(bg_windmill.png);
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
        body{
            
    margin-top: 100px;
    margin-left: 450px;
    background-color: aqua ;
    color: palevioletred;
    font-family: Comic Sans MS;
    font-size: 100%
    
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
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 20px;
}
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
    </style>
</head>
<body id="animate-area">
   <img  src="life_of_pie.png" alt="EatWell" title="EatWell• Ottawa, Canada •" style="width:550px;height:200px;">
<hr>
<center><h1 style="color:black;font-size: 30px;">The -- Page</h1></center><hr>
<form action="" method="POST"> 
<center><h2 style="color:black;">Food-Name:</h2> <input  style="text-align: center;border-radius: 20px;" type="text"sname="food" placeholder="Food Name..."><br /><br /></center>
<input type="submit" value="--" name="submit" style="float:right;font-family:'Comic Sans MS';border-radius: 30px; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" /><div style="text-align:center; font-family: Comic Sans MS;">
<a href="member.php" class="button"><b>RETURN</b></a>
<br>
<br>
<br>
<br>
<br>
<br>
            
        </fieldset>

</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['food'])) {
	$food=$_POST['food'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
	//$sql="INSERT INTO item VALUES ('$food',$price)";
    $sql="DELETE FROM item WHERE food='$food'";

	$result=mysqli_query($con,$sql);


	if($result){
	echo "Item deleted successfully!";
	} else {
	echo "The purpose could not be served!";
	}
} else {
	echo "Name of food-item is required!";
}
}
?>
</body>
</html>