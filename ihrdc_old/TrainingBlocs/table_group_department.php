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
	  <table width="100%" border="1" align="center" cellpadding="1" id="data_table_group_department">
	    <tbody>
	      <tr>
	        <td rowspan="2" class="table_item_header">No.</td>
	        <td rowspan="2" class="table_item_header">Name Of Staff</td>
	        <td rowspan="2" class="table_item_header">Staff Number</td>
	        <td rowspan="2" class="table_item_header">Name of Training <br>
            Development Program</td>
	        <td rowspan="2" class="table_item_header">Disciplines<br>
	          (Geology, Finance, HRM, Legal …)</td>
	        <td rowspan="2" class="table_item_header">Type of Program<br>
	          (e-Learning, Classroom …)</td>
	        <td rowspan="2" class="table_item_header">Purpose of program <br>
            (Close Competency Gaps, Develop Competencies, Doctorate …)</td>
	        <td rowspan="2" class="table_item_header">Provider</td>
	        <td rowspan="2" class="table_item_header">Location</td>
	        <td colspan="2" class="table_item_header">Training Fee</td>
	        <td colspan="12" class="table_item_header">Training &amp; Development Schedule</td>
          </tr>
	      <tr>
	        <td class="table_item_header">US$</td>
	        <td class="table_item_header">VND</td>
	        <td class="table_item_header">Jan</td>
	        <td class="table_item_header">Feb</td>
	        <td class="table_item_header">Mar</td>
	        <td class="table_item_header">Apr</td>
	        <td class="table_item_header">May</td>
	        <td class="table_item_header">Jun</td>
	        <td class="table_item_header">Jul</td>
	        <td class="table_item_header">Aug</td>
	        <td class="table_item_header">Sep</td>
	        <td class="table_item_header">Oct</td>
	        <td class="table_item_header">Now</td>
	        <td class="table_item_header">Dec</td>
          </tr>
	      <?php 
	  		while($row = mysqli_fetch_array($trainingPrograms)) {
				$index++;
	  	 ?>
	      <tr>
	        <td class="table_item"><?php echo $index ?></td>
	        <td class="table_item"><?php echo $row['First_Name'].' '.$row['Middle_Name'].' '.$row['Last_Name'] ?></td>
	        <td class="table_item"><?php echo $row['Staff_Number'] ?></td>
	        <td class="table_item"><?php echo $row['Course_Name'] ?></td>
	        <td class="table_item"><?php echo $row['Discipline'] ?></td>
	        <td class="table_item"><?php echo $row['Course_Type'] ?></td>
	        <td class="table_item"><?php echo $row['Course_Objectives'] ?></td>
	        <td class="table_item"><?php echo $row['Provider'] ?></td>
	        <td class="table_item"><?php echo $row['Training_Location'] ?></td>
	        <td class="table_item"><?php echo $row['Course_Fee'] ?></td>
	        <td class="table_item"></td>
	        <td style="background-color: <?php echo getHighLight($row['Jan']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Feb']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Mar']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Apr']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['May']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Jun']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Jul']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Aug']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Sep']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Oct']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['Nov']); ?>"></td>
	        <td style="background-color: <?php echo getHighLight($row['December']); ?>"></td>
          </tr>
	      <?php } ?>
        </tbody>
      </table>
</form>
	<p>&nbsp;</p>
</body>
</html>
