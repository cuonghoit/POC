<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	
</head>
<link rel="stylesheet" type="text/css" href="../css/training_footer.css"/>
	
<body>
	<form id="form1" name="form2" method="post">
		<div>
		<?php 
			$content = 'SUBMIT TO SUPERVISOR FOR APPROVAL: ';
			$value = isset($_GET['p']) ? $_GET['p'] : '';
			switch ($value) {
				case Signal::$PAGE_INDIVIDUAL:
					$content = 'SUBMIT TO SUPERVISOR FOR APPROVAL: ';
					break;
				case Signal::$PAGE_GROUP:
					$content = 'SUBMIT TO LINE MANAGER FOR APPROVAL: ';
					break;
				case Signal::$PAGE_DEPARTMENT:
					$content = 'SUBMIT TO DIRECTOR IN CHARGE FOR APPROVAL: ';
					break;
				case Signal::$PAGE_COMPANY:
					$content = 'SUBMIT TO GENERAL DIRECTOR FOR APPROVAL: ';
					break;
				default:
					$content = 'SUBMIT TO SUPERVISOR FOR APPROVAL: ';
					break;
			}
			$approval = isset($_GET['s']) ? $_GET['s'] : '';
			if ($approval === Signal::$SIGNAL_APPROVAL) {
		?>
			<div id='signal_approval'> 
				<button id='btn_approval'> Approve </button>
				<button id='btn_reject'> Reject</button>
			</div>
		<?php } else { ?>
			<div id="submit_plan"> <?php echo $content ?>
				<button type="submit" name="btn_submit" form="form1" value="Submit" onclick="saveIndividualTraining(<?php echo $_SESSION[Signal::$SESSION_USERID] ?>)"> Submit </button>
			</div>
			<?php if($value === Signal::$PAGE_COMPANY) {?>
				<div id='div_print'> <button id='btn_print_out'> Print Out </button> </div>
		<?php }
				} ?>	
		</div>
    </form>
</body>
</html>
