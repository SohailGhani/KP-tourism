<?php

session_start();
if (isset($_SESSION['currentuser'])) {
  
  header("location:adminEvent.php");
}
else{

  echo "<h1>You must be loged in to see this page</h1>";
  }
?>