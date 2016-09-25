<?php
   /**
	* @class DataAccessLayer
	* @description Utility for webservice to answer request by string name, safely [sanatize_string();]
	*  expose [get_static_dataset()] a portion of private data if the call matches a keyname within the data.  
	*/
	class Data_access_layer {
		
		// Find only letters, numbers, underscores or dashes
		private static $VALID_CHARS_ONLY_REGEX = '/[^-a-zA-Z0-9_]/'; 

		// Static data to populate table on the clientside of demo
		private static $DATASET = array("testTableData" => 
											array(
												array(
													"name" => "Nick",
													"age" => 29,
													"job_type" => "Software Developer",
													"platforms_used" => "Linux RedHat, Windows 10, Mac El Capitan",
													"favorite_tool" => "Visual Studio"
												),
												array(
														"name" => "Allie",
														"age" => 22,
														"job_type" => "Graphic designer",
														"platforms_used" => "Mac",
														"favorite_tool" => "Photoshop"
													),
												array(
														"name" => "Joe",
														"age" => 31,
														"job_type" => "Web Developer",
														"platforms_used" => "Mac",
														"favorite_tool" => "Sublime Text"	
													),
												array(
														"name" => "George",
														"age" => 26,
														"job_type" => "DBA",
														"platforms_used" => "Windows Server 2012",
														"favorite_tool" => "SQL Studio"
													),
													/**
													 * I left this because you said 5x5, but if you count the header (thead) row, 
													 * it would be too many rows to have the the data 5x5. so I commented an object from the       
													 * array..but just in case, so uncomment this so I dont lose points if you want 5x5 data :)
													array(
														"name" => "Bob",
														"age" => 19,
														"job_type" => "Systems Engineer",
														"platforms_used" => "Linux",
														"favorite_tool" => "Linux Cali/Backtrack"
													)
													 */
											)

							/**
							 * Extend here with new static data for this fake web service
							 * EG: "newDataset" => array(...)
							 */
					);

	   /**
		* @function handle_error
		* @description forms a human readable, descriptive error and sets header accordingly for response
		* @param {Integer} the error to HTTP error number  to throw
		* @returns {Undefined}
		*/
		private function handle_error($error_code){
			switch($error_code){
				case 400:
					$error_msg_text = "Sorry, the parameter you passed into this webservice is invalid. Please check that it is valid and try again.";
				break;
			}

			header("HTTP/1.0 400 $error_msg_text");
		}
		
		/**
		* @function sanatize_string
		* @description Filters a string value to contain only chars which fit the regular expression referenced internally
		* @param {String} Dirty string
		* @returns {String} Cleaned string
		*/
		public function sanatize_string($dirty_string){
			$clean_string = preg_replace($this::$VALID_CHARS_ONLY_REGEX, '__REMOVED_CHAR__', $dirty_string);
			return $clean_string;
		}
		
		/**
		* @function get_static_dataset
		* @description gets data by name and returns it as JSON encoded data
		* @param {String} Name of portion of data to get from data
		* @returns {Array} Specified data if a match is found 
		*/
		public function get_static_dataset($safelyRequestedDatasetName){
			// Protect from keys that dont exist in object, an extra layer of security
			if (isset($this::$DATASET[$safelyRequestedDatasetName])) return json_encode($this::$DATASET[$safelyRequestedDatasetName]);
			else $this->handle_error(400);
		}		
	}

$is_webservice_call = isset($_GET["getDataset"]);


if ($is_webservice_call){

	// Instantiate a new instance of the DAL
	$DAL = new Data_access_layer;

	// Clean the untrusted get param
	$safe_client_data_req_name = $DAL->sanatize_string($_GET["getDataset"]);

	// Return the value of 1) the requested data or 2) Throw an error in the event that the request was unsuccessful due to invalid client request
	echo $DAL->get_static_dataset($safe_client_data_req_name);
}
