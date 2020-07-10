<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
	<ul class="userlist">
		<?php foreach ($question as $qu) {
			echo ("<	>$qu->question</li>");
		}
		?>
	</ul>
</body>

</html>