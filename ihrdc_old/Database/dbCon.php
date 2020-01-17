<?php



function getConnection() {
<<<<<<< HEAD
	$con = mysqli_connect("localhost", "root", "", "ihrdc-old");
=======
	$con = mysqli_connect("localhost", "root", "", "IHRDC_old");
>>>>>>> 1bdfaab21213809deca6ffa149d6313845c0d678
	//mysql_select_db("ihrdc");
	mysqli_query($con, "SET NAMES 'utf8'");
	return $con;
}

?>
