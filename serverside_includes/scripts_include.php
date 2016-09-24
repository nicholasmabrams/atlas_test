	<script src="<?php echo $atlas_example_config["lib_scripts"]["jquery_js"] ?>"></script>
	<script src="<?php echo $atlas_example_config["lib_scripts"]["angular_js"] ?>"></script>
	<script src="<?php echo $atlas_example_config["lib_scripts"]["ng_table_js"] ?>"></script>
	<script src="<?php echo $atlas_example_config["content_scripts"]["app_client_config"] ?>"></script>
	<script type="text/javascript">
		atlasDistTestConfig.configParams({
			dataAccessLayerEndpoint: "<?php echo $atlas_example_config["endpoints"]["data_access_layer_endpoint"]; ?>"
		});
	</script>
	<script src="<?php echo $atlas_example_config["content_scripts"]["app_angular_main"]; ?>"></script>
	<script src="<?php echo $atlas_example_config["content_scripts"]["app_angular_main"]; ?>"></script>
	<script src="<?php echo $atlas_example_config["content_scripts"]["app_angular_directives"]; ?>"></script>
	<script src="<?php echo $atlas_example_config["content_scripts"]["app_angular_controllers"]; ?>"></script>
	<script src="<?php echo $atlas_example_config["content_scripts"]["app_angular_services"]; ?>"></script>