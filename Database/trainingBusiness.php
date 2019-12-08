<?php

	$index = isset($_SESSION['training_table_index']) ? $_SESSION['training_table_index'] : 1;

	if (isset($_POST["btn_add"])) {
		$index++;
		$_SESSION['training_table_index'] = $index;
	} else if (isset($_POST["btn_remove"])) {
		if ($index > 1)
			$index--;
		$_SESSION['training_table_index'] = $index;
	} 
	
?>