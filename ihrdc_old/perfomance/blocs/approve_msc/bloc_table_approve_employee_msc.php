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
      <td class="table_item_header" width="-1%" rowspan="2">No.</td>
      <td class="table_item_header" width="17%" rowspan="2">Objective Category</td>
      <td class="table_item_header" width="6%" rowspan="2">SMART Objectives and Monthly Milestone (MSC)<br>
        (Verb/Objective/Timing/Result)</td>
      <td class="table_item_header" colspan="12">Months</td>
      <td class="table_item_header" width="6%" rowspan="2">Target to Achieve</td>
    </tr>
    <tr>
      <td class="table_item_header" width="6%">Jab</td>
      <td class="table_item_header" width="6%">Feb</td>
      <td class="table_item_header" width="6%">Mar</td>
      <td class="table_item_header" width="6%">Apr</td>
      <td class="table_item_header" width="6%">May</td>
      <td class="table_item_header" width="6%">Jun</td>
      <td class="table_item_header" width="6%">Jul</td>
      <td class="table_item_header" width="6%">Aug</td>
      <td class="table_item_header" width="6%">Sep</td>
      <td class="table_item_header" width="6%">Oct</td>
      <td class="table_item_header" width="6%">Nov</td>
      <td class="table_item_header" width="6%">Dec</td>
      </tr>
    <tr>
      <td class="table_item">1</td>
      <td class="table_item">Must-Do 1<br>
        (Jan - May 20)</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item">Must-Do 1<br>
        (Jun - Dec 20)</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item">2</td>
      <td class="table_item">Must-Do 2</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item">3</td>
      <td class="table_item">Must-Do 3</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item">4</td>
      <td class="table_item">Must-Do 4</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item">5</td>
      <td class="table_item">Should-Do 1</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item">6</td>
      <td class="table_item">Should-Do 2</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item">7</td>
      <td class="table_item">Could-Do 1</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item">Summary</td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
      <td class="table_item"><input type="text" name="textfield" id="textfield"></td>
    </tr>
    <tr>
      <td colspan="16"><input type="text" name="textfield" id="textfield"></td>
      </tr>
    <tr>
      <td class="table_item_header" colspan="7">Staff's Signature:</td>
      <td class="table_item_header" colspan="9">Signature of the Line Manager' Supervisor:</td>
      </tr>
    <tr>
      <td class="table_item_header" colspan="7">Line Manager's Signature:</td>
      <td class="table_item_header" colspan="9">HRM Recorded by HRM:</td>
      </tr>
  </tbody>
</table>
	  
</form>
	<p>&nbsp;</p>
</body>
</html>
