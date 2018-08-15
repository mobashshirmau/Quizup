<!DOCTYPE html>
<html>
<head>
	<title>QuizUp</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include'library/indexheader.php'?>
<p style="float: right;"><a href="admin/adminlogin.php">Admin Login</a></p>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1 style="color: #af1412;font-family: segui" align="center">Create a new Account</h1>
<form method="POST" action="library/db" enctype="multipart/form-data">
<table align="center">
	<tr>
		<td><input type="text" name="fname" placeholder="First Name"><input type="text" name="lname" placeholder="Last Name" required></td>
	</tr>
	<tr>
	    <td><input type="email" name="email" placeholder=" Enter Your Email" required style="width: 400px"></td>
	</tr>
	<tr>
		<td><input type="text" name="mobile" placeholder="Enter Your Mobile No." required></td>
	</tr>
	<tr>
		<td><input type="password" name="pass" placeholder="Enter Your Password" required></td>
	</tr>
	<tr>
		<td>Date Of Birth</td>
	</tr>
	<tr>
		<td><input  type="date" name="dob" placeholder="Enter Your Date Of Birth" style="width: 400px" required></td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td><input type="file" name="img" required></td>
	</tr>	
	<tr>
		<td><a style="font-family: segoi-ui;" href="user/userlogin.php">Already Have An Account</a><input class="btn" type="submit" name="signup" value="SignUp"></td>

	</tr>

</table>
</form>	

</div>
</div>
</div><br><?php
include'library/footer.php'
?>
</body>
</html>