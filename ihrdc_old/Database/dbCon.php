<?php



function getConnection() {
	$con = mysqli_connect("localhost", "root", "", "ihrdc-old");
	//mysql_select_db("ihrdc");
	mysqli_query($con, "SET NAMES 'utf8'");
	return $con;
}

?>
