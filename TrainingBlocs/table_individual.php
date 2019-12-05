<?php

	$index = isset($_SESSION['training_table_index']) ? $_SESSION['training_table_index'] : 1;
	$tableData = isset($_SESSION['training_table_value']) ? $_SESSION['training_table_value'] : [];
	if (isset($_POST["btn_add"])) {
		$index++;
	} else if (isset($_POST["btn_remove"])) {
		if ($index > 1)
			$index--;
	}
	$_SESSION['training_table_index'] = $index;
	$_SESSION['training_table_value'] = $tableData;
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/table_individual.css"/>
	<script>
		function saveData(){
			var TableData = new Array();
			$('#data_table tr').each(function(row, tr){
				TableData[row] = {
					"name" 			: $(tr).find('td:eq(1) input').val(),
					"disciplines" 	: $(tr).find('td:eq(2) input').val(),
					"type" 			: $(tr).find('td:eq(3) input').val(),
					"purpose" 		: $(tr).find('td:eq(4) input').val(),
					"provider" 		: $(tr).find('td:eq(5) input').val(),
					"location" 		: $(tr).find('td:eq(6) input').val(),
					"usd" 			: $(tr).find('td:eq(7) input').val(),
					"vnd" 			: $(tr).find('td:eq(8) input').val(),
					"jan" 			: $(tr).find('td:eq(9) input').prop("checked"),
					"feb" 			: $(tr).find('td:eq(10) input').prop("checked"),
					"mar" 			: $(tr).find('td:eq(11) input').prop("checked"),
					"apr" 			: $(tr).find('td:eq(12) input').prop("checked"),
					"may" 			: $(tr).find('td:eq(13) input').prop("checked"),
					"jun" 			: $(tr).find('td:eq(14) input').prop("checked"),
					"jul" 			: $(tr).find('td:eq(15) input').prop("checked"),
					"aug" 			: $(tr).find('td:eq(16) input').prop("checked"),
					"sep" 			: $(tr).find('td:eq(17) input').prop("checked"),
					"oct" 			: $(tr).find('td:eq(18) input').prop("checked"),
					"nov" 			: $(tr).find('td:eq(19) input').prop("checked"),
					"dec" 			: $(tr).find('td:eq(20) input').prop("checked"),
				}
			}); 
			TableData.shift();
			TableData.shift();
			alert(TableData[0]["name"]);
		}
		
	</script>
</head>

<body>
	<form id="form1" name="form1" method="post">
	  <table width="100%" border="1" align="center" cellpadding="1" id="data_table">
	    <tbody>
	      <tr>
	        <td rowspan="2" class="table_item">No.</td>
	        <td rowspan="2" class="table_item"><p>Name of Training &amp; </p>
	          <p>Development Program</p></td>
	        <td rowspan="2" class="table_item">Disciplines<br>
	          (Geology, Finance, HRM, Legal …)</td>
	        <td rowspan="2" class="table_item">Type of Program<br>
	          (e-Learning, Classroom …)</td>
	        <td rowspan="2" class="table_item"><p>Purpose of program </p>
	          <p>(Close Competency Gaps, Develop Competencies, Doctorate …) </p></td>
	        <td rowspan="2" class="table_item">Provider</td>
	        <td rowspan="2" class="table_item">Location</td>
	        <td colspan="2" class="table_item">Training Fee</td>
	        <td colspan="12" class="table_item">Training &amp; Development Schedule</td>
          </tr>
	      <tr>
	        <td class="table_item">US$</td>
	        <td class="table_item">VND</td>
	        <td class="table_item">Jan</td>
	        <td class="table_item">Feb</td>
	        <td class="table_item">Mar</td>
	        <td class="table_item">Apr</td>
	        <td class="table_item">May</td>
	        <td class="table_item">Jun</td>
	        <td class="table_item">Jul</td>
	        <td class="table_item">Aug</td>
	        <td class="table_item">Sep</td>
	        <td class="table_item">Oct</td>
	        <td class="table_item">Now</td>
	        <td class="table_item">Dec</td>
          </tr>
	      <?php 
	  for ($i = 0; $i < $index; $i++){
	  ?>
	      <tr>
	        <td><?php echo($i + 1) ?></td>
	        <td><input name="textfield" type="text" id="idTrainigName" value="123"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="text" name="textfield" id="textfield"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
	        <td><input type="checkbox" name="vehicle1" value="Bike"></td>
          </tr>
	      <?php } ?>
        </tbody>
      </table>
      <p>
	    <button type="submit" name="btn_add" form="form1" value="Submit" onclick="saveData()">Add</button>
		 <button type="submit" name="btn_remove" form="form1" value="Submit">Remove</button>
      </p>
    </form>
	<p>&nbsp;</p>
</body>
</html>
