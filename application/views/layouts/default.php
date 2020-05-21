<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/form.js"></script>
	<?php
		if (isset($custom_scripts) && is_array($custom_scripts))
		{
			foreach ($custom_scripts as $key => $value) {
				echo $value;
			}
		}
	 ?>
</head>
<body>
	<?php echo $content; ?>
</body>
</html>
