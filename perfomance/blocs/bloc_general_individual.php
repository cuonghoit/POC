
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../css/general_individual.css"/>
</head>

<body>
<?php 
	if(isset($_SESSION[Signal::$SESSION_STAFFNUMBER])) {
		$staffNumber = $_SESSION[Signal::$SESSION_STAFFNUMBER];
		$userInfo = getLoginUserInformation($con, $staffNumber);
		$row_userInfo = mysqli_fetch_array($userInfo);
?>
<div > GENERAL INFO </div>
	<table width="100%">
  <tbody>
    <tr>
      <td class="text_individual">Staff name:</td>
      <td><input type="text" value="<?php echo $row_userInfo['First_Name']." ".$row_userInfo['Middle_Name']." ".$row_userInfo['Last_Name']?>"></td>
      <td class="text_individual">Background:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Background']?>"></td>
      <td class="text_individual">Supersivor:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Supervisor_Name']?>"></td>
    </tr>
    <tr>
      <td class="text_individual">Staff number:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Staff_Number']?>"></td>
      <td class="text_individual">Education/Academic degree:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Education']?>"></td>
      <td class="text_individual">Supersivor Job title:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Supervisor_Job_Title']?>"></td>
    </tr>
    <tr>
      <td class="text_individual">Email:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Email']?>"></td>
      <td class="text_individual">Job title:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Job_Title']?>"></td>
      <td class="text_individual">Supersivor Email:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Supervisor_Email']?>"></td>
    </tr>
    <tr>
      <td class="text_individual">Date joining:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Date_Of_Hire']?>"></td>
      <td class="text_individual">Date in current position:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Date_In_Current_Job_Title']?>"></td>
      <td class="text_individual">Department:</td>
      <td><input type="text" value="<?php echo $row_userInfo['Department']?>"></td>
    </tr>
  </tbody>
</table>
<?php } ?>
</body>
</html>