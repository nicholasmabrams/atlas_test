<?php
	require("./config.php");
	require("./content.php")
?>
<!DOCTYPE html>
<html lang="<?php echo $atlas_example_config["language"]; ?>">
<head>
	<title><?php echo $atlas_example_content["document_title"]; ?></title>
	<?php 
		require('./serverside_includes/inner_head_include.php'); 
	?>
</head>
<body class="container">

	<?php
		require("./serverside_includes/content_include.php");
	?>

	<?php 
		require("./serverside_includes/scripts_include.php");
	?>
	<!-- left out of include so that it doesnt get included with unit tests -->
	<a href="./tests/full_test_suite.php">Run unit and end to end tests for this module</a>
</body>
</html>
