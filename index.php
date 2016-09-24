<?php
	require("config.php");
	require("content.php")
?>
<!DOCTYPE html>
<html lang="<?php echo $altas_example_config["language"]; ?>">

	<?php 
		require("serverside_includes/head_include.php") 
	?>

<body class="container">
	<?php 
		require("serverside_includes/content_include.php") 
	?>

	<?php 
		require("serverside_includes/scripts_include.php") 
	?>

</body>
</html>
