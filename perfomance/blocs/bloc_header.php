<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/title_individual.css"/>
	
<?php 
	$title = '';
	$path = isset($_GET['p']) ? $_GET['p'] : '';
	switch ($path) {
				case 'individual':
					$title = 'INDIVIDUAL';
					break;
				case 'group':
					$title = 'GROUP';
					break;
				case 'department':
					$title = 'DEPARTMENT';
					break;
				case 'company':
					$title = 'COMPANY';
					break;
				default:
					$title = 'INDIVIDUAL';
					break;
	}
?>
<body>
	
	<div id="company_name"> PHU QUOC PETROLEUM OPERATING COMPANY </div>
	<div id="program_name"> PERFORMANCE MANAGEMENT SYSTEM </div>
	<br/>
	<div id="level"> <h3>BUILDING MY <?php echo($title) ?> ANNUAL MSC OBJECTIVES</h1>   </div>
</body>
</html>
