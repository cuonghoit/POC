<?php 

function getCources($con) {
	$qr = "
		SELECT *
		FROM course
	";
	return mysqli_query($con, $qr);
}

function saveToConsole($content) {

	$fp = fopen("console.txt", "a+") or die("Unable to open file!");
	fwrite($fp, $content);
	fclose($fp);
}

function getLoginUserInformation($con, $staffNumber) {
	$qr = "
		SELECT 	*
		from personal_info 
		WHERE personal_info.Staff_Number='$staffNumber'
	";
	return mysqli_query($con, $qr);
};


function login($con, $userID, $pass) {
	$qr = "
		SELECT *
		FROM user, personal_info
		WHERE user.UserName='$userID'
		AND user.Password='$pass'
		AND user.StaffNumber=personal_info.Staff_Number
	";
	return mysqli_query($con, $qr);
}

function saveTrainingIndividual($con, $row, $staffNumber) {
		$name = $row['name'];
		$disciplines = $row['disciplines'];
		$type = $row['type'];
		$purpose = $row['purpose'];
		$provider = $row['provider'];
		$location = $row['location'];
		$usd = $row['usd'];
		$vnd = $row['vnd'];
		$jan = $row['jan'];
		$feb = $row['feb'];
		$mar = $row['mar'];
		$apr = $row['apr'];
		$may = $row['may'];
		$jun = $row['jun'];
		$jul = $row['jul'];
		$aug = $row['aug'];
		$sep = $row['sep'];
		$oct = $row['oct'];
		$nov = $row['nov'];
		$dec = $row['dec'];
	
		$qr = "
			INSERT INTO training_record(Staff_Number, Course_ID, Training_Purpose, Training_Type, Training_Time_From, Training_Time_To, Training_Location, Course_Fee, Traveling_Cost, Accommodation_Cost, Training_Approval_Status, Training_Progress, Assigned_by, Training_Budget_Resources, Training_Assignment_Number, Training_Assignment_Date, Training_Cost_Estimation_Number, Training_Cost_Estimation_Date, Training_Cost_for_ReFund) VALUES ('$staffNumber', '$name', '$purpose', '$type', '2019-12-09', '2019-12-31', '$location', $usd, '0000', '00000', '0', 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1)
		";
		mysqli_query($con, $qr);
		return $qr;
};

function getGroupOrDepartMentTraing($con, $departmentName) {
	$qr = "
		SELECT * 
		FROM personal_info, training_record, course
		WHERE personal_info.Department='$departmentName'
		AND personal_info.Staff_Number=training_record.Staff_Number
		AND course.Course_Name=training_record.Course_ID
		AND training_record.Training_Approval_Status=0
	";
	
	return mysqli_query($con, $qr);
}

function approvalTrainigProgram($con, $row, $approvalStatus) {
	$staffNumber = $row['staffNumber'];
	$couseName = $row['traingName'];
	$qr = "
		UPDATE training_record SET Training_Approval_Status=$approvalStatus
		WHERE training_record.Staff_Number=$staffNumber
		AND training_record.Course_ID='$couseName'
	";
	saveToConsole($qr);
	mysqli_query($con, $qr);
	return $qr;
}


function getHighLight($value) {
	if ($value) { 
		return 'cadetblue';
	} else {
		return 'while';
	}
}
?>