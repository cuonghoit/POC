<?php 
	
	require "../signal/signal.php";
	require "dbCon.php";
	$con = getConnection();
	
	require "trainingFac.php";

	if(isset($_POST["trainingData"]) && isset($_POST["userID"])) {
		$userID = $_POST["userID"];
		$tableData = $_POST["trainingData"];
		$qr = '';
		for ($i = 0; $i < count($tableData); $i++){
			$qr = saveTrainingIndividual($con, $tableData[$i], $userID);
		}
		echo $qr;
	}

?>