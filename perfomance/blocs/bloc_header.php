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
				case 'msc_objecctive_annual':
					$title = 'BUILDING MY ANNUAL MSC OBJECTIVES';
					break;
				case 'msc_objecctive_monthly':
					$title = 'BUILDING MY MONTHLY MSC OBJECTIVES';
					break;
				case 'msc_objecctive_personal_development':
					$title = 'BUILDING MY PERSONAL DEVELOPMENT MSC OBJECTIVES';
					break;
				case 'approve_annual_msc':
					$title = 'APPROVING MY EMPLOYEE ANNUAL MSC OBJECTIVES';
					break;
				case 'approve_monthly_msc':
					$title = 'APPROVING MY EMPLOYEE MONTHLY MSC OBJECTIVES';
					break;
				default:
					$title = '';
					break;
	}
?>
<body>
	
	<div id="company_name"> PHU QUOC PETROLEUM OPERATING COMPANY </div>
	<div id="program_name"> PERFORMANCE MANAGEMENT SYSTEM </div>
	<br/>
	<div id="level"> <h3><?php echo($title) ?></h1>   </div>
</body>
</html>
