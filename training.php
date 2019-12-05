<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>	
<link rel="stylesheet" type="text/css" href="css/training.css"/>
<link rel="stylesheet" type="text/css" href="css/title_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/general_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/table_individual.css"/>
<body>
	<div id="wrapper"> 
		<div id="menu"> <?php require "TrainingBlocs/menu.php"; ?> </div>
		<div id="title"> <?php require "TrainingBlocs/title_individual.php"; ?> </div>
		<div id="input"> 
			<?php 
			$path = isset($_GET['p']) ? $_GET['p'] : '';
			switch ($path) {
				case 'individual':
					require "TrainingBlocs/general_individual.php";
					break;
				case 'group':
					require "TrainingBlocs/general_group.php";
					break;
				case 'department':
					require "TrainingBlocs/general_department.php";
					break;
				case 'company':
					break;
				default:
					require "TrainingBlocs/general_individual.php";
					break;
			} 
			?> 
		</div>
		<div id="date_time"> <?php require "TrainingBlocs/date_individual.php"; ?> </div>
		<div id="table"> <?php require "TrainingBlocs/table_individual.php"; ?> </div>
		
	</div>
</body>
</html>

