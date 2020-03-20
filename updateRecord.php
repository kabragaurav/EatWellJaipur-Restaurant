<!doctype html>
<html>
<head>
    <link rel="icon" type="image/png" href="update_icon.jpg"/>
<title>EatWell's Update Utility</title>
    <style> 

#animate-area   { 
    width: 560px; 
    height: 400px; 
    background-image: url(bg_add.jpg);
    background-position: 0px 0px;
    background-repeat: repeat-x;

    animation: animatedBackground 5s linear infinite;
}
@keyframes animatedBackground {
    from { background-position: 100% 0; }
    to { background-position: 0 0; }
}
    html, body { margin: 0; padding: 0; }
        body { margin: 5px; background: #f2f2f2 url(img/bg.png) no-repeat top center; }
        ul.menu { margin: 0px auto 0 auto; width: 100%; }
        body{
            
    margin-top: 100px;
    margin-bottom: 200px;
    margin-right: 180px;
    margin-left: 300px;
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

     .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 20px;
    text-align: center;
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
    </style>
</head>
<body id="animate-area">
   <img  src="life_of_pie.png" alt="EatWell" title="EatWell• Ottawa, Canada •" style="width:550px;height:200px;">
    <!--<center><h1 style="border:solid DodgerBlue;background: powderblue">GET A FREE ACCOUNT!</h1></center>-->
<hr>
<center><h1 style="color:black;font-size: 30px;">The Update Page</h1></center><hr>
<form action="" method="POST"> 
<center><h2>Food-Name:</h2> <input type="text" name="food" placeholder="Food Name..."><br /></center>
<center><h2>Price(₹):</h2> <input type="number" name="cost" placeholder="The New Price(₹)..."><br /><br>   </center>
<input type="submit" value="UPDATE" name="submit" style="float:right;font-family:'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey; border-radius: 20px;" /><div style="text-align:center; font-family: Comic Sans MS; ">
<a href="member.php" class="button"><b>RETURN</b></a>
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
	$sql="UPDATE item SET price=$price WHERE food='$food'";

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