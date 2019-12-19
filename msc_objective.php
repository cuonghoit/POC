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
				case Signal::$MSC_OBJECTIVE_ANNUAL:
					require "perfomance/blocs/bloc_general_individual.php";
					break;
				case Signal::$MSC_OBJECTIVE_MONTHLY:
					require "perfomance/blocs/bloc_general_info_monthly.php";
					break;
				case Signal::$MSC_OBJECTIVE_PERSONAL_DEVELOPMENT:
					require "perfomance/blocs/bloc_general_info_monthly.php";
					break;
				default:
					require "perfomance/blocs/bloc_general_individual.php";
					break;
			} 
			?> 
		</div>
		<div id="date_time"> <?php require "perfomance/blocs/bloc_date_individual.php"; ?> </div>
		<div id="table">
			<?php 
			switch ($path) {
				case Signal::$MSC_OBJECTIVE_ANNUAL:
					require "perfomance/blocs/bloc_table_building_my_annual.php";
					break;
				case Signal::$MSC_OBJECTIVE_MONTHLY:
					require "perfomance/blocs/bloc_table_monthly_msc_objective.php";
					break;
				case Signal::$MSC_OBJECTIVE_PERSONAL_DEVELOPMENT:
					require "perfomance/blocs/bloc_table_personal_development.php";
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

