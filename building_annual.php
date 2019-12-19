<?php 
	session_start();
	
	require "signal/signal.php";
	require "database/dbCon.php";
	$con = getConnection();
	
	require "database/trainingFac.php";
	require "database/trainingBusiness.php";

    $session_value = $_SESSION[Signal::$SESSION_USERID];

	$path = isset($_GET['p']) ? $_GET['p'] : '';

?>

<?php 

	if(!isset($_SESSION[Signal::$SESSION_USERID]) || !isset($_SESSION[Signal::$SESSION_USERNAME])) {
		header('Location:login.php');
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<script type="text/javascript" src="query-3.4.1.min.js"></script>
	<script type="text/javascript" src="javascrip/trainingJS.js"></script>
</head>	
<link rel="stylesheet" type="text/css" href="css/training.css"/>
<link rel="stylesheet" type="text/css" href="css/title_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/general_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/table_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/training_footer.css"/>
<link rel="stylesheet" type="text/css" href="css/training_menu.css"/>

<body>
	<div id="wrapper"> 
		<div id="menu"> <?php require "TrainingBlocs/menu.php"; ?> </div>
		<div id="title"> <?php require "perfomance/blocs/bloc_header.php"; ?> </div>
		<div id="input"> 
			<?php 
			switch ($path) {
				case Signal::$PAGE_INDIVIDUAL:
					require "perfomance/blocs/bloc_general_individual.php";
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
		<div id="date_time"> <?php require "perfomance/blocs/bloc_date_individual.php"; ?> </div>
		<div id="table">
			<?php 
			switch ($path) {
				case Signal::$PAGE_INDIVIDUAL:
					require "perfomance/blocs/bloc_table_building_my_annual.php";
					break;
				case Signal::$PAGE_GROUP:
					require "perfomance/blocs/bloc_table_building_my_annual.php";
					break;
				case Signal::$PAGE_DEPARTMENT:
					require "perfomance/blocs/bloc_table_building_my_annual.php";
					break;
				case Signal::$PAGE_COMPANY:
					require "perfomance/blocs/bloc_table_building_my_annual.php";
					break;
				default:
					require "perfomance/blocs/bloc_table_building_my_annual.php";
					break;
			} 
			?> 
		</div>
		<div id='footer'> <?php require "TrainingBlocs/footer.php"; ?> </div>
		
	</div>
</body>
</html>

