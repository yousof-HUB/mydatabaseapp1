<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Dashboard</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Edit Question</h1>

		<form id="addquform" name="editqu" action="<?php echo base_url(); ?>index.php/welcome/doeditqu" method="post">
			<label for="fname">Username</label><br>
			<input type="hidden" name="uid" value="<?php echo $quinfo->qid ?>">
			<input type="text" id="usernameid" name="username" value="<?php echo $quinfo->Username ?>"><br>
			<label for="question">Question</label><br>
			<input type="text" id="qid" name="question" value="<?php echo $quinfo->question ?>"><br>
			<label for="answer">answer bla bla</label><br>
			<input type="text" id="answerid" name="answer" value="<?php echo $quinfo->answer ?>"><br>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>