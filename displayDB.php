<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="dollar_img_addr_bar.png"/>
    <title>Payment</title>
    <style type="text/css">
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
.active {
    background-color: #4CAF50;
}
.icon-bar a:hover {
    background-color: #000;
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
div.align-right {
    text-align: right;
    color:darkgreen;
    font-size: 30px;
}
    </style>
</head>
<body style="background-image:url(payment_bg.jpg);background-repeat: no-repeat; background-size: cover;">

    <div class="icon-bar">
  <a class="active" href="member.php" title="Return to Welcome Screen"><i class="fa fa-check-square-o"></i></a> 
  <div class="icon-barU">
  <a  href="login.php" title="Logout & Return Home"><i class="fa fa-home"></i></a>
  </div>
  <div class="icon-barV">
  <a  title="Print Page" onClick="window.print()"><i class="fa fa-print"></i></a>
</div>
  <div class="icon-barW">
  <a href="calculatorX.html" title="Calculator"><i class="fa fa-calculator"></i></a>   
  </div>
  <div class="icon-barX">
   <p style="color:white;font-size: 20px">EatWell Restaurant</p>
</div>  
</div>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";
$amount=0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create connection
$cost = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($cost->connect_error) {
    die("Connection failed: " . $cost->connect_error);
} 

$sql = "SELECT food FROM temp";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo  $row["food"]."<br>";
        $query = "SELECT price FROM item WHERE food IN ('".$row['food']."')";
        $res = $cost->query($query);
        if (!$res) {
          trigger_error('Invalid query: ' . $cost->error);
        }
        if ($res->num_rows > 0) {
          $row = mysqli_fetch_row($res); 
        $amount = $amount + $row[0];
      }
    }
} else {
    echo "0 results"."<br>";
}
echo "================================================================================"."<br>";
echo "<br>"."THE PAYMENT AMOUNT IS : $".$amount;
$connector = new mysqli($servername, $username, $password, $dbname);
if ($connector->connect_error) {
    die("Connection failed: " . $connector->connect_error);
} 
$ques = "INSERT INTO earning(Earning,Time) VALUES ($amount,NOW())";
$fin = $connector->query($ques);
if (!$fin) {
    trigger_error('Invalid query: ' . $connector->error);
}
$del = "DELETE FROM temp";
$delta = $conn->query($del);
if (!$delta) {
    trigger_error('Invalid query: ' . $conn->error);
}
$conn->close();
$cost->close();
$connector->close();
?>
</body>
</html>
