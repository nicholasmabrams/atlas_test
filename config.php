<?php 
define("REL_PATH", "/test");

$atlas_example_config = array(

		"language" => "en",

		"encoding" => "UTF-8",

		"endpoints" => array("data_access_layer_endpoint" => REL_PATH."/data_access_layer.php"),

		"stylesheets" => array("ng_table_css_styles"=> "http://cdn.rawgit.com/esvit/ng-table/1.0.0/dist/ng-table.min.css",
							   "animate_css_styles" => "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css", 
							   "bootstrap_css_styles" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
							   "application_css_styles" => REL_PATH."/resources/css/styles.css"),

		"lib_scripts" => array("jquery_js" => "https://code.jquery.com/jquery-1.12.4.min.js",
							   "angular_js"=>"http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.js",
							   "ng_table_js" => "http://cdn.rawgit.com/esvit/ng-table/1.0.0/dist/ng-table.js"),

		"content_scripts" => array("app_client_config"=>REL_PATH."/resources/javascript/client-config.js",
							       "app_angular_main" => REL_PATH."/resources/javascript/angular/angular-main.js", 
							       "app_angular_directives" => REL_PATH."/resources/javascript/angular/angular-directives.js",
							       "app_angular_controllers" => REL_PATH."/resources/javascript/angular/angular-controllers.js",
							       "app_angular_services" => REL_PATH."/resources/javascript/angular/angular-services.js")
	);