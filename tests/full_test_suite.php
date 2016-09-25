<?php
	require("../config.php");
	require("../data_access_layer.php");
	require("../content.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $atlas_example_config["language"]; ?>">
<head>
	<?php 
		require("../serverside_includes/inner_head_include.php");
	?>
	<title><?php echo $atlas_example_content["document_title"]; ?> - Unit and e2e automated testing</title>
</head>
<body class="container">
	<h1 class="text-center animated fadeIn">E2E &amp; Unit Testing for Test Module</h1>
	<?php 
		require("../serverside_includes/content_include.php");
	?>

	<?php 
		require("../serverside_includes/scripts_include.php"); 
	?>
	<?php 
		
		 // Imports test lib
		require("includes/unit_test_scripts_include.php");

		// Initialize a new instance of DAL
		$DAL = new Data_access_layer;
	?>
	<a href="../">Go back to standalone module</a>
	<script src="e2e-unit-tests.js"></script>
	<script>
		 angular.element(document).ready(function () {
			initAllE2EAndUnitTests(<?php echo $DAL->get_static_dataset("testTableData"); ?>);
		});
	</script>
</body>
</html>
