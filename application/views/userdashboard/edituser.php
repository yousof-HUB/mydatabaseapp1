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
			if (document.forms['edituser']['username'].value == "") {
				alert("enter a username");
				return false;
			}
			if (document.forms['edituser']['email'].value == "") {
				alert("enter a password");
				return false;
			}
			if (document.forms['edituser']['password'].value == "") {
				alert("enter a password");
				return false;
			}
			if (document.forms['edituser']['repeatpassword'].value == "") {
				alert("enter a password");
				return false;
			}
			if (document.forms['edituser']['password'].value != document.forms['edituser']['repeatpassword'].value) {
				alert("password and repeat password don't match");
				return false;
			}

		}
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Edit User</h1>

		<form id="adduserform" name="edituser" action="<?php echo base_url(); ?>index.php/welcome/doedituser" method="post" onsubmit="return validateForm()">
			<label for="uname">Username</label><br>
			<input type="hidden" name="uid" value="<?php echo $userinfo->uid ?>">
			<input type="text" id="usernameid" name="username" value="<?php echo $userinfo->username ?>"><br>
			<label for="uname">Email</label><br>
			<input type="text" id="emailid" name="email" value="<?php echo $userinfo->email ?>"><br>

			<label for="uname">occupation</label><br>
			<input type="text" id="occupationid" name="occupation" value="<?php echo $userinfo->occupation ?>"><br>
			<label for="uname">date of birth</label><br>
			<input type="text" id="birthid" name="birth" value="<?php echo $userinfo->birth ?>"><br>

			<label for="lname">Password</label><br>
			<input type="password" id="passwordid" name="password" value="<?php echo $userinfo->password ?>"><br>
			<label for="lname">Repeat Password</label><br>
			<input type="password" id="repeatpasswordid" name="repeatpassword" value="<?php echo $userinfo->password ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>