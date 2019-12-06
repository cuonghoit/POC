<?php 
	session_start();
	
	require "database/dbCon.php";
	$con = getConnection();
	
	require "database/trainingFac.php";
	require "signal/signal.php";
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
<link rel="stylesheet" type="text/css" href="css/training_footer.css"/>
<body>
	<div id="wrapper"> 
		<div id="menu"> <?php require "TrainingBlocs/menu.php"; ?> </div>
		<div id="title"> <?php require "TrainingBlocs/title_individual.php"; ?> </div>
		<div id="input"> 
			<?php 
			$path = isset($_GET['p']) ? $_GET['p'] : '';
			switch ($path) {
				case Signal::$PAGE_INDIVIDUAL:
					require "TrainingBlocs/general_individual.php";
					break;
				case Signal::$PAGE_GROUP:
					require "TrainingBlocs/general_group.php";
					break;
				case Signal::$PAGE_DEPARTMENT:
					require "TrainingBlocs/general_department.php";
					break;
				case Signal::$PAGE_COMPANY:
					break;
				default:
					require "TrainingBlocs/general_individual.php";
					break;
			} 
			?> 
		</div>
		<div id="date_time"> <?php require "TrainingBlocs/date_individual.php"; ?> </div>
		<div id="table"> <?php require "TrainingBlocs/table_individual.php"; ?> </div>
		<div id='footer'> <?php require "TrainingBlocs/footer.php"; ?> </div>
		
	</div>
</body>
</html>

