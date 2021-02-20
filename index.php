<!DOCTYPE html>
<html lang="en">
<head>		
	<title>E-Voting in vrindavan</title>	
	<meta name = "description" content = "E Voting - a simple way of Voting">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1.0">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
    <title>E-Voting in vrindavan</title>
</head>
<body>
	<!--Alert box-->
	<div class="alert" id="alert"></div>
    <!-- CONTACT FORM-->
	<div class="contact">

			<h5>Register for E-Voting</h5>
			<form class="form-inline" id="form" enctype="multipart/form-data">
				<div class="container">
			<div class="pdf"> 
				<h6>Select the permission letter:</h6>
				<input type="file" id="myfile" name="image" class="form-control" ></div>
				<div class= "name">
				<input id="name" type="name" name="name" class="sty1" placeholder=" " >
			<label for="name" class="f-1">ENTER NAME</label>
		</div>
			<div class="enroll">
				<input type="enr" id="enrollm"  name="enrollment" class="sty2" placeholder=" " maxlength ="12" >
				<label for="enroll">Enrollment no.</label>
			</div>
				<div class ="party">
				<input id="part" type="text" name="party" placeholder=" "  >
				<label for="party">Party name</label>	
			</div>
				<div class="aadhar">
				<input id="aadh" type="tel" name="aadhar" placeholder=" " >
				<label for="aadhar">Aadhar no.</label>	
			</div>
	
			<button class="but" id = "b-btn" type="submit" name="submit" value="Register">Register Here</button>
		</div>
			
			</form>
			<h6 class = "login">If you Want to vote click here for <a href = "login.php">Login</a></h6>
		</div>
	
	</div>
	<!-- Footer -->
    <footer class="footer">
		&copy; <span id="copy-year"></span> E-Voting
			<span class="float-right">&lt;/&gt; by Bhanu Sharma</span>
	</footer>
	<script src="js/global.js"></script>
	<script src="js/main.js"></script>
</body>
</html>	