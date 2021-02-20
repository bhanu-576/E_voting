<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/global.css">
    <title>Document</title>
</head>
<body>
  	<!--Alert box-->
  <div class="alert" id="alert"></div>
  <!-- Login Panel-->
    <div class="container">
        <section id="content">
          <form id = "login-form" >
            <h1>Login Form</h1>
            <div>
              <input type="enr" placeholder="Enrollment no." id="enrollment" name="enroll" maxlength = "12">
            </div>
            <div>
              <input type="email" placeholder="email" name="email" id="email">
            </div>
            <div>
              <input type="submit"  nama = "submit" id="login-btn">
            </div>
          </form><!-- form -->
          
        </section><!-- content -->
      </div><!-- container -->
      	<!-- Footer -->
    <footer class="footer">
		&copy; <span id="copy-year"></span> E-Voting
			<span class="float-right">&lt;/&gt; by Bhanu Sharma</span>
  </footer>
  <script src="js/login.js"></script>
	<script src="js/global.js"></script>
	<!-- <script src="js/main.js"></script> -->
</body>
</html>