<?php
	require("../config.php");
	require("../data_access_layer.php");
	require("../content.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $atlas_example_config["language"]; ?>">
<?php 
	require("../serverside_includes/head_include.php") 
?>
<body class="container">
	<?php 
		require("../serverside_includes/content_include.php") 
	?>

	<?php 
		require("../serverside_includes/scripts_include.php") 
	?>
	<?php 
		
		 // Imports test lib
		require("includes/unit_test_scripts_include.php");

		// Initialize a new instance of DAL
		$DAL = new Data_access_layer;
	?>
	<script>
	'use strict';

	// Set variables from accessing webservice class directly
	var DAL_DATA = <?php echo $DAL->get_static_dataset("testTableData"); ?>;
	
	// Jasmine tests for data access layer direct data compared to what is displayed in the DOM after everything is done.
	describe('Very basic testing for data access layer direct access to backend class, vs how it renders in the UI.', function(){

		describe('Simple test for serverside returning data from DAL based on keyname given', function(){
			it('DAL data should exist.', function(){
				expect(DAL_DATA.length > 0).toBe(true);
			});
		});

		describe('Testing clientside angular component.', function(){
			
			it('The angular module should be initialized.', function(){
				expect(typeof angular.module('testExample') === 'object').toBe(true);
			});

		});

	 	describe('Testing backend data access layer against front end angular rendering to DOM.', function(){
				
				it('The angular directive ngTable should have output 1 table element.', function(){
					// End to end comparision testing data integrity
				 	angular.element(document).ready(function () {
				 		expect($('.example-test--table').length).toEqual(1);
				 	});
				});

				it('Will have the same amount of rows in the table tbody that is in the data in the backend.', function(){
					angular.element(document).ready(function () {
				 		expect($('.example-test--table tbody tr').length).toEqual(DAL_DATA.length);
				 	});
				});

				it('The combined ages of the ages row in the data returned will be equivalent if accessing the DAL class directly, or by adding the text value in the DOM cells of the table.', function(){
					
					var dalAges = [],
						clientAges = [],
						dalAgesTtl,
						clientAgesTtl;

					function add(a, b){
				 		return a + b;
				 	}

					DAL_DATA.forEach(function(dalDt){
						dalAges.push(dalDt.age);
					});
					
					angular.element(document).ready(function () {
					 	$('.example-test--table tbody td[data-title-text="Age"]').each(function(){
							clientAges.push(parseInt($(this).text(), 10));
						});
				 	});

				 	dalAgesTtl = dalAges.reduce(add);

				 	clientAgesTtl = clientAges.reduce(add);

				 	expect(dalAgesTtl).toEqual(clientAgesTtl);

				});
		});
	});
	</script>
</body>
</html>
