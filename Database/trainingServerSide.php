<?php 
	
	require "../signal/signal.php";
	require "dbCon.php";
	$con = getConnection();
	
	require "trainingFac.php";

	if(isset($_POST["trainingData"]) && isset($_POST["staffNumber"])) {
		$staffNumber = $_POST["staffNumber"];
		$tableData = $_POST["trainingData"];
		$qr = '';
		for ($i = 0; $i < count($tableData); $i++){
			$qr = saveTrainingIndividual($con, $tableData[$i], $staffNumber);
		}
		return $qr;
	} else if(isset($_POST["trainingInfo"]) && isset($_POST["status"])) {
		$TheTable = $_POST["trainingInfo"];
		$status = $_POST["status"];
		$qr = '';
		for ($j = 0; $j < count($TheTable); $j++){
			$qr = approvalTrainigProgram($con, $TheTable[$j], $status);
		}
		return $qr;
	}

?>