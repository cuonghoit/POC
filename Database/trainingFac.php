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
}

?>