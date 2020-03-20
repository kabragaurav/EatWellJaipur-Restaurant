<!DOCTYPE html>
<html>
<title>EatWell Return!</title>
 <link rel="icon" href="return_ico.png">
<style type="text/css">

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
}
.button:hover{
    color:#4CAF50;
    background-color: white;
}

     .buttonR {
    background-color: white;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 20px;
    text-align: center;
    color:#4CAF50;
}

 body{
            
    margin-top: 155px;
    margin-left: 70px;
}
</style>
<body style="background-image: url(add_bg.jpg)">

<h1><b><center>Congrats! You get this much amount(₹) back :)</center><b></h1>
<center><button class="button"  onclick="myFunction()">READY??</button></center>

<p id="money"></p>

<script>
function myFunction() {
    window.alert(Math.floor((Math.random() * 10) + 5));
}
</script>
 <div style="text-align:center; font-family: Comic Sans MS;">
    <br>
    <br>
<a href="member.php" class="buttonR"><b>RETURN</b></a>
<br>
</body>
</html>
