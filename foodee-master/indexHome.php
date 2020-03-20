<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="online_order_icon.png"/>
	<!------------------------fa fa------------------------------------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Online Order & Pre-Reservation</title>

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
    border-radius: 50px 15px;
}
.button:hover{
	background-color: white;
	color:#4CAF50;
}

.form-control {
  box-shadow: none;
  background: transparent;
  border: 2px solid rgba(0, 0, 0, 0.1);
  height: 44px;
  font-size: 18px;
  font-weight: 300;
  width : 600px;
  text-align: center;
  border-radius: 50px 15px;
   border-color: darkblue;
}

.form-control:active, .form-control:focus {
  outline: none;
  box-shadow: none;
  border-color: #fb6e14;
}
.btn-primary {
  background: #fb6e14;
  color: #fff;
  border: 2px solid #fb6e14;
  border-radius: 30px;
  font-size: 15px;

}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background: #f16104;
  border-color: #f16104 ;
  font-size:18px;
}

::placeholder { 
    color: darkblue;
}

	</style>
</head>
<body style="background-image: url('bg.jpg');background-repeat: no-repeat; background-size: cover;">
	<div style="text-align:center;">
		<a href="indexHome.php"><img src="../life_of_pie.png" title="Refresh the page..." width="250px"></a><br><br>
	
<a href="../index.html" class="button" style =" " ><i class="fa fa-home fa-fw fa-2x" title="Take Me Back To Home..."></i></a>
</div>
<center><h2 style="color:lightyellow;"><b>BOOKING FORM</b></h2></center>
<form action="" method="POST" >
    <fieldset style="text-align: center; border-radius: 50px 15px;  border-color: darkblue;">
<h2>Name:</h2> <input name="name" class="form-control" placeholder="Name" type="text" required>
<h2>email:</h2> <input name="email"  class="form-control" placeholder="Email" type="email" required >	
<h2>Date:</h2><input name="date"   class="form-control" placeholder="Date &amp; Time" type="date" required>
<h2># of Seats :</h2><input type="number" name="seats_count" class="form-control"  placeholder="E.g. 2" min="1" max="20" required>
<h2>Details:</h2><input name="msg" class="form-control"  placeholder="Occasion...best timing"><br / required><br>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
paypal.Button.render({
// Configure environment
env: 'sandbox',
client: {
sandbox: 'demo_sandbox_client_id',
production: 'demo_production_client_id'
},
// Customize button (optional)
locale: 'en_US',
style: {
size: 'small',
color: 'gold',
shape: 'pill',
},
// Set up a payment
payment: function (data, actions) {
return actions.payment.create({
transactions: [{
amount: {
total: '0.01',
currency: 'USD'
}
}]
});
},
// Execute the payment
onAuthorize: function (data, actions) {
return actions.payment.execute()
.then(function () {
// Show a confirmation message to the buyer
window.alert('Thank you for your purchase!');
});
}
}, '#paypal-button');
</script>

<input type="submit" class="btn btn-primary" value="RESERVE NOW!" name="submit"  />
            
        </fieldset>

</form>
<br>
<br>
<br><hr>
<center><h2 style="color:lightyellow;"><b>SUBSCRIPTION FORM</b> </h2></center>
<form action="" method="POST" onsubmit="alert('You are subscribed to our latest updates');">
     <fieldset style="text-align: center; border-radius: 50px 15px; border-color: darkblue;">
<h2>email:</h2> <input name="email"  class="form-control" placeholder="Enter email for exciting discounts & dishes..." type="email" required>	<br><br>
<input type="submit" class="btn btn-primary" value="GET UPDATES NOW!" name="Subscribe"  />
            
        </fieldset>

</form><hr>


    <!--Zendesk-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?62CU1umZqL59MAE9CZtJcyagPtSCOnTj";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
  <!--End-->
<br><br><br>
<center><h2 style="color:lightyellow;"><b>CANCEL BOOKING FORM</b></h2></center>
<form action="" method="POST" >
    <fieldset style="text-align: center; border-radius: 50px 15px;  border-color: darkblue;">
<h2>email:</h2> <input name="emailU"  class="form-control" placeholder="Email" type="email" required >	<br><br>

<input type="submit" class="btn btn-primary" value="CONFIRM CANCEL" name="submitU"  />
            
        </fieldset>

