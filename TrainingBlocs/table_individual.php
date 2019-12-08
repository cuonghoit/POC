<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/table_individual.css"/>
	
</head>

<body>
	
	<form id="form1" name="form2" method="post">
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
	        <td><input name="textfield" type="text" id="idTrainigName"></td>
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
