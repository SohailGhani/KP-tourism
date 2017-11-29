<html>
<head>
<title>Destination</title>
 <link rel="stylesheet" href="Mysite.css" type="text/css"/>
 <link rel="stylesheet" type="text/css" href="CSS/800px.css" media="screen and (max-width: 800px)"/>

<head>
<body>

<div id="wrapper">
<div id="header">
            <div id="logo"><a href="Mysite.php"><img src="logo.png"></a></div>
            <input type="text box" placeholder="search here...">
            <ul>
            <li><a href="adminDestination.php">DESTINATION</a></li>
            <li><a href="adminEvent.php">EVENTS</a></li></ul>

            </ul>
</div>

<div id="content" style="margin-top:70px;">
<?php
  mysql_connect("localhost","root","");
		mysql_select_db("event");
   $edit = $_GET['edit'];
   $query = "select * from disti where Id = '$edit'";
   $run = mysql_query($query);
   while ($row=mysql_fetch_array($run)){
	    $name = $row['Name'];
       $visi = $row['Visited'];
       $pm = $row['PMDC'];
        $disc= $row['Descroption'];
	   
   }


?>

<!DOCTYPE html>

<head>

    <title>Edit Product</title>
</head>
<body>
  <form action="" method="post">
       
      <table align = "center" width="500px" border="5px" style="color:white;">
          <tr >
              <td  bgcolor = "wheat" colspan = "5" align ="center"><h1>OUR PRODUCTS</h1> </td>
          </tr>
          <tr>
              <td>Event_Name</td>
              <td><input type="text" name="name" value="<?php echo $name?>"></td>
          </tr>
          <tr>
              <td>Event_Vanue</td>
              <td><input type="text" name="vanue" value="<?php echo $visi?>"></td>
          </tr>
           <tr>
              <td>Event_status</td>
              <td><input type="text" name="status" value="<?php echo $pm?>"></td>
          </tr>
           <tr>
              <td>Event_dicreption</td>
              <td><input type="text" name="disc" value="<?php echo $disc?>"></td>
          </tr>
          
          <tr><td><input type = "submit" name="submit" value = "Update"></td></tr>
      </table>

          
   </form>

   </body>
   </html>
   <?php


mysql_connect("localhost","root","");
mysql_select_db("event");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $eventvanue = $_POST['vanue'];
    $status = $_POST['status'];
    $disc= $_POST['disc'];
     $q1 = "UPDATE disti set Name = '$name', Visited = '$eventvanue', PMDC = '$status', Descroption = '$disc'
  where Id = $edit LIMIT 1";
    $query = mysql_query ($q1);
    
    header("location:adminDestination.php");
      if($query){
         
      }                  
}
?>

</div>
<div id="footer">

<div id="share-buttons">
    
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="fb.png" alt="Facebook" />
    </a>
    
    
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
        <img src="lingdin.png" alt="LinkedIn" />
    </a>
    
    <!-- Pinterest -->
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="p.png" alt="Pinterest" />
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="twitter.png" alt="Twitter" />
    </a>


    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="googleplus.png" alt="Google" />
    </a>
    
    <!-- VK -->
    <a href="http://vkontakte.ru/share.php?url=https://simplesharebuttons.com" target="_blank">
        <img src="v.png" alt="VK" />
    </a>
    
    <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="print.png" alt="Print" />
    </a>
    
    <!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <img src="email.png" alt="Email" />
    </a>

</div>
<h2>Testimonial</h2><br>

    Thanks for this wonderful trip. I believe I learned a lot from the valuable company and comments of respected participants. I will send you my detailed feedback based on my initial ideas about these efforts i.e., conservation, promotion and sustainable use/tourism at archaeological sites in Pakistan”. (Dr Muhammad Arif, Islamic International University Islamabad, Participant of Swat Archaeological Tour)pants. I will send you my detailed feedback based on my initial ideas about these efforts i.e., conservation, promotion and sustainable use/tourism at archaeological sites in Pakistan”. (Dr Muhammad Arif, Islamic International University Islamabad, Participant of Swat Archaeological Tour)<br><br><br>
    <img src="user.jpg" alt="Testimonial" class="img-responsive">
    <br>Dr Muhammad Arif<br>Visited Swat Recently
   
</div>
</div>
<script type="text/javascript" src="Mysite.js"></script>
</body>
</html>