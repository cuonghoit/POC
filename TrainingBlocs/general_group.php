<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<div > GENERAL INFO </div>
	<?php 
	if(isset($_SESSION[Signal::$SESSION_STAFFNUMBER])) {
		$staffNumber = $_SESSION[Signal::$SESSION_STAFFNUMBER];
		$userInfo = getLoginUserInformation($con, $staffNumber);
		$row_userInfo = mysqli_fetch_array($userInfo);
	?>
	<table width="100%">
  <tbody>
    <tr>
      <td class="text_individual">Group:</td>
      <td> <input type="text" name="textfield" id="textfield" value="<?php echo $row_userInfo['Department']?>"></td>
      <td class="text_individual">Department:</td>
      <td> <input type="text" name="textfield" id="textfield" value="<?php echo $row_userInfo['Department']?>"></td>
      <td class="text_individual">Company:</td>
      <td> <input type="text" name="textfield" id="textfield" value="IHRDC"></td>
    </tr>
  </tbody>
</table>
	<?php } ?>
</body>
</html>