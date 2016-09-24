<?php
	
	// Clean the untrusted get param, ensure only letters, numbers, underscores or dashes
	$client_params = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET["getDataset"]);

	$response_data = [
						"testTableData" => 
											array(
													[
														"name" => "Nick",
														"age" => 29,
														"job_type" => "Software Developer",
														"favorite_hobby" => "Spearfishing",
														"platforms_used" => "Linux, Windows, Mac",
														"favorite_tool" => "Visual Studio"
													],
													[
														"name" => "Allie",
														"age" => 22,
														"job_type" => "Graphic designer",
														"favorite_hobby" => "Painting",
														"platforms_used" => "Mac",
														"favorite_tool" => "Photoshop"
													],
													[
														"name" => "Joe",
														"age" => 31,
														"job_type" => "Web Developer",
														"favorite_hobby" => "Watching Football",
														"platforms_used" => "Mac",
														"favorite_tool" => "Sublime Text"	
													],
													[
														"name" => "George",
														"age" => 26,
														"job_type" => "DBA",
														"favorite_hobby" => "Playing Chess",
														"platforms_used" => "Linux",
														"favorite_tool" => "SQL Studio"
													],
													/**
													 * I left this because you said 5x5, but if you countthe header (thead) row, 
													 * it would be too many rows to have the the data 5x5. so I commented an object from the       
													 * array..but just in case, so uncomment this so I dont lose points if you want 5x5 data :)
													[
														"name" => "Bob",
														"age" => 19,
														"job_type" => "Systems Engineer",
														"favorite_hobby" => "Going to the club",
														"platforms_used" => "Linux",
														"favorite_tool" => "Linux Cali/Backtrack"
													]
													 */
											)

							/**
							 * Extend here with new static data for this fake web service
							 * EG: newDataset => array(...,)
							 */
					];
// Protect from keys that dont exist in object, an extra layer of security
if ($response_data[$client_params]) echo json_encode($response_data[$client_params]);
