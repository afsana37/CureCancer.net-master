<?php

	 $DB_host = "mysql9.000webhost.com";
	 $DB_user = "a2270316_cancer";
	 $DB_pass = "cse300";
	 $DB_name = "a2270316_cancer";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

?>