<?php
/*******************************************************************
*
	DESCRIPTION:     This form is used to connect from with the database
*				   
* 	CREATED:         31 May, 2013
* 	AUTHOR/S:        Rajni, Suraj
*
* (cc) WeaveBytes InfoTech Pvt Ltd, www.weavebytes.com
*
*
*
**********************************************************************************/

	define('HOST','localhost');
	define('USER','weavebyt_navi');
	define('PASSWORD', 'st01c');
	define('DBNAME','weavebyt_trucks');

	//conencting to database
	$con=mysql_connect(HOST, USER, PASSWORD);
	if(!$con){
		echo"connection not created";
	}
	
	//selecting database
	$db=mysql_select_db(DBNAME);
		
	if(!$db){
		die("<b>ERROR: Failed to connect to database. <br>Can't continure further...</b>");
	}
?>
