<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<ul class="userlist">
	<?php foreach($users as $user)
	{
		echo("<	>$user->Username</li>");
	}
	?>
	</ul>
</body>
</html>