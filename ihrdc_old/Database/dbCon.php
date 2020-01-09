<?php 



function getConnection() {
	$con = mysqli_connect("localhost", "root", "", "IHRDC");
	//mysql_select_db("ihrdc");
	mysqli_query($con, "SET NAMES 'utf8'");
	return $con;
}

?>