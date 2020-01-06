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
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="javascrip/trainingJS.js"></script>
</head>	
<link rel="stylesheet" type="text/css" href="css/training.css"/>
<link rel="stylesheet" type="text/css" href="css/title_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/general_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/table_individual.css"/>
<link rel="stylesheet" type="text/css" href="css/training_footer.css"/>
<link rel="stylesheet" type="text/css" href="css/training_menu.css"/>

<body>
	<div id="menu"> <?php require "TrainingBlocs/menu.php"; ?> </div>
	<center> <h1>HOME PAGE</h1> </center>
</body>
</html>

