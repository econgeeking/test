<?php
     class testconn
	 {
		 static $conn = NULL;
		 function getConnection()
		 {
			 $server1 = "35.236.189.145";
			 $database1 = "project";
			 $databaseuser = "root";
			 $databasepassword = "zzz";
			  
			 if(!isset($conn))
			 {	 
			     try
				 {
					 $conn = new PDO("mysql:host=$server1; dbname=$database1;", $databaseuser, $databasepassword);
					 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					 $conn->exec("set names utf8");
				 }
             
			     catch(Exception $e)
			    {
				    echo $e->getMessage();
				    error_log($e->getMessage(),0);
			    }
			 }
			 return $conn;
         }
	 }
?>