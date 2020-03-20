<!doctype html>
<html>
<head>
    <link rel="icon" type="image/png" href="life_of_pie.png"/>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css" media="screen">
<meta name="robots" content="noindex,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>EatWell's Admin Names</title>
    <style> 
    
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
    color:#4CAF50;
    background-color: white;
}
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
</style>
</head>
<body id="animate-area">
<?php

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
	$sql="SELECT username FROM admin";

	$result=mysqli_query($con,$sql);
    $post = array();
    $cnt=1;
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <h1 style="font-size: 20px;text-align: center;"><?php echo $cnt; ?><?php echo"-  "; ?><?php echo $row['username'];?></h1>
    <?php
    $cnt += 1;
    }

mysqli_free_result($result);

mysqli_close($con);
?>
<br>
<br>

<div style="text-align:center; font-family: Comic Sans MS;">
<a href="settings.html" class="button"><b>GO TO SETTINGS...</b></a>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>