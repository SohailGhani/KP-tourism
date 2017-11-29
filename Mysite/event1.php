
<?php
 mysql_connect("localhost","root","");
mysql_select_db("event");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $phone = $_POST['phone'];
    
    $query = mysql_query ("insert into users (`name`,`nic`,`phone`) values ('$name','$nic','$phone')");
    header("location:Mysite.php");

      if($query){
         
      }                  
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Event 1</title>
</head>
<body>
<form action="" method="post">
       
      <table align = "center" width="500px" border="1px">
          <tr >
              <td  bgcolor = "wheat" colspan = "5" align ="center"><h1>INSERT NEW ENTRY HERE</h1> </td>
          </tr>
          <tr>
              <td align="center">Name</td>
              <td><input type="text" name="name"></td>
          </tr>
          <tr>
              <td align="center">NIC</td>
              <td><input type="text" name="nic"></td>
          </tr>
           <tr>
              <td align="center">Phone #</td>
              <td><input type="text" name="phone"></td>
          </tr>
          
          <tr><td><a href="event1.php"><input type = "submit" name="submit" value = "Register"></a></td></tr>
          
      </table>
          
   </form>
</body>
</html>

