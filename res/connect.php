<?php
			$servername = "localhost";
			$username = "root";
			$password = "femi";
			$dbname = "cu-portal";
			
			$conn = mysql_connect($servername, $username, $password);
			mysql_select_db($dbname, $conn);
			
?>