<?php

       mysql_connect("localhost","root","");
		mysql_select_db("event");
   
       $delt_record = $_GET['del'];
	   $query = "delete from eventsAll where Id=$delt_record";
	   if(mysql_query($query)){
	   echo "<script>alert('Record Deleted')</script>";
	   header("location:adminEvent.php");
}	  
?>