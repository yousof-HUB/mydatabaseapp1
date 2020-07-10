<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Dashboard</title>

	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
</head>

<body>
	<div class="loginbox">
		<h1>Add question</h1>
		<form id="adduserform" name="addqu" action="<?php echo base_url(); ?>index.php/welcome/doaddqu" method="post">
			
			<label for="question">question</label><br>
			<input type="text" id="qid" name="question" value=""><br>
			
			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>