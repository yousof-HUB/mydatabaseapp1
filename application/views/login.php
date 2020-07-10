<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Dashboard</title>
	<script type="text/javascript">
		function validateForm() {
			if (document.forms['login']['username'].value == "") {
				alert("enter a username");
				return false;
			}
			if (document.forms['login']['password'].value == "") {
				alert("enter a password");
				return false;
			}
		}
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Welcome to Qna</h1>
		<form id="loginform" name="login" action="<?php echo base_url(); ?>index.php/welcome/dologin" method="post" onsubmit="return validateForm()">
			<label for="uname">Username</label><br>
			<input type="text" id="usernameid" name="username" value=""><br>
			<label for="lname">Password</label><br>
			<input type="password" id="passwordid" name="password" value=""><br><br>
			<input type="submit" value="Submit">
		</form>
		<form id="loginform" action="<?php echo base_url(); ?>index.php/welcome/adduser"> <input type="submit" value="register">
		</form>
	</div>
</body>

</html>