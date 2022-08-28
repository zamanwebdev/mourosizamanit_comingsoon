<?php 
	include 'config.php';
	include 'Database.php';
?>
<?php
	$db = new Database();
	if (isset($_POST['submit'])) 
	{
		$name = mysqli_real_escape_string($db->link, $_POST['name']);
		$email = mysqli_real_escape_string($db->link, $_POST['email']);
		$skill = mysqli_real_escape_string($db->link, $_POST['skill']);
		if ($name == '' || $email == '' || $skill == '') 
		{
			$error = "Field must not be Empty!";
		}
		else
		{
			$query = "INSERT INTO tbl_user(name, email, skill) VALUES('$name', '$email', '$skill')";
			$create = $db->insert($query);
		}
	}

?>
<?php
if (isset($error)) 
{
	echo "<span style='color:red'>".$error."</span>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mourosi Zaman IT Development Limited.<</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('images/MZ.JPG');">
		<div class="wsize1">
			<p class="txt-center p-b-23">
				<i class="zmdi zmdi-card-giftcard cl0 fs-60"></i>
			</p>

			<h3 class="l1-txt1 txt-center p-b-22">
				Coming Soon
			</h3>

			<p class="txt-center m2-txt1 p-b-67">
				Our website is under construction, Please Wait And Watch. 😃 
			</p>
			<p id="demo"></p><br>
			
			
			

			<div class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 days"><p id="day"></p></span>
					<span class="m2-txt2">Days</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>
				
				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 hours"><p id="hour"></p></span>
					<span class="m2-txt2">Hours</span>
				</div>

				<span class="l1-txt2 p-b-22 respon2">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 minutes"><p id="minute"></p></span>
					<span class="m2-txt2">Minutes</span>
				</div>

				<span class="l1-txt2 p-b-22">:</span>

				<div class="flex-col-c-m wsize2 m-b-20">
					<span class="l1-txt2 p-b-4 seconds"><p id="second"></p></span>
					<span class="m2-txt2">Seconds</span>
				</div>
			</div>

			<form class="flex-w flex-c-m contact100-form validate-form p-t-70" action="create.php" method="post">
				
					
				
				
				


				</input>
				<div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
					<input class="s1-txt1 placeholder0 input100" type="text" name="email" placeholder="Email Address">
					<span class="focus-input100"></span>
				</div>

				<input class="flex-c-m s1-txt1 size2 how-btn trans-04 where1" type="submit" name="submit" value="Notify Me">
				</input>
			</form>			
		</div>
	</div>

	<!-- Real Countdown Timer Code Start -->
	

	<script>
	// Set the date we're counting down to
	var countDownDate = new Date("Sep 24, 2022 24:00:00").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();
	    
	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;
	    
	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	  // Output the result in an element with id="demo"
	  /*document.getElementById("demo").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";*/
	  // For Day Identify
	  document.getElementById("day").innerHTML = days;
	  // For Hour Identify
	  document.getElementById("hour").innerHTML = hours;
	  // For Minute Identify
	  document.getElementById("minute").innerHTML = minutes;
	  // For Second Identify
	  document.getElementById("second").innerHTML = seconds;

	    
	  // If the count down is over, write some text 
	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("demo").innerHTML = "Time Up";
	  }
	}, 1000);
	</script>
	<!-- Real Countdown Timer Code End -->




	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!-- 	<script>
	$('.cd100').countdown100({
		/*Set Endtime here*/
		/*Endtime must be > current time*/
		endtimeYear: 0,
		endtimeMonth: 0,
		endtimeDate: "<p id="day"></p>",
		endtimeHours: "<p id="hour"></p>",
		endtimeMinutes: 0,
		endtimeSeconds: 0,
		timeZone: "" 
		// ex:  timeZone: "America/New_York"
		//go to " http://momentjs.com/timezone/ " to get timezone
	});
</script> -->
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
