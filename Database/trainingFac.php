<?php 

function getLoginUserInformation($con, $userID) {
	$qr = "
		SELECT 	supervisor_info.StaffName supervisorName, 
		supervisor_info.JobTitle supervisorJobTitle, 
		supervisor_info.Email supervisorEmail,
        department.DepartmentName,
        user_info.Background,
        user_info.StaffName,
        user_info.Education,
        user_info.JobTitle,
        user_info.DateInCurrentPosision,
        user_info.StaffNumber,
        user_info.DateJoin,
        user_info.Email

		from user, user_info, department, user_info supervisor_info 
		WHERE user.UserID=$userID 
		AND department.userID=$userID
		AND user_info.UserID=$userID 
		AND supervisor_info.UserID=department.DepartmentLeader
	";
	return mysqli_query($con, $qr);
};


function login($con, $userID, $pass) {
	$qr = "
		SELECT *
		FROM user, user_info
		WHERE user.UserName='$userID'
		AND user.Password='$pass'
		AND user.UserID=user_info.UserID
	";
	echo $qr;
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

?>