</form>
<br>
<br>
<br>

	<!----------------------------------------- PHP Code ------------------------------------------>
	<?php
	use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST["submit"])){
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['seats_count']) && !empty($_POST['date']) && !empty($_POST['msg'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$cnt = $_POST['seats_count'];
	$msg=$_POST['msg'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
	$temp_date = str_replace('/', '-', $date);
	$x = date('Y-m-d', strtotime($temp_date));
	$y = date('Y-m-d');
	if($x < $y)
	{
		?>
		<script type="text/javascript">alert("Wrong date entered...");</script>
		
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">alert("Details are in mail sent to you...");</script>
		
		<?php
		$query=mysqli_query($con,"SELECT * FROM reserve WHERE email='".$email."'");
		$numrows=mysqli_num_rows($query);
		$flag = 1;
		if($numrows==0)
		{
		$sql="INSERT INTO reserve(name,email,date,seat_count,msg) VALUES('$name','$email','$date','$cnt','$msg')";
		$result=mysqli_query($con,$sql);
		
		$sql3="SELECT date_,count FROM availability_table";
		$result3 = mysqli_query($con,$sql3);
		while($row = mysqli_fetch_assoc($result3))
		{
			if($row["date_"]==$date)
			{
				if($row["count"]>=20 || $row["count"]+$cnt>20)
				{
						$flag = 0;
						$result =0;
						?>
						<script type="text/javascript">alert("Table not available on the date...");</script>
						<?php
						break;
						
				}
			}
		}
		if($result && $flag){
		$sql2="INSERT INTO availability_table(date_,count) VALUES('$date',$cnt) ON DUPLICATE KEY UPDATE  count=count+$cnt";
		mysqli_query($con,$sql2);
		$sql3=mysqli_query($con,"SELECT * FROM availability_table WHERE date_='".$date."'");
		$row = mysqli_fetch_assoc($sql3);
		$prev=$row["count"];
		require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tango444charlie@gmail.com';                 // SMTP username
    $mail->Password = 'ashukibakloli';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('tango444charlie@gmail.com', 'Gaurav Kabra');
    $mail->addAddress($email);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your table has been booked on '. $date;
    $t = $prev-$cnt+1;
    $mail->Body    = 'Dear '.$name.'! Your table has been booked in EatWell Restaurant on date '.$date.'.You have reserved '.$cnt.' seat(s) at our restaurant. Details as provided by you are: '.$msg.'..In case you want to CANCEL/UPDATE details contact : gauravkabra12@gmail.com, Otherwise seat '.$t.' to seat '.
    $prev.' are booked for you already IN CASE WE RECEIVE ONLINE PAYMENT FROM YOU WITHIN 1 HOUR...';
    $mail->AltBody = 'Something went wrong! Please retry on EatWell Restaurant site...';

    $mail->send();
} catch (Exception $e) {
    echo 'Something went wrong! Please retry on EatWell Restaurant site...';
}
		} else {
		echo 'Something went wrong! Please retry on EatWell Restaurant site...';
		}
	} 
}
}
 else {
	echo "All fields are mandatory!";
}
}
if(isset($_POST["Subscribe"])){

if(!empty($_POST['email'])) {
	$email=$_POST['email'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
	$query=mysqli_query($con,"SELECT * FROM subscriptions WHERE email='".$email."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO subscriptions(email) VALUES('$email')";
	mysqli_query($con,$sql);
	} 
}
}


/*-----------------------CANCEL------------------------*/
if(isset($_POST["submitU"])){
if(!empty(!empty($_POST['emailU']))) {
	$emailU=$_POST['emailU'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'user_registration') or die("cannot select DB");
		?>
		<script type="text/javascript">alert("Your booking has been canceled...");</script>
		
		<?php
		$quer1="SELECT * FROM reserve WHERE email='$emailU'";
		$sql0=mysqli_query($con,$quer1);
		$row0 = mysqli_fetch_assoc($sql0);
		$count_deleted=$row0['seat_count'];
		$date=$row0['date'];
		$quer2="SELECT * FROM availability_table WHERE date_='$date'";
		$sql01=mysqli_query($con,$quer2);
		$row01 = mysqli_fetch_assoc($sql01);
		$count_recent=$row01['count'];
		$diff = $count_recent - $count_deleted;

		$sql="DELETE FROM reserve WHERE email='$emailU'";
		$result=mysqli_query($con,$sql);
		$sql3 = mysqli_query($con,"UPDATE availability_table SET count='$diff' WHERE date_='$date' AND '$diff'>=0");
		require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tango444charlie@gmail.com';                 // SMTP username
    $mail->Password = 'ashukibakloli';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('tango444charlie@gmail.com', 'Gaurav Kabra');
    $mail->addAddress($emailU);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your table has been canceled on '. $date;
    $mail->Body    = 'Your table has been canceled in EatWell Restaurant on date '.$date.'.In case you have any query, contact : gauravkabra12@gmail.com.';
    $mail->AltBody = 'Something went wrong! Please retry on EatWell Restaurant site...';

    $mail->send();
} catch (Exception $e) {
    echo 'Something went wrong! Please retry on EatWell Restaurant site...';
}
	} 
}
?>
</body>
</html>