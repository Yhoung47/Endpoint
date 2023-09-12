<?php

	include('config.php');
	
	$sql = "SELECT * FROM users";
	$result = mysqli_query($db, $sql);
	$json_array = array();

	while($row = mysqli_fetch_assoc($result)){
		$json_array[] = $row;
	}

	echo json_encode($json_array);

	// echo '<pre>';
	// print_r($json_array);
	// echo "</pre>";

?>