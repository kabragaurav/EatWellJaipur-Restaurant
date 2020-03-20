<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/logo.png"/>
<title>Welcome Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> 
   
        body{
            
    margin-top: 25px;
    margin-bottom: 200px;
    margin-right: 180px;
    margin-left: 300px;
    background-color: Orange ;
    color: palevioletred;
    font-family: Comic Sans MS;
    font-size: 100%
    
        }
            h2 {
    color: indigo;
    font-family: Comic Sans MS;
    font-size: 100%;
}
        h1 {
    color: indigo;
    font-family: Comic Sans MS;
    font-size: 100%;
    text-align: right;
    padding-right: 0px;
    margin-right: 0px;
    margin-top: 0px;
    padding-top: 0px;
}      

/*----------Username and logout----------------------------*/
#container h1,
#container p {
    display: inline;
    vertical-align: top;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    line-height: 28px;
}
/*---------------------AVATAR-------------------*/
        .avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
/*------------------icon bar-------------------------------------*/
.icon-bar {
    width: 100%;
    background-color: #555;
    overflow: auto;
}

.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 36px;
}
.icon-barX a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 36px;
}

.icon-bar a:hover {
    background-color: #000;
    border-radius: 15px 50px;

}
.icon-barX a:hover {
    background-color: red;
}
.icon-barW a:hover {
    background-color: darkblue;
}
.icon-barV a:hover {
    background-color: #8ec3eb;
}
.icon-barU a:hover {
    background-color: #db9833;
}
.icon-barA a:hover {
    background-color: olive;
}
.icon-barB a:hover {
    background-color: teal;
}
.icon-barC a:hover {
    background-color: rosybrown;
}
.icon-barD a:hover {
    background-color: slateblue;
}

.active {
    background-color: #4CAF50;
    border-radius: 15px 50px;
}
div.align-right {
    text-align: right;
    color:darkgreen;
    font-size: 30px;
}
</style>
</head>

<body style="background-image:url(login_bg.jpg);background-repeat: no-repeat; background-size: cover;">
    <div style="background-color:yellow; font-family: arial; font-size: 40px; color: blueviolet; border-radius: 15px 50px;">
            <center>EatWell Restaurant</center>
        </div>
    <div id="container">
        <img src="avatar.png" alt="Avatar" class="avatar" align="right">
        <div class="align-right"
    <h1 title="Current Username"><?=$_SESSION['sess_user'];?>
</div>
</div>
    <body>
        <div class="icon-bar">
  <a class="active" href="displayDB.php" title="Payment"><i class="fa  fa-rupee"></i></a> 
  <div class="icon-barW">
  <a href="insert.php" title="Insert"><i class="fa fa-plus"></i></a>  
  </div>
  
<div class="icon-barB">
    <a href="updateRecord.php" title="Do An Update"><i class="fa fa-pencil"></i></a>  
</div> 
  <div class="icon-barX">
  <a href="remove.php" title="Remove Items"><i class="fa fa-trash " ></i></a> 
</div>
 <div class="icon-barV">
    <a href="settings.html" title="Settings"><i class="fa fa-cogs"></i></a>  
</div> 
</div>

<div>
<div class="icon-bar">
    <div class="icon-barA">
  <a  href="add.php" title="Money Back!"><i class="fa fa-handshake-o"></i></a>
</div>
  <div class="icon-barB"> 
  <a href="earning.php" title="Grand Earning"><i class="fa  fa-bar-chart"></i></a> 
</div>
  <div class="icon-barC">
  <a href="calculator.html" title="Calculator"><i class="fa fa-calculator"></i></a> 
</div>
  <div class="icon-barD">
  <a  title="Print Page" onClick="window.print()"><i class="fa fa-print"></i></a>  
  </div>
  <div class="icon-barU">
  <a  href="login.php" title="Logout & Return Home"><i class="fa fa-power-off"></i></a>
  </div>
</div>
</div>
<!-- --------------------------------PHP CODE INSERTION ------------------------------------------------------------------>
<?php
    if(isset($_POST['SubmitH'])) 
    {
        $aFood = $_POST['food'];
        if(empty($aFood))
        {
        	echo "Customer returns with nothing &#9785";
        } 
        else 
        {
            $N = count($aFood);
            for($i=0; $i < $N; $i++)
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "user_registration";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $var = $_SESSION['sess_user'];

                $sql = "INSERT INTO temp(food,Username,Date) VALUES('$aFood[$i]','$var',NOW())";
                if ($conn->query($sql) === TRUE);

                $conn->close();
            }
        }
    }
    
    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
    $db = mysqli_connect("localhost", "root", "", "user_registration");
?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" >
<?php
$db=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($db,'user_registration') or die("cannot select DB");
$q1="SELECT food,price FROM item";
$result=mysqli_query($db,$q1);
$post = array();
while($row = mysqli_fetch_assoc($result))
{
?>
    <br><input type="checkbox" name="food[]" value="<?php echo $row['food']; ?>"><?php echo $row['food']; ?><?php echo "..................." ?><?php echo $row['price'] ;?><br>
<?php
}

mysqli_free_result($result);

mysqli_close($db);

    ?>
<input type="submit" name="SubmitH" value="Submit" style="float:right;font-family:'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey;border-radius: 30px;">
</form>
</body>
</html>
<?php
}
?>