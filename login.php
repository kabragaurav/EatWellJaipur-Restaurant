<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="img/logo.png"/>
<title>User Login Page</title>
    <style> 
     html, body { margin: 0; padding: 0; }
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
            
    margin-top: 90px;
    margin-bottom: 200px;
    margin-right: 180px;
    margin-left: 250px;
    
        }
            h1 {
    color: indigo;
    font-family: Comic Sans MS;
    font-size: 100%;
    border:2px solid Tomato;
}
        h3 {
    color: indigo;
    font-family: Comic Sans MS;
    font-size: 100%;
}
 /*-------------------Restaurant Name -------------------------------*/
            #restaurant {
                animation-name: color;
                animation-duration: 25s;
                padding-top:30px;
                padding-bottom:30px;
                font-family:Times New Roman;
                border-radius: 15px 50px;
            }
            #r_name {
                font-size: 50px;
                text-align:center;
                font-weight:bold;
                color:#090;
                padding-bottom:5px;
                color:darkblue;
            }
            #addr {
                font-size:25px;
                font-weight:bold;
                text-align:center;
                color:black;
            }
            div {
                 animation-iteration-count: infinite;
            }
            @keyframes color {
                0% {
                    background-color: red;
                }
                25% {
                    background-color:teal;
                }
                50% {
                    background-color:blue;
                }
                75% {
                    background-color:yellow;
                }
                100% {
                    background-color: brown;
                }
            }
 input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 20px;
    border-radius: 15px;
    text-align: center;
}
/*----------------------SUBMIT BUTTON------------------------*/
input[type=submit] {
    width: 10em;  height: 2em;
}           
        
    </style>
</head>
<body style="background-image:url(acb.jpg);background-repeat: no-repeat; background-size: cover;">
     <div id = "restaurant">
            <div id = "r_name">EatWell</div>
            <div id = "addr">• Crystal Court Mall, Malviya Nagar Rd , Jaipur •</div>
        </div>
    <hr>
<div style="text-align:center; font-family: Comic Sans MS;">
<a href="index.html" class="button"><b>HOME</b></a>
</div>

<hr>   

<center><img src="captiveportal-user.png" alt="log person" width="60px" height="60px" title="Login Form" /></center>
<form action="" method="POST">

Username: <div style="text-align: center"><input type="text" name="user" placeholder="Your Username" ></div>
Password: <div style="text-align: center"><input type="password" name="pass" placeholder="Type Password"></div><br />
<input type="submit" value="LOGIN" name="submit" style="float:right; font-family:'Comic Sans MS'; border-radius:30px; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey;" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $con=mysqli_connect('localhost','root','') or die(mysqli_error());
    mysqli_select_db($con,'user_registration') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query)) 
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: member.php");
    }
    } else {
    	?>
	<p style="color: white;font-size: 18px; font-family: Algerian;"> <b>ERROR : The username or password found to be incorrect!</b></p>
	<?php
    }

} else {
	?>
	<p style="color: white;font-size: 18px; font-family: Algerian;"> <b>ERROR : All fields are mandatory!</b></p>
	<?php
}
}
?>
</body>
</html>