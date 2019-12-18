<?php 

function getCources($con) {
	$qr = "
		SELECT *
		FROM course
	";
	return mysqli_query($con, $qr);
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

function saveTrainingIndividual($con, $row, $userID) {
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
			INSERT INTO training(UserID, TrainingName, Disciplines, TypeOfProgram, PurposeOfProgram, Provider, Location, USD, VND, Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, December, Status) 
			VALUES ( $userID , '$name', '$disciplines', '$type', '$purpose', '$provider', '$location', '$usd', '$vnd', $jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec, 'submited')
		";
		mysqli_query($con, $qr);
		return $qr;
};

function getGroupOrDepartMentTraing($con, $userID) {
	$qr = "
		SELECT * 
		FROM training, user_info
		WHERE user_info.UserID='$userID'
		AND training.UserID=user_info.UserID
	";
	
	return mysqli_query($con, $qr);
}


function getHighLight($value) {
	if ($value) { 
		return 'cadetblue';
	} else {
		return 'while';
	}
}
?>