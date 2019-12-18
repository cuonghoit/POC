<?php 
	session_start();
	require "signal/signal.php";
	require "database/dbCon.php";
	$con = getConnection();
	
	require "database/trainingFac.php";
	
	if(isset($_POST["btn_login"])) {
		$userName = $_POST["text_username"];
		$password = $_POST["text_password"];
		$loginInfo = login($con, $userName, $password);
		if(!$loginInfo || mysqli_num_rows($loginInfo) == 0) {
			// login fail
			echo 'Login fail';
		} else {
			$row = mysqli_fetch_array($loginInfo);
			$userID = $row['UserID'];
			$loginName = $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'];
			$staffRole = $row['Staff_Role_ID'];
			$staffNumber = $row['Staff_Number'];
			// TODO will update group late
			$staffGroup = $row['Department']; 
			$staffDepartment = $row['Department'];
			$_SESSION[Signal::$SESSION_USERID] = $userID;
			$_SESSION[Signal::$SESSION_USERNAME] = $loginName;
			$_SESSION[Signal::$SESSION_STAFFNUMBER] = $staffNumber;
			$_SESSION[Signal::$SESSION_STAFFROLE] = $staffRole;
			$_SESSION[Signal::$SESSION_STAFFGROUP] = $staffGroup;
			$_SESSION[Signal::$SESSION_STAFFDEPARTMENT] = $staffDepartment;
			header('Location:training.php');
		}
	}
?>

<?php 
	if( isset($_SESSION[Signal::$SESSION_USERID]) && isset($_SESSION[Signal::$SESSION_USERNAME])) {
		header('Location:training.php');
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<form id="form_login" method="post">
	<table width="100%">
  <tbody>
    <tr>
      <td colspan="2">IHRDC Login Page</td>
      </tr>
    <tr>
      <td width="15%">user name:</td>
      <td width="85%">
        <input name="text_username" type="text" id="textfield" value="annt"></td>
    </tr>
    <tr>
      <td>password</td>
      <td>
        <input name="text_password" type="text" id="textfield2" value="1234"></td>
    </tr>
    <tr>
      <td><button name="btn_login" form="form_login"> Login </button></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
	</form>
</body>
</html>