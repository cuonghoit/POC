<?php 
	require "menu_manager.php";
	
	if (isset($_POST["logout_button"])) {
		session_destroy();
		header('Location:login.php');
	}
?>

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
<span></span>
</a>

<form method="post" id="form_menu">

	<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="./training.php">Home</a></li>
<?php
	if(isset($_SESSION[Signal::$SESSION_STAFFROLE])) {
		$staffRole = $_SESSION[Signal::$SESSION_STAFFROLE];
		switch ($staffRole) {
			case 1:
				getEmployeeMenu();
				break;
			case 2:
				getGroupLeadMenu();
				break;
			case 3:
				getDepartmentManagerMenu();
				break;
			case 4:
				getBODMenu();
				break;
			default:
				getEmployeeMenu();
				break;
				
		}
	}
?>

</ul>
<div id="id_user_name"> 
	<table width="100%">
  <tbody>
    <tr>
      <td> <?php echo $_SESSION[Signal::$SESSION_USERNAME] ?>  </td>
      <td><button id="btn_logout" name="logout_button" form="form_menu"> Logout </button> </td>
    </tr>
  </tbody>
</table>
	
</div>
<br style="clear: left" />
</div>
	
</form>

