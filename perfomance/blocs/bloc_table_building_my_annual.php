<?php 


$userID = isset($_SESSION[Signal::$SESSION_USERID]) ? $_SESSION[Signal::$SESSION_USERID] : '';
$departmentName = isset($_SESSION[Signal::$SESSION_STAFFDEPARTMENT]) ? $_SESSION[Signal::$SESSION_STAFFDEPARTMENT] : '';
$trainingPrograms = getGroupOrDepartMentTraing($con, $departmentName);
$index = 0;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/table_individual.css"/>
	
</head>

<body>
	
<form id="form1" name="form2" method="post">
<table  width="100%" border="1" align="center" cellpadding="1">
  <tbody>
    <tr>
      <td width="-1%" rowspan="2">No.</td>
      <td width="17%" rowspan="2">Objective Category</td>
      <td width="6%" rowspan="2">SMART Objectives and Monthly Milestone (MSC)<br>
        (Verb/Objective/Timing/Result)</td>
      <td colspan="12">Months</td>
      <td width="6%" rowspan="2">Target to Achieve</td>
    </tr>
    <tr>
      <td width="6%">Jab</td>
      <td width="6%">Feb</td>
      <td width="6%">Mar</td>
      <td width="6%">Apr</td>
      <td width="6%">May</td>
      <td width="6%">Jun</td>
      <td width="6%">Jul</td>
      <td width="6%">Aug</td>
      <td width="6%">Sep</td>
      <td width="6%">Oct</td>
      <td width="6%">Nov</td>
      <td width="6%">Dec</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
	  
</form>
	<p>&nbsp;</p>
</body>
</html>
